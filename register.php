<?php
include 'connect.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // ================= SIGNUP =================
    if(isset($_POST['signup'])){
        $fname = trim($_POST['fname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // تحقق إن الإيميل ما موجود مسبقاً
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
            echo "Email already exists!";
            exit;
        }
        $stmt->close();

        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (Full_Name,email,password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $fname, $email, $hashed);
        if($stmt->execute()){
            // بعد التسجيل مباشرة يمكن تسجيل الدخول تلقائياً
            $_SESSION['user_id'] = $stmt->insert_id; // ID الجديد
            session_write_close(); // حفظ الجلسة قبل التحويل
            header("Location: career_test.php");
            exit();
        } else {
            echo "Insert error: ".$stmt->error;
        }
        $stmt->close();
    }

    // ================= SIGNIN =================
    if(isset($_POST['signin'])){
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT user_id,password FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        if($row = $res->fetch_assoc()){
            if(password_verify($password, $row['password'])){
                $_SESSION['user_id'] = $row['user_id'];  // حفظ user_id
                session_write_close(); // 🔹 تأكيد حفظ الجلسة
                header("Location: career_test.php");
                exit();
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "Email not found!";
        }
        $stmt->close();
    }

}
?>
