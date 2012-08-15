<?php

//--------------Connect to MySQL Server at localhost-----------------------//

//varriable holds connection information
$link = mysql_connect('localhost', 'creatjd3_PHP', ';NCHg-3lwzn-');
  
  //if it fails return error
  if (!$link) {
  die('Could not connect: ' . mysql_error());
  }

//if it doesnt fail echo message  
echo 'Connected successfully<br>';

//-------------Select Database--------------------------------------------//

// make creatjd3_dayCare the current db
$db_selected = mysql_select_db('creatjd3_dayCare', $link);

//if it fails return error
if (!$db_selected) {
    die ('Can\'t use creatjd3_dayCare : ' . mysql_error());
}

//if it does not fail echo message
echo 'selected creatjd3_dayCare as current db<br>'; 

?>