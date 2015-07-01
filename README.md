When I Work library
=====================

This library support connection and retrieve data from WhenIWork.com api.

Convert a text string to a list of tags

```php
$jmsSerializer = new JMS\Serializer\Serializer();
$client = new Guzzle\Http\Client()
$whenIWorkApi = new WhenIWorkApi($client, 'your-developer-key', 'user-email', 'user-password');
$userRepository = new Repository\WhenIWorkUserRepository($whenIWorkApi, $jmsSerializer);
```

List of all users

```php
$users = $userRepository->findAll();
```

