When I Work library
=====================

This library support connection and retrieval of data from WhenIWork.com API. At least PHP 7.4 is required.

Docs:
http://dev.wheniwork.com

```php

require_once __DIR__ . '/vendor/autoload.php';

use MyBuilder\Library\WhenIWork\Repository\PayrollRepository;
use MyBuilder\Library\WhenIWork\Repository\UserRepository;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$client = new GuzzleHttp\Client();
$whenIWorkApi = new WhenIWorkApi($client, 'your-developer-key', 'user-email', 'user-password');
$userRepository = new UserRepository($whenIWorkApi, $serializer);
$payrollRepository = new PayrollRepository($whenIWorkApi, $serializer);
```

### List of all users:

```php
$users = $userRepository->findAll();
```

### List of all payroll periods:

```php
$payrolls = $payrollRepository->findByPeriod();
```


Todos:

- Add more models that are supported via WhenIWork API
- Add more functions that are supported via WhenIWork API
