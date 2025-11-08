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

// استرجاع جميع النتائج الخاصة باليوزر
$stmt = $conn->prepare("SELECT main_field , career_1, career_1_percent, career_2, career_2_percent, career_3, career_3_percent
                        FROM test_results
                        WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$res = $stmt->get_result();
$data = $res->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conn->close();

echo json_encode($data);
