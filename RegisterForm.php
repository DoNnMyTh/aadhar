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
     
              $qry="Insert into register values('$username','$password','$gender','$dob','$phone','$state','$city','$email','User','unblocked');";
             echo($qry); $rows = $con->query($qry);
               if($rows>0)
              {
                  echo('<br>Data inserted successfully!!');
             }
         else
         {
                   echo("<br>Data not inserted successsfully!!");
             }
     
     
     


?>