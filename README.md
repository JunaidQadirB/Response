Response
===========
Response is an helper class which handles HTTP response, status codes and messages returned from different functions. Useful for unifiying API responses.

Installation
============
```php
$ composer require jeykeu/response
```

Usage 
==========
to return json in response of an AJAX request
```php
$response = new \JeyKeu\Response\Response();
echo $response->json('success', 'Thank You');
```
