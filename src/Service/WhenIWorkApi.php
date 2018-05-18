<?php

namespace MyBuilder\Library\WhenIWork\Service;

use GuzzleHttp\Client;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use MyBuilder\Library\WhenIWork\Exception\WhenIWorkApiException;

class WhenIWorkApi
{
    const WHEN_I_WORK_ENDPOINT = 'https://api.wheniwork.com/2';

    /**
     * Used to query API by date
     */
    const WHEN_I_WORK_TIME_FORMAT  = 'Y-m-d';

    private $developerKey;

    private $email;

    private $password;

    private $apiToken;

    /**
     * @var Client
     */
    private $client;

    public function __construct(
        Client $client,
        $developerKey,
        $email,
        $password
    ) {
        $this->client = $client;
        $this->developerKey = $developerKey;
        $this->email = $email;
        $this->password = $password;
    }

    // Methods for 'users'

    /**
     * Call API for a list of users
     *
     * @return array
     *
     * @throws WhenIWorkApiException
     */
    public function usersListingUsers()
    {
        return $this->fetchResourceForKey('/users', 'users');
    }

    /**
     * Call API for a user data for the given id
     *
     * @param $id
     *
     * @return array
     * @throws WhenIWorkApiException
     */
    public function usersGetExistingUser($id)
    {
        return $this->fetchResourceForKey('/users/' . $id, 'user');
    }


    // methods for 'payroll'

    /**
     * List payroll periods or find ones within a specified date range.
     *
     * If any part of a pay period is in the range given, it will be returned.
     *
     * @see http://dev.wheniwork.com/#listing-payrolls
     *
     * @param \DateTimeInterface|null $startDate Optional start date for searching
     * @param \DateTimeInterface|null $endDate   Optional end date for searching
     *
     * @return array zero or more pay periods
     */
    public function payrollListingPayrolls(\DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null)
    {
        $apiDates = [];
        if ($startDate) {
            $apiDates['start'] = $this->parseDateTimeToApiFormat($startDate);
        }
        if ($endDate) {
            $apiDates['end'] = $this->parseDateTimeToApiFormat($endDate);
        }

        return $this->fetchResourceForKey(
            '/payrolls/?' . http_build_query($apiDates),
            'payrolls'
        );
    }

    // Methods for 'times'

    /**
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     *
     * @return array
     * @throws WhenIWorkApiException
     */
    public function timesListingTimes(\DateTime $startDate, \DateTime $endDate)
    {
        $startDate = $this->parseDateTimeToApiFormat($startDate);
        $endDate = $this->parseDateTimeToApiFormat($endDate);

        return $this->fetchResourceForKey(
            '/times/?start= '. $startDate . '&end= '. $endDate,
            'times'
        );
    }

    /**
     * Note: WhenIWork API ignores start/end parameters on this particular call
     *
     * @param $userId
     * @param $startDate
     * @param $endDate
     *
     * @return array
     * @throws WhenIWorkApiException
     */
    public function timesGetUserTimes($userId, $startDate, $endDate)
    {
        $startDate = $this->parseDateTimeToApiFormat($startDate);
        $endDate = $this->parseDateTimeToApiFormat($endDate);

        return $this->fetchResourceForKey(
            '/times/user/' . $userId . '/?start='. $startDate . '&end='. $endDate,
            'times'
        );
    }

    /**
     * @param $timeId
     *
     * @return array
     * @throws WhenIWorkApiException
     */
    public function timesGetExistingTime($timeId)
    {
        return $this->fetchResourceForKey(
            '/times/' . $timeId,
            'time'
        );
    }

    // Methods for 'positions'

    /**
     * @return array
     * @throws WhenIWorkApiException
     */
    public function positionsListingPositions()
    {
        return $this->fetchResourceForKey(
            '/positions',
            'positions'
        );
    }

    /**
     * @param $positionId
     *
     * @return array
     * @throws WhenIWorkApiException
     */
    public function positionsGetExistingPosition($positionId)
    {
        return $this->fetchResourceForKey(
            '/positions/' . $positionId,
            'position'
        );
    }

    // private methods and utils

    private function parseDateTimeToApiFormat(\DateTime $dateTime)
    {
        return Carbon::instance($dateTime)->format(self::WHEN_I_WORK_TIME_FORMAT);
    }

    private function fetchResourceForKey($entryPoint, $valueKey)
    {
        $response = $this->get($entryPoint);

        return $response[$valueKey];
    }

    private function get($entryPoint)
    {
        $this->setUp();

        try {
            $response = $this->client->get(
                self::WHEN_I_WORK_ENDPOINT . $entryPoint,
                array('headers' => array('W-Token' => $this->apiToken))
            );

            return \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            throw new WhenIWorkApiException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Setups the api token received from WhenIWork API. It's called only once
     *
     * @throws WhenIWorkApiException
     */
    private function setUp()
    {
        if ($this->apiToken) {
            return;
        }

        $options = array(
            'headers' => array('W-Key' => $this->developerKey),
            'json' => array("username" => $this->email, "password" => $this->password)
        );

        try {
            $response = $this->client->post(
                self::WHEN_I_WORK_ENDPOINT . '/login',
                $options
            );

            $decodedResponse = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            throw new WhenIWorkApiException($e->getMessage(), $e->getCode(), $e);
        }

        $this->apiToken = $decodedResponse['login']['token'];
    }
}
