<?php

    // $logfile = __DIR__ . "/app.log";

    // $message = "This is a test message\n";

    // error_log($message, 3, $logfile);

    // echo "Log entry dreated";

    $users = [
        [
            'id' => 1,
            'name' => 'John',
            'age' => 25,
            'email' => 'john@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Jane',
            'age' => 30,
            'email' => 'jane@example.com'
        ],
        [
            'id' => 3,
            'name' => 'Bob',
            'age' => 35,
            'email' => 'bob@example.com'
        ]
    ];

    header("Content-Type: application/json");

    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':
            echo json_encode($users);
            break;
        
        case 'POST':
            $data = json_decode(file_get_contents('php://input'), true);
            $newUsers = ["id" => count($users) + 1, "name" => $data['name'], "age" => $data['age'], "email" => $data['email']];
            array_push($users, $newUsers);
            echo json_encode($users);
            break;
        
        default:
            http_response_code(405);
            echo json_encode(["message" => "Method not allowed"]);
            break;
    }

?>