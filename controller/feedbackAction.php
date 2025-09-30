<?php
session_start();
require('../model/feedbackModel.php');

$feedbackList = getAllFeedbacks();
$_SESSION['feedbackList'] = $feedbackList;

header("Location: ../view/feedback.php");
exit();
?>