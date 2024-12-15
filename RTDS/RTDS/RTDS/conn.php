<?php
/* Database config */
$db_host		= '172.21.6.14';
$db_user		= 'geshiaro';
$db_pass		= 'P@$$w0rd!!';
$db_database	= 'geshiaro';

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
