<?php
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

        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $email = $_POST['email'];
        $country = $_POST['country'];

        $sql1 = "INSERT INTO users (first_name,last_name,email_id,country) VALUES ('$fn','$ln','$email','$country')";
        $result1 = $conn->query($sql1);

	if( $result1 === TRUE )
	{
        echo "SUCCESSFUL";
		header("Refresh:1;url= index.html");
	}
    else{
        echo "Unsuccessful";
        header("Refresh:1;url= index.html");
    }

    $conn->close();
?>