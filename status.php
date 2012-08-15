<?PHP

include 'connect.php';
//--------------------------------------------Functions---------------------//

//function to determine witch database is selected
function mysql_current_db() {
    $r = mysql_query("SELECT DATABASE()") or die("-Could not determine selected db: ".mysql_error());
    return mysql_result($r,0);
}

//-------------------------------------------Results----------------------//

echo @mysql_ping() ? '-Connected To MySQL<br>' : '-No Active MySQL Connection<br>';

echo "-The current database is ".mysql_current_db();

?>