ReturnValue
===========
ReturnValue is an helper class to handle return values, status codes and messages returned from different functions.

Installation
============
```php
$ composer require jeykeu/returnvalue
```

Useage 
==========
to return json in response of an AJAX request
```php
$response     = new \Response\Response();
echo $response->json('success', 'Thank You');
exit;
```
