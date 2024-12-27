<?php

    $url = "https://jsonplaceholder.typicode.com/posts/1";  // Fixed the URL

    $response = file_get_contents($url);

    // Check if the response is valid
    if ($response !== false) {
        $data = json_decode($response, true);

        // Check if the JSON decoding is successful
        if ($data !== null) {
            echo "Post title: " . $data["title"] . "<br>";
            echo "Post body: " . $data["body"] . "<br>";
        } else {
            echo "Error decoding JSON.";
        }
    } else {
        echo "Error fetching the data from the URL.";
    }

?>
