<?php
define('db_user', 'root');
define('db_password', '');
define('db_host','localhost');
define('db_name','registeration');

$conn = mysqli_connect(db_host, db_user, db_password, db_name);

if(mysqli_connect_errno())
{
    echo " Failed to connect to MYSQL: ".mysqli_connect_errno();
}
?>