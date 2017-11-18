<?php

include'Config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

    $to = $_GET['to'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    $from=$_GET['from'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mail (mail_to,mail_from,mail_subject,mail_message)
VALUES ('".$to."', '".$from."','".$subject."','".$message."')";


if ($conn->query($sql) === TRUE) {

    $headers = 'From:  "'.$from.'"' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo "Mail sent successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>


