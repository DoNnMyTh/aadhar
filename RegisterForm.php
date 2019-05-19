<?php 
     $username=$_POST['username'];
     $password=$_POST['pwd'];
     $gender=$_POST['gender'];
     $dob=$_POST['date'];
     $phone=$_POST['phone'];
     $state=$_POST['state'];
     $city=$_POST['city'];
     $email=$_POST['email'];
     
                       
     
          $con =new mysqli("localhost","root","","namitadb");
          if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            } 
     
              $qry=`Insert into register values('$username','$password','$gender','$dob','$phone','$state','$city','$email','User','unblocked');`;
              $rows = $con->query($qry);
               if($rows>0)
              {
                  echo('<br>Data inserted successfully!!');
             }
         else
         {
                   echo("<br>Data not inserted successsfully!!");
             }
     
     
     
             $con->close();

?>