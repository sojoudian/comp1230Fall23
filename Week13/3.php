<?php
// 3. Exception Handling Scenario
function validateData($data) {
    if (empty($data['email'])) {
        throw new DataValidationException("Email is required", "email");
    }
    // Additional validation logic can be added here
}

try {
    $userData = ['email' => '']; // Example invalid data
    validateData($userData);
} catch (DataValidationException $e) {
    echo $e->getDetailedMessage();
} catch (Exception $e) {
    echo "General error: " . $e->getMessage();
} catch (Throwable $t) {
    echo "Error: " . $t->getMessage();
}