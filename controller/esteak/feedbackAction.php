<?php
session_start();
require('../../model/esteak/feedbackModel.php');

$feedbackList = getAllFeedbacks();
$_SESSION['feedbackList'] = $feedbackList;

header("Location: ../../view/esteak/feedback.php");
exit();
?>