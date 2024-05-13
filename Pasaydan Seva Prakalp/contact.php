<html>
  <head>
    <title>Message Sent Successfully</title>
    <style>
      body 
      {   
        background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20190831/pngtree-pastel-colorful-background-clouds-image_312444.jpg");
        background-position:center;
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
      }
    </style> -->
  </head>


<body" text="Blue" align="center">
<br><br>


<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) 
{
  die("Connection error: " . mysqli_connect_error());
} 

$sql = "INSERT INTO data (name, email, subject, body)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) 
{
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss",
                       $name,
                       $email,
                       $subject,
                       $message);

mysqli_stmt_execute($stmt);


?>
<div>
<h1 ><em>YOUR RESPONSE HAS BEEN Accepted.</em></h1>
<p><h3>Thank your for contacting us!</h3></p>
</div>
<img src="assets/img/pampalet.png" alt="photo"height="1200" width="1500" >
</body>
</html>