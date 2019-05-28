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
     
              $qry = "INSERT INTO `register` VALUES (".$username.",".$password.",".$gender.",".$dob.",".$phone.",".$state.",".$city.",".$email.");";
              echo ($qry."<br>");
              if (mysqli_query($con, $qry)) {
                echo "New record created successfully";
            } else {
                echo "Error: <br>" . mysqli_error($con);
            }
     
     
             mysqli_close($con); 

?>