<?php
session_start();
require_once "connect.php";

// تأكد إن المستخدم مسجل دخول
if (!isset($_SESSION['user_id'])) {
    echo "Error: user not logged in";
    exit;
}

$user_id = $_SESSION['user_id']; // ناخذ معرف المستخدم من الجلسة
$job1 = $_POST['job1'] ?? '';
$job1_percent = floatval($_POST['job1_percent'] ?? 0);
$job2 = $_POST['job2'] ?? '';
$job2_percent = floatval($_POST['job2_percent'] ?? 0);
$job3 = $_POST['job3'] ?? '';
$job3_percent = floatval($_POST['job3_percent'] ?? 0);

$stmt = $conn->prepare("INSERT INTO scenarios_results 
    (user_id, job1, job1_percent, job2, job2_percent, job3, job3_percent) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isdsdsd", $user_id, $job1, $job1_percent, $job2, $job2_percent, $job3, $job3_percent);

if ($stmt->execute()) {
    echo "Result saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
