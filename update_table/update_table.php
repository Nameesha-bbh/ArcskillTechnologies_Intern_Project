
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Content</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    
    <link rel="stylesheet" href="update_table.css">
    <style>
            .customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            .customers td, .customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            .customers tr:nth-child(even){background-color: #f2f2f2;}

            .customers tr:hover {background-color: #ddd;}

            .customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
    </style>
    <script src="update_table.js"></script>
</head>
<body>
        
                

        <table class="customers" name="table">

                <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Country</th>
                     
                </tr>
                    <?php
                        $uid = $_GET["userid"];
                    
                        $con = mysqli_connect('localhost', 'root', 'nameesha') or die(mysqli_error($con));
                        mysqli_select_db($con, 'details')  or die(mysqli_error($con));
                        $query =  "select * from users where id = $uid;";
                        
                        
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc()) {
                                $first_name = $row['first_name'];
                                $last_name = $row['last_name'];
                                $email_id = $row['email_id'];
                                $country = $row['country'];
                                echo "<tr><td>".$row['first_name']."</td><td>".$row['last_name'].
                                "</td><td>".$row['email_id'].
                                "</td><td>".$row['country'].
                                "</td></tr>";
                            }
                        }
                        else{
                            echo "NO DATA";
                        }
                    ?>
        </table>
        <div class="login-box">
            <h2>Update Form</h2>
            <form method="POST" action="update_details.php">
                 <div class="user-box">
                    <input type="text"  value="<?php echo $uid?>" name="user_id" readonly>
                    <label></label>
                </div>
                <div class="user-box">
                    <input type="text" value="<?php echo $first_name?>" name="first_name" autocomplete="off">
                    <label>First name</label>
                </div>
                <div class="user-box">
                    <input type="text" value="<?php echo $last_name?>" name="last_name" autocomplete="off">
                    <label>Last name</label>
                </div>
                <div class="user-box">
                    <input type="text" value="<?php echo $email_id?>" name="email_id" autocomplete="off">
                    <label>Email ID</label>
                </div>
                <div class="user-box">
                    <input type="text" value="<?php echo $country?>" name="country" autocomplete="off">
                    <label>Country</label>
                </div>
                <button class="btn btn-success">Update</button>
            </form>
        </div>
       
        
    
</body>
</html>

