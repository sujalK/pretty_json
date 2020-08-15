<?php 

    require "vendor/autoload.php";

    use Devscreencast\ResponseClass\JsonResponse;

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