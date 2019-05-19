
<?php


   $State="%";
  if(isset($_REQUEST["q"]))
   $State=$_REQUEST["q"];


        $con =new mysqli("localhost","root","","namitadb");



        $result = $con->query("Select Distinct City from States where State like'$State' order by City Asc;");

        while($row = $result->fetch_Object())
        {
            echo("<option>$row->City</option>");

        }



?>




