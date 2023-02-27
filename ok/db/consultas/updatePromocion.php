<?php
include("../../../db/conn2.php");


include("tools.php");

$query = "
UPDATE promociones 
SET ".$_POST["name"]." = '".$_POST["value"]."' 
WHERE id = '".$_POST["pk"]."'
"; 

$conn3->query($query);