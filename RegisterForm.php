<?php 
     $username=$_POST['username'];
     $password=$_POST['pwd'];
     $gender=$_POST['gender'];
     $dob=$_POST['date'];
     $phone=$_POST['phone'];
     $state=$_POST['state'];
     $city=$_POST['city'];
     $email=$_POST['email'];
     
                       
     
          $con = mysqli_connect("localhost","root","","namitadb");
          if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
     
              $qry = `Insert into register VALUES ('$username','$password','$gender','$dob','$phone','$state','$city','$email');`;
              echo `$qry`;
              if (mysqli_query($con, $qry)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $qry . "<br>" . mysqli_error($con);
            }
     
     
             $con->close();

?>