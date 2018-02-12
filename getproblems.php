<?php
  require_once('MDB2.php');
  include "variables.php";				//For security, authentication use an include file
  $dsn = "mysql://$username:$password@$host/$dbName"; // data source name
  $db = & MDB2::connect($dsn); // make connection, & Assign By Reference

  if (PEAR::isError($db)) { // alert for errors or use global error handler
    die($db->getMessage());
  }

  $tablename="Employee";

  $sql = "SELECT * FROM $tablename";
  $res = & $db->query($sql);										/* runs query on database and stores result in $res */

  if (PEAR::isError($res)) {										/* If there is an error, the process is killed and prints the message */
  die($res->getMessage());
  }

  $db->setFetchMode(MDB2_FETCHMODE_ASSOC);						/*sets mode to store result in associative array */
  $res =& $db->query($sql);

  print_r($res);

?>
