<?php
$con=new mysqli('localhost','root','','test');
if($con){
    echo "Connection successful";
}
else
{
    die(mysqli_error($con)); 
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>hai</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table">
		<thead>
		  <tr>
			<th scope="col">fname</th>
			<th scope="col">lname</th>
			<th scope="col">email</th>
			<th scope="col">password</th>
			<th scope="col">birthday</th>
			<th scope="col">operation</th>
		  </tr>
		</thead>
		<tbody>
            <?php


            $sql  ="Select * from 'registration'";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $fname=$row['fname'];
                    $lname=$row['$lname'];
                    $email=$row['$email'];
                    $password=$row['$password'];
                    $birthday=$row['$birthday'];
                    echo '<tr>
                    <th scope="row">'.$fname.'</th>
                    <td>'.$lname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>'.birthday.'</td>
                  </tr>';
                }
            }
            ?>



		  
		</tbody>
	  </table>
</body>
</html>