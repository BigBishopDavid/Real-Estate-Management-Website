<?php

    function customErrorHandler($errno, $errstr, $errfile, $errline){
        $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline\n";

        error_log($errorMessage, 3, "errors.log");

        echo "An error occurred! Please try again later :(.";
    }

    set_error_handler("customErrorHandler");

    echo $undefinedVariable;

?>