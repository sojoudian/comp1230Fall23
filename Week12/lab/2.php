<?php
    class Logger {
        final public function writeLog($message) {
            echo "Log: $message\n";
        }
    }

    class FileLogger extends Logger {
        // Trying to override writeLog will result in an error
    }

    $fileLogger = new FileLogger();
    $fileLogger->writeLog("This is a test log."); // Output: Log: This is a test log.

    ?>