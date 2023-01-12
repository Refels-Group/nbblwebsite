
<?php
$servername = "db5011523477.hosting-data.io";
$username = "dbu5361223";
$password = "adminnbbl1337";
$dbname = "dbs9720253";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    echo( "connection established \r\n");
}

$userinfo = array($_POST["Name"], $_POST["Surname"], $_POST["Phone"], $_POST["EMail"], $_POST["Password"]);

// Required field names
$required = array('Name', 'Surname', 'Phone', 'EMail', 'Password');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) 
{
    if (empty($_POST[$field])) 
    {
        $error = true;
    }
}

if ($error) 
{
    $errormessage1 = "Bitte alle Felder ausfüllen";
    $_POST[$errormessage1];
    exit();
} 
   


$sql = "INSERT INTO `User` (`Name`, `Surname`, `Phone`, `EMail`, `Role`, `Password`) 
VALUES ('$userinfo[0]', '$userinfo[1]', '$userinfo[2]', '$userinfo[3]', 'Member', '$userinfo[4]')";





if (mysqli_query($conn,$sql)) {
    echo "Registrierung erfolgreich";
}


$conn->close();


?>
