<?php
session_start();
require('../model/doctorListModel.php');

$doctorList = getAllDoctors();
$_SESSION['doctorList'] = $doctorList;

header("Location: ../view/doctorList.php");
exit();
