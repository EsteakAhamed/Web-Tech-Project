<?php
session_start();
require('../../model/esteak/doctorListModel.php');

$doctorList = getAllDoctors();
$_SESSION['doctorList'] = $doctorList;

header("Location: ../../view/esteak/doctorList.php");
exit();
