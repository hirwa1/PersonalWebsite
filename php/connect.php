<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 
$query=$conn->prepare("INSERT INTO entry_details(first_name, last_name, email, subject, message) VALUES (?,?,?,?,?)");

$query->bindParam(1, $first_name);
$query->bindParam(2, $last_name);
$query->bindParam(3, $email);
$query->bindParam(4, $subject);
$query->bindParam(5, $message);
 
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email']; 
$subject =$_POST['subject'];
$message=$_POST['comment'];

$query->execute();

$conn = null;
 
echo 'Hi '.$_POST['fname'].' ' .$_POST['lname'] .' thanks for your interest.</br>';
echo 'We will contact you at '. $_POST['email'].' soon.</br>';
?>