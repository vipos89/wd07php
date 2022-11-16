<?php

    function exception_error_handler($severity, $message, $file, $line) {
        if (!(error_reporting() & $severity)) {
            // Этот код ошибки не входит в error_reporting
            return;
        }
        throw new ErrorException($message, 0, $severity, $file, $line);
    }

    function exceptionHandler(Throwable $exaption){
        echo $exaption->getMessage();
    }
