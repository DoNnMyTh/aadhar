<?php 
     $username=$_POST['username'];
     $password=$_POST['pwd'];
     $gender=$_POST['gender'];
     $dob=$_POST['date'];
     $phone=$_POST['phone'];
     $state=$_POST['state'];
     $city=$_POST['city'];
     $email=$_POST['email'];
     
                       
     
          $con =new mysqli_connect("localhost","root","","namitadb");
          if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            } 
     
              $qry=`Insert into register values('$username','$password','$gender','$dob','$phone','$state','$city','$email','User','unblocked');`;
              if (mysqli_query($con, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
     
     
             $con->close();

?>