<?php
return [
  'GET' => [
    '/' => [
      "controller" => "HomeController",
      "action" => "index"
    ],
    '/about' => [
      "controller" => "HomeController",
      "action" => "about"
    ],
    '/users' =>[
      "controller" => "UserController",
      "action"=> "showAllUsers"
    ]
  ],
];
