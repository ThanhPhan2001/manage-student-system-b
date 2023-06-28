<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'id20845007_admin';
$db_pass		= 'ThanhPro@1023';
$db_database	= 'id20845007_model'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>