# pretty_json
Class that returns formatted JSON response with HTTP status
## Installation
composer require sujal/json-resp


### Usage
```php
<?php 

    require "vendor/autoload.php";

    use Demo\ResponseClass\JsonResponse;

    $student= [
        'name'   => 'John Doe',
        'course' => 'Software Engineering',
        'level'  => '200',
        'collections' => [
            'books' => 'Intro to UML', 
            'music' => 'rap'
        ]
    ];

    new JsonResponse('ok', '', $student);

?>
```

### Param 1 (Required)
1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status (internal server error)

### Param 2 (Optional)
String- the return message, use empty quote if not available

### Param 3 (Optional)
Array - Array of data
