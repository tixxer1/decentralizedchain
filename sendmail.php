<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate processing the POST data
    $data = $_POST;
    
    // Simulate sending an email
    $result = sendEmail($data);

    // Output the result (for demonstration purposes)
    echo json_encode($result);
} else {
    // If it's not a POST request, return an error
    echo json_encode(array("error" => "Invalid request method."));
}

// Function to simulate sending an email
function sendEmail($data) {
    // Here you can perform actual email sending logic,
    // but for demonstration, we'll just return some dummy data
    return array("result" => "success", "message" => "Email sent successfully!");
}
?>
