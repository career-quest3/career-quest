<?php
include "connect.php";
session_start();

header('Content-Type: application/json');

// تأكد من وجود جلسة
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];

// استرجاع جميع نتائج السيناريوهات الخاصة باليوزر
$stmt = $conn->prepare("SELECT job1, job1_percent, job2, job2_percent, job3, job3_percent
                        FROM scenarios_results
                        WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$res = $stmt->get_result();
$data = $res->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conn->close();

echo json_encode($data);
?>
