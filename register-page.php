<!DOCTYPE html>

<html lang="ar" dir="ltr">
      <!-- الخطوط -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Suez+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
   <!-- logo font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Pixelify+Sans:wght@400..700&family=Suez+One&display=swap" rel="stylesheet">

         <!-- Linking google fonts for icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
<head>
  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CareerQuest - Auth</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
body {
  margin: 0;
  height: 100vh;                /* ارتفاع كامل للشاشة */
  display: flex;                 /* تفعيل Flexbox */
  justify-content: center;       /* يوسّط أفقياً */
  align-items: center;           /* يوسّط عمودياً */
  font-family: "Segoe UI", sans-serif;
   /* صورة الخلفيه */
  margin: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;

  background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
              url('careerFields2.jpg') no-repeat center center;
  background-size: cover;
  font-family: "Segoe UI", sans-serif;
}

  /* Header */
.header {
    width: 100%;
    height: 75px;
    padding-right: 10px; /* تحرك المحتوى عن اليمين */
    position: fixed;
    top: 0;          
    left: 0;         
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,0.5);
    border-bottom-left-radius: 10px;  
    border-bottom-right-radius: 10px; 
    z-index: 1000;   
}


.logo {
    margin-left: 20px; /* مسافة من اليسار */
    font-family: 'Suez One', serif; /* خط مميز للشعار */
    font-size: 35px; /* حجم الخط */
    font-weight: 200; /* وزن الخط */
    letter-spacing: 1.5px; /* تباعد بين الحروف */
    cursor: pointer; /* تغيير المؤشر عند المرور */
    white-space: nowrap; /* منع التفاف النص */
    background: linear-gradient(to bottom, rgb(10, 10, 151), rgb(100, 100, 230)); 
    -webkit-background-clip: text; /* قص الخلفية على النص */
    -webkit-text-fill-color: transparent; /* جعل النص شفاف */
    background-clip: text; /* قص الخلفية على النص */ 
}

.main {

   padding-right: 20px;
}



.menu ul {
    display: flex;
    list-style: none;
    padding: 0; 
    margin: 0; 
}


.menu ul li {
    margin-left: 18px; 
}

.menu ul li a  {
    text-decoration: none; /* إزالة الخط السفلي */
    color: rgb(0, 0, 0); /* لون النص */
    font-weight: bold; /* جعل النص عريض */
    padding: 4px 8px; 
    font-size: 15px;
    display: block; /* جعل الرابط كتلة */
    border: 2px solid rgba(87, 87, 152, 0.897); /* حدود حول الرابط */
    border-radius: 10px; 
    transition: transform 0.4s ease-in-out, color 0.3s ease-in-out; /* تأثيرات الانتقال */
}


.menu ul li a:hover {
    color: rgb(10, 10, 151); 
    transform: scale(1.1); 
}

.auth-container {
  width: 400px;                  /* عرض ثابت */
  max-height: 600px;             /* أقصى ارتفاع */
  padding: 40px 30px;            /* مساحة داخلية مريحة */
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 35px rgba(0,0,0,0.1);
  overflow-y: auto;              /* إذا المحتوى كبير يظهر scroll */
  display: flex;
  flex-direction: column;
  justify-content: center;       /* محتوى الصندوق في الوسط عمودياً */
}
.auth-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.auth-container h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #0a3d62;
  font-size: 28px;
  font-weight: 700;
  letter-spacing: 1px;
}

.form-group {
  margin-bottom: 22px;
  position: relative;
}
.form-group label {
  display: block;
  margin-bottom: 8px;
  font-weight: 600;
  font-size: 15px;
  color: #333;
}
.form-group input {
  width: 100%;
  padding: 14px 16px;
  border: 1.5px solid #ccc;
  border-radius: 10px;
  font-size: 15px;
  transition: all 0.3s ease;
}
.form-group input:focus {
  border-color: #0a3d62;
  box-shadow: 0 0 8px rgba(10, 61, 98, 0.2);
  outline: none;
}

