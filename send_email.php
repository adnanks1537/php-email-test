<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    
    $headers = "From: adnan.redteam@gmail.com"; // Replace with sender's email address
    
    if (mail($to, $subject, $body, $headers)) {
        $response = array('status' => 'success', 'message' => 'Email sent successfully!');
    } else {
        $response = array('status' => 'error', 'message' => 'Failed to send email. Please try again later.');
    }
    
    echo json_encode($response);
} else {
    header("Location: index.html");
}
?>
