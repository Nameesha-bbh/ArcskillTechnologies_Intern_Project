
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Content</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
</head>
<body>
        
                
        
        <table class="customers" name="table">
                <tr>
                        <th>Click to edit</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Country</th>
                        <th>Edit Button</th>
                </tr>
                <?php 
                        $idB = 0;
                        $valB = 0;

                        $con = mysqli_connect('localhost', 'root', 'nameesha') or die(mysqli_error($con));
                        mysqli_select_db($con, 'details')  or die(mysqli_error($con));
                        $query = "SELECT * from users;";
                        
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc()) {
                                    $valB = $valB + 1;
                                    $idB = $idB + 1;
                                echo "<tr><td><input type='radio' onclick='enableB()' name='edit' value='$valB' id='rb'></td><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email_id']."</td><td>".$row['country']."</td><td><button type='submit' id='$idB' disabled>EDIT</button></td></tr>";
                            }
                        }
                        else{
                            echo "NO DATA";
                        }
                ?>
        </table>
       
        <script src="table.js"></script>
</body>
</html>

