<?php
session_start();
$_Session['passengerFN'] = $_POST['firstname'];
$_Session['passengerSN'] = $_POST['surname'];

if (isset($_POST['luggage'])) {
    $_Session['luggage'] =0;
    header('location: luggage.html');
}

else{
    $_Session['luggage'] = 0;
    header('location: finalStep.php');
}


?>