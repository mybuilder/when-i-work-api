[![Build Status](https://travis-ci.org/mybuilder/when-i-work-api.svg?branch=master)](https://travis-ci.org/mybuilder/when-i-work-api)

When I Work library
=====================

This library support connection and retrieve data from WhenIWork.com API.

Docs:
http://dev.wheniwork.com

```php
$jmsSerializer = new JMS\Serializer\Serializer();
$client = new GuzzleHttp\Client()
$whenIWorkApi = new WhenIWorkApi($client, 'your-developer-key', 'user-email', 'user-password');
$userRepository = new Repository\WhenIWorkUserRepository($whenIWorkApi, $jmsSerializer);
```

List of all users:

```php
$users = $userRepository->findAll();
```

Todos:

- Add more models that are supported via WhenIWork API
- Add more functions that are supported via WhenIWork API
