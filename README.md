Response
===========
Response is tiny PHP package which handles HTTP response, status codes and messages returned from different functions. Useful for unifiying API responses.

Installation
============
```php
$ composer require jeykeu/response
```
Laravel 5 Configuration
==========

Add the following line to the `providers` array in `app/config.php`
````php
JeyKeu\Response\ResponseServiceProvider::class
````

And the the following line to the `aliases` array in `app/config.php`
````php
'AjaxResponse' => JeyKeu\Response\ResponseFacade::class
````

Standard PHP Usage
==========
to return json in response of an AJAX request
```php
$response     = new \JeyKeu\Response\Response();
echo $response->json('success', 'Thank You');
exit;
```

Laravel5 Usage
==========
````php
echo AjaxResponse::json('success', 'Thank You');

````

