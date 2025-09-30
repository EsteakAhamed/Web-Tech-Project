<?php
session_start();
require('../model/patientListModel.php');

$patientList = getAllPatients();
$_SESSION['patientList'] = $patientList;

header("Location: ../view/patientList.php");
exit();
?>