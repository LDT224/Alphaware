<?php
	$conn_string = "host=ec2-34-193-112-164.compute-1.amazonaws.com"
        . " port=5432 "
        . " dbname=datn1rj22fsn1f"
        . " user=rwatmezyromljv"
        . " password=6a894227dfa4248780670eb3f3a78baf4f1c45d6a235f22f1f80a94e08177c1e";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } 
?>
