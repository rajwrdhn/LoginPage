<?php
define('dbserver','localhost');
define('dbuser','root');
define('dbpassword' ,'arar1234');
define('dbname', 'loginpage');
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

// check conn
if (mysqli_connect_errno())
{
    echo "Failed to connect to Database : " . mysqli_connect_error();
}

?>

