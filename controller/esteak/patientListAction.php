<?php
session_start();
require('../../model/esteak/patientListModel.php');

$patientList = getAllPatients();
$_SESSION['patientList'] = $patientList;

header("Location: ../../view/esteak/patientList.php");
exit();
?>