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
     
              $qry = "Insert into register VALUES ('$username','$password','$gender','$dob','$phone','$state','$city','$email');";
              if (mysqli_query($con, $qry)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $qry . "<br>" . mysqli_error($con);
            }
     
     
             mysqli_close($con);

?>