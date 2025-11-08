<?php
session_start();
include 'connect.php';

var_dump($_SESSION);  // => تأكد من user_id
var_dump($_POST);     // => تأكد من البيانات المرسلة

// استلام البيانات من POST
$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
    die("خطأ: لم يتم العثور على user_id في الجلسة");
}

$main_field = $_POST['main_field'] ?? '';
$career_1 = $_POST['career_1'] ?? '';
$career_1_percent = $_POST['career_1_percent'] ?? 0;
$career_2 = $_POST['career_2'] ?? '';
$career_2_percent = $_POST['career_2_percent'] ?? 0;
$career_3 = $_POST['career_3'] ?? '';
$career_3_percent = $_POST['career_3_percent'] ?? 0;

$sql = "INSERT INTO test_results 
(user_id, main_field, career_1, career_1_percent, career_2, career_2_percent, career_3, career_3_percent)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issdsssd", $user_id, $main_field, $career_1, $career_1_percent, $career_2, $career_2_percent, $career_3, $career_3_percent);

if ($stmt->execute()) {
    echo "تم حفظ النتيجة بنجاح!";
} else {
    echo "خطأ أثناء الحفظ: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
