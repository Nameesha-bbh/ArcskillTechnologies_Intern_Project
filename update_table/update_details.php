<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email_id = $_POST["email_id"];
        $country = $_POST["country"];
        $uid = $_POST["user_id"];
        

        $servername = "localhost";
        $username = "root";
        $password = "nameesha";
        $dbname = "details";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql1 = "UPDATE users SET first_name='$first_name',last_name='$last_name',email_id='$email_id',country='$country' WHERE id=$uid";
        $result1 = $conn->query($sql1);

        if( $result1 === TRUE )
        {
            echo "SUCCESSFUL";
            header("Refresh:1;url= ../index.html");
        }
        else{
            echo "Unsuccessful";
            header("Refresh:1;url= update_details.html");
        }

    $conn->close();


        

    ?>
</body>
</html>