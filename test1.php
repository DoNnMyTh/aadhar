<?php
session_start();
$ses = $_SESSION['authenticated'];
if ($ses == "apple"){echo "failed";}
elseif ($ses == "jonny"){echo  "pass";}
else{echo "not a vaild option";}
?>