.error {
  color: #e63946;
  font-size: 13px;
  margin-top: 6px;
  position: absolute;
  bottom: -20px;
  left: 2px;
}
.btn {
  width: 100%;
  padding: 16px;
  background: linear-gradient(135deg, #0a3d62, #1e5a92);
  color: #fff;
  border: none;
  border-radius: 12px;
  font-size: 17px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}
.btn:hover {
  background: linear-gradient(135deg, #052845, #0d4b7a);
  transform: translateY(-2px);
}

.extra-links {
  margin-top: 22px;
  text-align: center;
}
.extra-links a {
  color: #0a3d62;
  text-decoration: none;
  margin: 0 14px;
  font-size: 15px;
  transition: color 0.3s ease;
}
.extra-links a:hover {
  text-decoration: underline;
  color: #052845;
}
.welcome-toast {
  position: fixed;
  bottom: -80px;               /* يبدأ تحت الشاشة */
  left: 50%;
  transform: translateX(-50%);
  background: #fff;            /* خلفية بيضاء */
  color: #0a3d62;              /* نص أزرق غامق */
  padding: 16px 30px;          /* أكبر من قبل */
  border-radius: 25px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  font-size: 18px;             /* تكبير النص */
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
  min-width: 300px;            /* مساحة الإشعار أكبر */
  text-align: center;          /* النص بالوسط */
}

.welcome-toast.show {
  bottom: 40px;   /* يرتفع فوق الأسفل */
  opacity: 1;
}






.hidden {
  display: none;
}


</style>
</head>
<body>

<header class="header">
  <div class="logo">Career Quest</div>
  <nav class="menu">
     <ul>
      <li><a href="scenario_test.php">اختبار السيناريوهات المهني</a></li>
      <li><a href="career_test.php">الاختبار المهني </a></li>
      <li><a href="register-page.php"> إنشاء حساب </a></li>
      <li><a href="index.html">الصفحة الرئيسية</a></li>
      </ul>
  </nav>
</header>

<!-- Login -->
<!-- Login -->
<div id="login" class="auth-container">
  <h2>سجّل الدخول إلى حسابك</h2>
  <form id="loginForm" method="post" action="register.php">
    <div class="form-group">
      <label>البريد الالكتروني</label>
      <input type="email" name="email" id="loginEmail" placeholder="Enter your email" required>
      <div id="errorLoginEmail" class="error"></div>
    </div>

    <div class="form-group">
      <label>كلمة المرور</label>
      <input type="password" name="password" id="loginPassword" placeholder="Enter your password" required>
      <div id="errorLoginPassword" class="error"></div>
    </div>

    <!-- أهم تعديل: name="signin" -->
    <button type="submit" name="signin" class="btn"> تسجيل الدخول</button>
  </form>
  <div class="extra-links">
    <a href="#" onclick="showPage('forgot')">هل نسيت كلمة المرور؟</a> 
    <a href="#" onclick="showPage('signup')">إنشاء حساب</a>
  </div>
</div>
<!-- رسالة الإشعار -->
<div class="welcome-toast".>.  🚀 أهلاً بك! ابدأ رحلتك معنا الآن </div>

<!-- Signup -->
<!-- Signup -->
<div id="signup" class="auth-container hidden">
  <h2>إنشاء حساب</h2>
  <form id="signupForm" method="post" action="register.php">
    <div class="form-group">
      <label>الاسم الكامل</label>
      <input type="text" name="fname" id="name" placeholder="Enter your full name" required>
      <div id="errorName" class="error"></div>
    </div>
    <div class="form-group">
      <label>البريد الإلكتروني</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" required>
      <div id="errorEmail" class="error"></div>
    </div>
    <div class="form-group">
      <label>كلمة المرور</label>
      <input type="password" name="password" id="password" placeholder="Create a password" required>
      <div id="errorPassword" class="error"></div>
    </div>
    <div class="form-group">
      <label>تأكيد كلمة المرور</label>
      <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password" required>
      <div id="errorConfirm" class="error"></div>
    </div>

    <!-- أهم تعديل: name="signup" -->
    <button type="submit" name="signup" class="btn">تسجيل الدخول </button>
  </form>
  <div class="extra-links">
    <a href="#" onclick="showPage('login')">هل لديك حساب بالفعل؟ تسجيل الدخول</a>
  </div>
</div>

<!-- Forgot Password -->
<div id="forgot" class="auth-container hidden">
  <h2>هل نسيت كلمة السر؟</h2>
  <form id="forgotForm" method="post" action="register.php">
    <div class="form-group">
      <label> البريد الإلكتروني</label>
      <input type="email" id="forgotEmail" placeholder="Enter your email to reset password" required>
      <div id="errorForgotEmail" class="error"></div>
    </div>
    <button type="submit" class="btn">إرسال رابط إعادة تعيين كلمة المرور</button>
  </form>
  <div class="extra-links">
    <a href="#" onclick="showPage('login')">العودة إلى تسجيل الدخول</a>
  </div>
</div>
<script>

// دالة للتنقل بين الصفحات الثلاث - تخفي كل الصفحات أولاً، ثم تُظهر الصفحة المطلوبة فقط.
function showPage(page) {
  document.getElementById('login').classList.add('hidden');   // إخفاء صفحة تسجيل الدخول
  document.getElementById('signup').classList.add('hidden');   // إخفاء صفحة التسجيل الجديد
  document.getElementById('forgot').classList.add('hidden');   // إخفاء صفحة نسيان كلمة المرور
  document.getElementById(page).classList.remove('hidden');   // إظهار الصفحة المحددة (إزالة كلاس hidden)
}

// Regex للتحقق
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passwordRegex = /^.{6,}$/;
const nameRegex = /^.{2,}$/;

// ---------- SIGNUP VALIDATION ----------
const signupForm = document.getElementById("signupForm");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const confirmInput = document.getElementById("confirmPassword");
const errorName = document.getElementById("errorName");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword");
const errorConfirm = document.getElementById("errorConfirm");

nameInput.addEventListener("input", () => {
  errorName.textContent = nameRegex.test(nameInput.value) ? "" : "Name must be 2+ letters.";
});
emailInput.addEventListener("input", () => {
  errorEmail.textContent = emailRegex.test(emailInput.value) ? "" : "Invalid email format.";
});
passwordInput.addEventListener("input", () => {
  errorPassword.textContent = passwordRegex.test(passwordInput.value) ? "" : "Password 6+ chars.";
  errorConfirm.textContent = confirmInput.value && passwordInput.value !== confirmInput.value ? "Passwords do not match." : "";
});
confirmInput.addEventListener("input", () => {
  errorConfirm.textContent = passwordInput.value === confirmInput.value ? "" : "Passwords do not match.";
});

// ---------- LOGIN VALIDATION ----------
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
const errorLoginEmail = document.getElementById("errorLoginEmail");
const errorLoginPassword = document.getElementById("errorLoginPassword");

loginEmail.addEventListener("input", () => {
  errorLoginEmail.textContent = emailRegex.test(loginEmail.value) ? "" : "Invalid email format.";
});
loginPassword.addEventListener("input", () => {
  errorLoginPassword.textContent = passwordRegex.test(loginPassword.value) ? "" : "Password 6+ chars.";
});

// ---------- FORGOT PASSWORD VALIDATION ----------
const forgotEmail = document.getElementById("forgotEmail");
const errorForgotEmail = document.getElementById("errorForgotEmail");

forgotEmail.addEventListener("input", () => {
  errorForgotEmail.textContent = emailRegex.test(forgotEmail.value) ? "" : "Invalid email format.";
});
// ---------- رسالة ترحيب ----------
window.addEventListener('load', () => {
  const toast = document.querySelector('.welcome-toast');
  toast.classList.add('show');   // يظهر الإشعار

  // يختفي بعد 4 ثواني
  setTimeout(() => {
    toast.classList.remove('show');
  }, 4000);
});


</script>

</body>
</html>