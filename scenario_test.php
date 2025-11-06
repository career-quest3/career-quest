<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>اختبار السيناريوهات | Career Quest</title>

   <!-- logo font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Pixelify+Sans:wght@400..700&family=Suez+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Pixelify+Sans:wght@400..700&family=Suez+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">

  <!-- مكتبة AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    /* ======= الشريط العلوي المعدل ======= */
   header {
    width: 100%;
    height: 75px;
    padding: 0;
     padding-right: 30px; /* تحرك المحتوى عن اليمين */
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
     margin-top: 0;
}
  :root {
      --primary-color: rgb(67, 67, 155); /*اللون الرئيسي المستخدم في العناوين أو الأزرار.*/
      --background-color: lab(95.84% -3.1 -1.63); /*لون خلفية الصفحة.*/
      --card-color: #ffffff; /*لون خلفية البطاقات.*/
      --text-color: #333; /*لون النص الأساسي.*/
      --muted-text: #666; /*لون النص الثانوي أو الوصف.*/
      --header-height: 75px; /* ارتفاع الهيدر */
    }
    body {
    font-family: Arial, sans-serif; /*تحديد نوع الخط الأساسي*/
      color: var(--text-color); /*تحديد لون النص الأساسي*/
     padding-top: calc(var(--header-height) + 4px); /*  يضيف مسافة من الأعلى تعادل ارتفاع الهيدر لتجنب التداخل. ، إضافة حشوة علوية لمراعاة الهيدر */
  background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('careerFields2.jpg') no-repeat center center fixed;
  background-size: cover;
    }
h2 {
  font-family: "Tajawal", "Cairo", "Segoe UI", Tahoma, sans-serif;
  font-weight: bold;
  font-size: 2rem;
  color: #4B4BE0; /* لون أغمق قليلاً لمزيد من الاحتراف */
  margin: 0 0 20px 0; 
  text-align: center;
  line-height: 1.4;
  letter-spacing: 0.5px;
  text-transform: capitalize; /* أو none لو تكتب بالعربي فقط */
}


     /* ======  خلفية الصفحة عند تفعيل صفحة الاختبار====== */
body.quiz-active {
  margin: 0;
  height: 100vh;
  display: flex; /* استخدام لتوسيط المحتوى */
  justify-content: center; /* محاذاة المحتوى أفقياً */
  align-items: center; /* محاذاة المحتوى عمودياً */
  /* صورة الخلفية */
  background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
  url('careerFields2.jpg') no-repeat center center; 
  background-size: cover; /* تغطية كاملة للخلفية */
  font-family: "Segoe UI", sans-serif; /* خط مريح للقراءة */
}
.icon {
    display: flex;
    align-items: center;  /* يفترض أنه يضبط المحاذاة العمودية */
}


.logo {
    margin-left: 20px; /* مسافة من اليسار */
    font-family: 'Suez One', serif; /* خط مميز للشعار */
    font-size: 35px; /* حجم الخط */
    font-weight: 200; /* وزن الخط */
    line-height: 1; /* ← يساعد بتقليل الارتفاع */
    position: relative;
    top: 8px; /* ← نزّله شوي */
    letter-spacing: 1.5px; /* تباعد بين الحروف */
    cursor: pointer; /* تغيير المؤشر عند المرور */
    white-space: nowrap; /* منع التفاف النص */
    background: linear-gradient(to bottom, rgb(10, 10, 151), rgb(100, 100, 230)); /* تدرج لوني */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
     background-clip: text; 
}

/* القائمة الرئيسية */ 
.menu {
    padding-right: 20px; /* مسافة من اليمين */
}

/* إزالة التنسيق الافتراضي للقائمة */
.menu ul {
    display: flex;  /* عرض العناصر في صف */             
    list-style: none; /* إزالة النقاط من القائمة */
}
  /* عناصر القائمة */ 
.menu ul li{
    margin-left: 25px; /* مسافة بين العناصر */
}
 /* روابط القائمة */
.menu ul li a  {
    text-decoration: none; /* إزالة الخط السفلي */
    color: rgb(0, 0, 0); /* لون النص */
    font-weight: bold; /* جعل النص عريض */
    padding: 4px 8px; /* حشوة داخلية */
    display: block; /* جعل الرابط كتلة */
    border: 2px solid rgba(87, 87, 152, 0.897); /* حدود حول الرابط */
      font-size: 17px;
    border-radius: 10px; /* حواف دائرية */
    transition: transform 0.4s ease-in-out, color 0.3s ease-in-out; /* تأثيرات الانتقال */
}

/* تأثير التمرير على روابط القائمة */
.menu ul li a:hover  {
    color: rgb(10, 10, 151); /* تغيير لون النص عند المرور */
    transform: scale(1.1); /* تكبير الرابط قليلاً عند المرور */
}


    /* ====== باقي الصفحة ====== */
    /* حاوية المحتوى */
    .container {
      max-width: 1200px; /* أقصى عرض للحاوية */
      margin: 40px auto; /* توسيط الحاوية أفقياً */
      padding: 0 20px; /* حشوة داخلية */
    }

/* مقدمة الاختبار */
#intro {
  text-align: center; 
  margin: 100px auto; 
  margin-bottom: 0;
  /* لو حابب تركز الزر بالصفحة */
}

/* فقرة المقدمة */
    #intro p {
  font-size: 20px;/* حجم الخط */
  color: #333;/* لون النص */
  margin-bottom: 0;/* مسافة تحت الفقرة */
} 
.info-box {
  font-size: 18px;
  text-align: right;
  background-color: var(--card-color);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);/* ظل خفيف */
  border: 2px solid rgb(100, 100, 230); 
  padding: 8px 12px; 
  border-radius: 12px; 
  margin: 10px 0 10px auto; /* ال margin-left = auto يخلي العنصر يلتصق باليمين */
   background-color: var(--card-color); /* لون الخلفية من المتغير */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06); /* ظل خفيف */
}

/* زر بدء الاختبار */
    .grid {
      display: grid; /* استخدام نظام الشبكة */
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* أعمدة مرنة */
      gap: 12px; /* مسافة بين العناصر */
    }
/* بطاقات المجالات المهنية */
    .card {
      background-color: var(--card-color);/* لون خلفية البطاقة */
      border-radius: 12px; /* حواف دائرية */
      overflow: hidden;/* إخفاء المحتوى الزائد */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);/* ظل خفيف */
      border: 2px solid rgb(100, 100, 230); 
      cursor: pointer; /* لازم يكون موجود */
  transition: transform 0.2s;
}
.card:hover { transform: scale(1.05); }


/* صورة البطاقة */
    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover; 
    }
/* محتوى البطاقة */
    .card-content {
      padding: 10px; 
       border: 1px solid rgb(100, 100, 230); 
    }
/* عنوان البطاقة */
    .card-content h3 {
      font-size: 1.25rem;
      margin-bottom: 8px;
      color: var(--primary-color);
    }
/* وصف البطاقة */
    .card-content p {
      color: black; 
      font-size: 1.1rem;
      line-height: 1.5; 
    }
/* قسم بدء الاختبار */
/* ===== قسم العنوان الاحترافي ===== */
.start-section p {
  font-size: 1.25rem;
  color: var(--text-color, #333);
  margin-bottom: 24px;
  font-weight: 600;
  font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;
  line-height: 1.7;
  text-align: center;
}


/* ===== زر بدء احترافي (مودرن) ===== */
#startBtn {
  display: inline-flex;
  align-items: center;
  gap: 10px;

  padding: 15px 40px;
  background: rgb(100, 100, 230); 
  color: white;

  font-size: 18px;
  font-weight: 600;
  font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;

  border: none;
  border-radius: 12px;
  cursor: pointer;

  box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
  transition:  background-color 0.3s ease, transform 0.2s ease;
}

#startBtn:hover {
  background: linear-gradient(135deg, #745959, #6464E6);
  transform: translateY(-2px);
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
}

#startBtn:active {
  transform: scale(0.97);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}


/* الفوتر */
.footer {
  text-align: center;
  padding: 20px;
  font-size: 1rem;
  color: #666; /* لون رمادي هادئ */
  background-color: transparent; /* لا يوجد شريط */
  border: none;
}


    /* ميديا */
    @media (max-width: 768px) {
      .menu ul { /* جعل القائمة عمودية على الشاشات الصغيرة */
        gap: 10px;
        flex-wrap: wrap; /* السماح بالالتفاف */
      }

      .card img { /* تقليل ارتفاع الصور على الشاشات الصغيرة */
        height: 160px;
      }

      .start-btn { /* تقليل حجم زر بدء الاختبار */
        width: 90%;
      }

      .logo { /* تقليل حجم الشعار */
        font-size: 20px;
      }
    }

  /* ================== منطقة الاختبار ================== */

/* ====== الحاوية الرئيسية للاختبار والنتيجة ====== */
.quiz-container {
  width: 1000px;             /* حجم عرض ثابت وكبير */
  height: 500px;             /* ارتفاع ثابت أقل من العرض */
  padding: 40px 60px;
  margin: auto;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* لتوسيط المربع بالكامل */

  background: white;
  border: 3px solid #4b3e8a;
  border-radius: 20px;
   box-shadow: 0 10px 25px rgba(75, 62, 138, 0.5); /* ظل بنفسجي شفاف */

  overflow-y: auto;
  box-sizing: border-box;

  direction: rtl;
  text-align: right;
  font-family: "Tajawal", system-ui, sans-serif;
  color: #0f172a;

  transition: all 0.3s ease;
}




/* ====== عداد التقدم ====== */
.progress {
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--primary-color);
  margin-bottom: 25px;
  text-align: center;
  letter-spacing: 0.05em;
}

/* ====== قسم السؤال ====== */
.question-section {
  display: flex;
  flex-direction: column;
  gap: 24px;
  height: 300px;
  justify-content: flex-start;
  padding: 0 16px;
}


/* ====== نص السؤال ====== */
.question {
  font-size: 1.4rem;
  font-weight: 700;
  text-align: right;
  min-height: 100px;
  display: flex;
  align-items: center;
  padding-right: 12px;
  font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;
  color: #2C3E50;
}


/* ====== خيارات الإجابة ====== */
.choices {
  display: flex;
  flex-direction: column;
  gap: 16px;
  width: 100%;
  align-items: center;
}

.choices button {
  width: 100%;
  max-width: 100%;
  padding: 16px 20px;

  font-size: 1.1rem;
  font-weight: 500;
  text-align: right;
  border-radius: 12px;
  border: 2px solid transparent;
  background: #f8fafc;
  color: #333;
  cursor: pointer;

  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
}

.choices button:hover {
  background: #e0f2f1;
  border-color:  #46387a;;
}


/* ====== عند اختيار الإجابة ====== */
.choices button.selected {
  background: var(--primary-color, #46387a);
  color: #fff;
  border-color: var(--primary-color, #46387a);
  transform: scale(1.03);
  box-shadow: 0 4px 12px rgba(38, 166, 154, 0.4);
}


/* ====== أزرار التنقل (التالي / السابق مثلاً) ====== */
.controls {
  display: flex;
  justify-content: center;
  gap: 16px;
  margin-top: 20px;
}

.controls button {
  padding: 14px 28px;
  font-size: 1.1rem;
  font-weight: 600;
  border: none;
  border-radius: 10px;
  cursor: pointer;

 background-color: #8a79d8;
  color: #fff;
  box-shadow: 0 4px 12px rgba(138, 121, 216, 0.5);
 transition: background-color 0.3s ease, transform 0.2s ease;
}

.controls button:hover {
  background-color: #46387a;
  transform: translateY(-2px);
}

.controls button:active {
  transform: scale(0.97);
}



/* ====== شاشة النتيجة ====== */
#result h2 {
  color: var(--primary-color); 
  margin-bottom: 20px;
  font-size: 32px;
  font-weight: 900;
  text-align: center;
}

.result-list {
  list-style: none;
  padding: 0;
  margin: 20px 0 30px;
}

.result-list li {
  background: #f1f5f9;
  margin: 12px 0;
  padding: 20px 25px;
  border-radius: 12px;
  font-weight: 700;
  font-size: 20px;
  color: #0f172a;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}

#explain {
  font-size: 18px;
  color: var(--muted-text);
  margin-bottom: 30px;
  text-align: center;
  padding: 0 15px;
}
/* زر إعادة الاختبار */
#retryBtn {
  display: block;
  margin: auto;
  background: var(--primary-color);
  color: #fff;
  border: none;
  padding: 18px 42px;
  border-radius: 12px;
  cursor: pointer;
  font-size: 20px;
  font-weight: 700;
  transition: background-color 0.3s ease;
  box-shadow: 0 6px 12px rgba(67, 67, 155, 0.6);
}

#retryBtn:hover {
  background: #2c2c8a;
}
/* زر الانتقال  لصفحه التقرير */
#report-btn {
   display: block;
   margin: 0 auto 5px;
  background: var(--primary-color);
  color: #fff;
  border: none;
  padding: 18px 42px;
  border-radius: 12px;
  cursor: pointer;
  font-size: 20px;
  font-weight: 700;
  transition: background-color 0.3s ease;
  box-shadow: 0 6px 12px rgba(67, 67, 155, 0.6);
}

#report-btn:hover {
  background: #2c2c8a;
}
/* ====== استجابة الشاشات الصغيرة ====== */
@media (max-width: 768px) {
  .quiz-container {
    padding: 30px 20px;
    min-height: auto;
  }

  .question {
    font-size: 22px;
    min-height: auto;
  }

  .choices button {
    font-size: 18px;
    padding: 16px;
  }

  .controls button {
    font-size: 18px;
    padding: 14px 28px;
  }
}



/* ================== إخفاء ================== */
.hidden {
  display: none;
}

  </style>
</head>

<body>
  <!-- الهيدر -->
<header>
  <h2 class="logo">Career Quest</h2>
  <nav class="menu">
     <ul>
      <li><a href="scenario_test.php">اختبار السيناريوهات المهني</a></li>
      <li><a href="career_test.php">الاختبار المهني </a></li>
      <li><a href="register-page.php"> إنشاء حساب </a></li>
      <li><a href="index.html">الصفحة الرئيسية</a></li>
      </ul>
  </nav>
</header>
  <!-- شاشة البداية -->
<div id="intro"> 
  <h2>  !ابدأ الاختبار لاكتشاف مسارك المهني </h2>
  <button id="startBtn">ابدأ الاختبار</button>
</div>

  <!-- المحتوى -->
<div class="container" id="main-content" >
  <div id="testPage">
  <h3 class="info-box">
    📚 اكتشف المزيد عن مهنتك! اضغط على المجال لتتعرف أكثر على المهنة من خلال كورسات وفيديوهات مخصصة
  </h3>
  <!-- ممكن تضيف هنا باقي محتوى الاختبار -->
</div>
  <!-- الكروت -->
  <section class="grid" id="cards-section">
    <div class="card"onclick="location.href='careers.html'">
      <img src="health-field.jpg" alt="الصحة" />
      <div class="card-content">
        <h3>Health – الصحة</h3>
        <p>رعاية صحة الناس وتحسين جودة حياتهم.</p>
      </div>
    </div>

    <div class="card">
      <img src="Education-field.jpg" alt="التعليم" />
      <div class="card-content" onclick="location.href='careers.html'">
        <h3>Education – التعليم</h3>
        <p>توجيه الطلاب وتطوير مهاراتهم التعليمية.</p>
      </div>
    </div>

    <div class="card">
      <img src="Engineering-field.jpg" alt="الهندسة" />
      <div class="card-content" onclick="location.href='careers.html'">
        <h3>Engineering – الهندسة</h3>
        <p>ابتكار وتصميم حلول تقنية وهندسية فعّالة.</p>
      </div>
    </div>

    <div class="card">
      <img src="art-field.jpg" alt="الفنون" />
      <div class="card-content" onclick="location.href='careers.html'">
        <h3>Arts – الفن</h3>
        <p>التعبير الإبداعي عبر الفن والتصميم البصري.</p>
      </div>
    </div>

    <div class="card">
      <img src="thecnology-field.jpg" alt="التقنية" />
      <div class="card-content" onclick="location.href='careers.html'">
        <h3>Technology – التقنية</h3>
        <p>تطوير وحماية الأنظمة والبرمجيات الرقمية.</p>
      </div>
    </div>

    <div class="card">
      <img src="Management-field.jpeg" alt="إدارة الأعمال" />
      <div class="card-content" onclick="location.href='careers.html'">
        <h3>Business & Management – الأعمال والإدارة</h3>
        <p>تنظيم الموارد وتحقيق أهداف المؤسسات بذكاء.</p>
      </div>
    </div>
  </section>

<!-- شاشة الاختبار -->
<div id="quiz" class="hidden quiz-container">
  <!-- عداد التقدم -->
  <div class="progress" id="progressText"></div>

  <!-- قسم السؤال والاختيارات -->
  <div class="question-section">
    <div class="question" id="questionText"></div>
    <div class="choices" id="choices"></div>
  </div>

  <!-- أزرار التنقل -->
  <div class="controls">
    <button id="prevBtn">السابق</button>
    <button id="nextBtn">التالي</button>
    <button id="finishBtn" class="hidden">انتهي</button>
  </div>
</div>

<!-- شاشة النتيجة -->
<div id="result" class="hidden quiz-container">
  <h2>النتيجة</h2>
  <p class="small">أعلى المجالات المناسبة لك:</p>
  <ul id="resultList" class="result-list"></ul>
  <p id="explain" class="small"></p>
  <button onclick="window.location.href='report.html'" id="report-btn">عرض التقرير</button>
  <button id="retryBtn">أعد الاختبار</button>
</div>


<footer class="footer">
  <p>© 2026 Career Quest. جميع الحقوق محفوظة.</p>
</footer>


  <script>

  let scores = {
  teacher: 0,
  student_counselor: 0,
  doctor: 0,
  nurse: 0,
  surgeon: 0,
  software_engineer: 0,
  architect: 0,
  mechanical_engineer: 0,
  visual_artist: 0,
  graphic_designer: 0,
  programmer: 0,
  cybersecurity: 0,
  accountant: 0,
  marketer: 0,
  hr: 0
};


let questions = []; // سيتم تخزينها هنا

fetch('questions.json')  // ضع اسم ملف JSON الصحيح
  .then(response => response.json())
  .then(data => {
    questions = data;
    console.log("تم تحميل الأسئلة بنجاح!");
  })
  .catch(error => console.error("خطأ في تحميل JSON:", error));

// 3️⃣ دالة اختيار الإجابة لأي سؤال
function selectAnswer(questionId, choiceIndex) {
  const question = questions.find(q => q.id === questionId);
  if (!question) {
    console.warn("السؤال غير موجود في JSON:", questionId);
    return;
  }
  const choice = question.choices[choiceIndex];
  for (let profession in choice.scores) {
    scores[profession] += choice.scores[profession];
  }
}

// 4️⃣ دالة الحصول على المهنة الأعلى نقاط
function getTopProfession() {
  let topScore = 0;
  let topProfession = '';
  for (let prof in scores) {
    if (scores[prof] > topScore) {
      topScore = scores[prof];
      topProfession = prof;
    }
  }
  return topProfession;
}

// 5️⃣ مثال لاستخدام الدوال:
// selectAnswer(66, 0); // إضافة نقاط الخيار الأول للسؤال 66
// selectAnswer(67, 1); // إضافة نقاط الخيار الثاني للسؤال 67
// بعد الإجابة على كل الأسئلة
// const result = getTopProfession();
// console.log("الميول الأساسية للطالب:", result);

// 6️⃣ يمكن ربطها مع واجهة المستخدم بسهولة:
// لكل زر اختيار:
// button.onclick = () => selectAnswer(questionId, choiceIndex);
// بعد آخر سؤال:
// const result = getTopProfession();
// alert("الميول الأساسية للطالب: " + result);
  /************************************************************************
   * 1) تعريف المهن: مفاتيح ثابتة (id) + اسم للعرض
   ************************************************************************/
  const careers = [
    { id: 'doctor', name: 'Doctor (طبيب)' },
    { id: 'nurse', name: 'Nurse (ممرض)' },
    { id: 'surgeon', name: 'Surgeon (جراح)' },
    { id: 'teacher', name: 'Teacher (معلم)' },
    { id: 'counselor', name: 'Student Counselor (مرشد طلابي)' },
    { id: 'software', name: 'Software Engineer (مهندس برمجيات)' },
    { id: 'architect', name: 'Architect (مهندس معماري)' },
    { id: 'mechanical', name: 'Mechanical Engineer (مهندس ميكانيكا)' },
    { id: 'painter', name: 'Visual Artist (فنان تشكيلي)' },
    { id: 'graphic', name: 'Graphic Designer (مصمم جرافيك)' },
    { id: 'programmer', name: 'Programmer (مبرمج)' },
    { id: 'cyber', name: 'Cybersecurity (أمن سيبراني)' },
    { id: 'accountant', name: 'Accountant (محاسب)' },
    { id: 'marketer', name: 'Marketer (مسوّق)' },
    { id: 'hr', name: 'HR Officer (موظف موارد بشرية)' }
  ];
  
  const scenarios =  [
  /* ================== Health – الصحة ================== */

  /* Doctor – طبيب */
  { "id":"doctor-1","text":"مريض يعاني من أعراض غير واضحة. ماذا تفعل؟","choices":[{"text":"أجري فحوصات دقيقة لتحديد السبب","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أعطي علاج مبدئي وأراقب الحالة","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-2","text":"مريض يحتاج لتشخيص عاجل. كيف تتصرف؟","choices":[{"text":"أجري التشخيص بسرعة مع دقة عالية","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أطلب مساعدة أخرى لتسريع العملية","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-3","text":"تحتاج لشرح خطة علاج للمريض. ماذا تفعل؟","choices":[{"text":"أشرح بالتفصيل وأجيب على كل أسئلة المريض","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أعطي معلومات أساسية فقط لتوفير الوقت","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-4","text":"مريض يعاني من حالة طارئة. كيف تتصرف؟","choices":[{"text":"أتعامل مع الحالة فورًا بكل دقة وإحتراف","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أستدعي زملاء لمساعدتي في التعامل بسرعة","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-5","text":"تحتاج لتقييم فعالية علاج معين. ماذا تفعل؟","choices":[{"text":"أحلل النتائج بدقة وأعدل الخطة إذا لزم","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أتابع الحالة بشكل أساسي وأعدل عند الحاجة","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-6","text":"مريض يرفض إجراء فحوصات ضرورية. كيف تتصرف؟","choices":[{"text":"أشرح للمريض أهمية الفحوصات وأقنعه","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أحترم قراره وأتابع الأعراض فقط","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-7","text":"تواجه حالة نادرة ومعقدة. ماذا تفعل؟","choices":[{"text":"أبحث وأراجع الدراسات الطبية بعناية","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أعالج الحالة باستخدام الطرق المعتادة فقط","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-8","text":"تحتاج لتوثيق كل ملاحظات المريض. كيف تتصرف؟","choices":[{"text":"أوثق كل التفاصيل بدقة","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أكتب ملاحظات أساسية فقط لتوفير الوقت","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-9","text":"مريض يحتاج لتفسير نتائج معقدة. ماذا تفعل؟","choices":[{"text":"أشرح النتائج بوضوح وبساطة وأجيب على أسئلة المريض","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أعطي ملخص مختصر للنتائج","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},
  { "id":"doctor-10","text":"تحتاج لمتابعة حالة مرضى متعددة في نفس الوقت. كيف تتصرف؟","choices":[{"text":"أوزع الوقت بدقة لكل مريض مع الحفاظ على الجودة","scores":{"doctor":3,"nurse":1,"surgeon":1}},{"text":"أركز على الحالات الأكثر خطورة أولًا","scores":{"doctor":2,"nurse":1,"surgeon":1}}]},

  /* Nurse – ممرض */
  { "id":"nurse-1","text":"مريض يحتاج إعطاء دواء عاجل. ماذا تفعل؟","choices":[{"text":"أعطي الدواء بدقة في الوقت المحدد","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أستشير الطبيب قبل الإعطاء لتجنب الخطأ","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-2","text":"تواجه ضغط عمل كبير في القسم. كيف تتصرف؟","choices":[{"text":"أرتب الأولويات وأنفذ كل مهمة بدقة","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أركز على المهام الأساسية فقط لتخفيف الضغط","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-3","text":"مريض يعاني من ألم شديد. ماذا تفعل؟","choices":[{"text":"أعطي الرعاية الفورية وأطمئن المريض","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أطلب المساعدة من زميل لتقديم الرعاية بسرعة","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-4","text":"تحتاج لمتابعة عدة مرضى في نفس الوقت. كيف تتصرف؟","choices":[{"text":"أوزع الوقت والاهتمام بشكل دقيق لكل مريض","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أركز على الحالات الأكثر حرجة أولًا","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-5","text":"مريض يحتاج لمراقبة مستمرة. ماذا تفعل؟","choices":[{"text":"أتابع الحالة باستمرار وأسجل كل ملاحظة","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أراقب المريض بشكل أساسي وأبلغ الطبيب عند الحاجة","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-6","text":"مريض يرفض بعض الإجراءات. كيف تتصرف؟","choices":[{"text":"أشرح للمريض الأهمية وأقنعه بلطف","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أحترم قراره وأتابع الأمور الأساسية فقط","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-7","text":"تواجه حالة طارئة أثناء العمل. ماذا تفعل؟","choices":[{"text":"أتصرف بسرعة مع الالتزام بالإجراءات الصحيحة","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أستدعي زملاء للمساعدة الفورية","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-8","text":"تحتاج لتعليم مريض استخدام جهاز طبي. كيف تتصرف؟","choices":[{"text":"أشرح بدقة وأتابع التطبيق خطوة بخطوة","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أعطي تعليمات مختصرة لتسهيل الأمر","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-9","text":"مطلوب تجهيز غرفة المريض للزيارة. ماذا تفعل؟","choices":[{"text":"أجهز كل شيء بدقة لضمان راحة المريض","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أجهز الأساسيات فقط لتوفير الوقت","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},
  { "id":"nurse-10","text":"تواجه ضغطًا من عدة مهام في نفس الوقت. كيف تتصرف؟","choices":[{"text":"أرتب الأولويات وأنجز كل مهمة بعناية","scores":{"doctor":1,"nurse":3,"surgeon":1}},{"text":"أركز على أهم المهام أولًا وأكمل الباقي لاحقًا","scores":{"doctor":1,"nurse":2,"surgeon":1}}]},

  /* Surgeon – جراح */
  { "id":"surgeon-1","text":"مريض يحتاج لعملية عاجلة. ماذا تفعل؟","choices":[{"text":"أقوم بالعملية بدقة وأتأكد من كل خطوة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أطلب مساعدة فورية من الفريق لتسريع العملية","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-2","text":"تواجه حالة معقدة أثناء الجراحة. كيف تتصرف؟","choices":[{"text":"أركز وأحل المشكلة بحذر واحترافية","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أستعين بزملاء لمشاركة اتخاذ القرار سريعًا","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-3","text":"تحتاج لتقييم حالة المريض قبل الجراحة. ماذا تفعل؟","choices":[{"text":"أجري تقييم شامل وأخطط لكل مرحلة بدقة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أجري تقييم أساسي وأبدأ الجراحة بسرعة","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-4","text":"مريض يحتاج لإجراء طارئ أثناء الجراحة. كيف تتصرف؟","choices":[{"text":"أتخذ القرار الأنسب فورًا وأطبق الخطوات بدقة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أستشير الفريق سريعًا لاتخاذ القرار","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-5","text":"تواجه مشاكل في المعدات الجراحية. ماذا تفعل؟","choices":[{"text":"أحل المشكلة بحذر وأكمل الجراحة بأمان","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أوقف الجراحة مؤقتًا وأطلب المعدات البديلة","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-6","text":"تحتاج لتنسيق الفريق أثناء عملية معقدة. كيف تتصرف؟","choices":[{"text":"أعطي تعليمات واضحة وأتابع تنفيذها بدقة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أترك الفريق يتصرف ويكون جاهزًا للتدخل عند الحاجة","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-7","text":"مريض بحاجة لتخدير خاص. ماذا تفعل؟","choices":[{"text":"أخطط التخدير بدقة بالتعاون مع الفريق الطبي","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أستخدم طريقة تخدير معتادة لتسريع العملية","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-8","text":"تواجه مضاعفات غير متوقعة أثناء الجراحة. كيف تتصرف؟","choices":[{"text":"أحل المشكلة فورًا وأتخذ كل الاحتياطات اللازمة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أستدعي زملاء لمساعدتي في التعامل بسرعة","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-9","text":"مطلوب متابعة المريض بعد العملية. ماذا تفعل؟","choices":[{"text":"أتابع كل التفاصيل وأتأكد من التعافي السليم","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أتابع النقاط الأساسية فقط للتأكد من الاستقرار","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  { "id":"surgeon-10","text":"تحتاج لإعداد خطة جراحية لمريض معقد. كيف تتصرف؟","choices":[{"text":"أخطط كل خطوة بدقة وأضع احتياطات متعددة","scores":{"doctor":1,"nurse":1,"surgeon":3}},{"text":"أضع خطة أساسية مع تعديلات لاحقة حسب الحاجة","scores":{"doctor":1,"nurse":1,"surgeon":2}}]},
  /* Visual Artist / Painter – فنان تشكيلي */
  { "id":"artist-1","text":"تحتاج لرسم لوحة جديدة. ماذا تفعل؟","choices":[{"text":"أبدع في اختيار الألوان والتفاصيل بعناية","scores":{"artist":3,"graphic":1}},{"text":"أستخدم فكرة سريعة لإنهاء اللوحة بسرعة","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-2","text":"عميل يريد تعديل على عملك الفني. كيف تتصرف؟","choices":[{"text":"أعدل مع الحفاظ على جودة وأسلوب اللوحة","scores":{"artist":3,"graphic":1}},{"text":"أجري تعديل سريع لتسليم العمل فقط","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-3","text":"تحتاج لتجربة أسلوب جديد في الرسم. ماذا تفعل؟","choices":[{"text":"أجرب الأسلوب الجديد بحذر وألاحظ النتائج","scores":{"artist":3,"graphic":1}},{"text":"أستمر بالأسلوب التقليدي لتجنب المخاطر","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-4","text":"تواجه صعوبة في التعبير عن فكرة. كيف تتصرف؟","choices":[{"text":"أبحث عن إلهام وأجرب تقنيات مختلفة","scores":{"artist":3,"graphic":1}},{"text":"أختصر التفاصيل وأركز على الفكرة الرئيسية","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-5","text":"تحتاج لإنهاء عمل فني خلال وقت محدود. ماذا تفعل؟","choices":[{"text":"أعمل بشكل مكثف مع الحفاظ على الجودة","scores":{"artist":3,"graphic":1}},{"text":"أختصر التفاصيل لإنهاء العمل بسرعة","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-6","text":"عميل يطلب لوحة بأسلوب محدد. كيف تتصرف؟","choices":[{"text":"أطبق الأسلوب بدقة مع لمستي الشخصية","scores":{"artist":3,"graphic":1}},{"text":"أطبق الأسلوب بشكل تقريبي لتوفير الوقت","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-7","text":"تحتاج لتقييم عمل فني قبل عرضه. ماذا تفعل؟","choices":[{"text":"أراجع كل التفاصيل وأعدل الأخطاء الدقيقة","scores":{"artist":3,"graphic":1}},{"text":"أراجع بشكل سريع وأعد العرض للعميل","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-8","text":"تواجه فقدان الإلهام فجأة. كيف تتصرف؟","choices":[{"text":"أبحث عن مصادر إلهام جديدة وأستمر بالرسم","scores":{"artist":3,"graphic":1}},{"text":"أؤجل العمل حتى يعود الإلهام","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-9","text":"تحتاج لتقديم مجموعة أعمال لمعرض. ماذا تفعل؟","choices":[{"text":"أجهز الأعمال بعناية وأراعي التنوع والجودة","scores":{"artist":3,"graphic":1}},{"text":"أركز على الأعمال الأكثر جاهزية للعرض فقط","scores":{"artist":2,"graphic":1}}]},
  { "id":"artist-10","text":"عميل يطلب لوحة مبتكرة للغاية. كيف تتصرف؟","choices":[{"text":"أبدع وأقدم لوحة مبتكرة تتوافق مع الطلب","scores":{"artist":3,"graphic":1}},{"text":"أقدم لوحة تقليدية مع لمسات بسيطة مبتكرة","scores":{"artist":2,"graphic":1}}]},

  /* Graphic Designer – مصمم جرافيك */
  { "id":"graphic-1","text":"تحتاج لتصميم شعار جديد. ماذا تفعل؟","choices":[{"text":"أبتكر شعار جذاب وفريد بعناية","scores":{"artist":1,"graphic":3}},{"text":"أعدل شعار موجود قليلاً لتسريع العمل","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-2","text":"عميل يريد تعديل على التصميم بسرعة. كيف تتصرف؟","choices":[{"text":"أعدل بدقة مع الحفاظ على جودة التصميم","scores":{"artist":1,"graphic":3}},{"text":"أجري تعديل سريع لتسليم التصميم فقط","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-3","text":"تحتاج لتصميم بوستر لحملة إعلانية. ماذا تفعل؟","choices":[{"text":"أبتكر تصميم جذاب يلفت الانتباه","scores":{"artist":1,"graphic":3}},{"text":"أستخدم قالب جاهز مع تعديلات بسيطة","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-4","text":"تواجه صعوبة في اختيار ألوان التصميم. كيف تتصرف؟","choices":[{"text":"أجرب تنسيقات ألوان مختلفة وأختار الأفضل","scores":{"artist":1,"graphic":3}},{"text":"أختار ألوان تقليدية لتسريع العمل","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-5","text":"تحتاج لإنهاء مشروع تصميم سريع. ماذا تفعل؟","choices":[{"text":"أركز وأكمل التصميم بدقة حتى وإن كان الوقت قصير","scores":{"artist":1,"graphic":3}},{"text":"أختصر التفاصيل لإنهاء المشروع بسرعة","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-6","text":"عميل يريد تصميم مبتكر. كيف تتصرف؟","choices":[{"text":"أبدع في التصميم وأضيف أفكار مبتكرة","scores":{"artist":1,"graphic":3}},{"text":"أقدم تصميم تقليدي مع لمسات مبتكرة بسيطة","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-7","text":"تحتاج لتقديم تصميم عرض تقديمي جذاب. ماذا تفعل؟","choices":[{"text":"أجهز تصميم شامل وجذاب مع كل التفاصيل","scores":{"artist":1,"graphic":3}},{"text":"أركز على النقاط الرئيسية فقط لتسهيل العرض","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-8","text":"تواجه تحدي في تصميم واجهة تطبيق. كيف تتصرف؟","choices":[{"text":"أبتكر واجهة سهلة الاستخدام وجذابة","scores":{"artist":1,"graphic":3}},{"text":"أستخدم واجهة جاهزة مع تعديلات بسيطة","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-9","text":"مطلوب تصميم حملة تسويقية رقمية. ماذا تفعل؟","choices":[{"text":"أبتكر تصميمات جذابة ومتناسقة مع الحملة","scores":{"artist":1,"graphic":3}},{"text":"أستخدم تصميمات جاهزة وأعدل عليها قليلاً","scores":{"artist":1,"graphic":2}}]},
  { "id":"graphic-10","text":"تحتاج لتقييم عملك قبل تسليمه للعميل. كيف تتصرف؟","choices":[{"text":"أراجع كل التفاصيل وأعدل الأخطاء بدقة","scores":{"artist":1,"graphic":3}},{"text":"أراجع بشكل سريع وأجهز للتسليم","scores":{"artist":1,"graphic":2}}]},

  /* Programmer / Coder – مبرمج */
  { "id":"programmer-1","text":"تواجه خطأ في الكود أثناء التطوير. ماذا تفعل؟","choices":[{"text":"أحلل الخطأ وأصححه بدقة","scores":{"programmer":3,"cybersecurity":1}},{"text":"أستخدم حل سريع لتجاوز المشكلة مؤقتًا","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-2","text":"مطلوب إضافة ميزة جديدة بسرعة. كيف تتصرف؟","choices":[{"text":"أخطط الميزة بعناية وأكتب الكود بشكل صحيح","scores":{"programmer":3,"cybersecurity":1}},{"text":"أكتب الكود بسرعة لتسليم الميزة سريعًا","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-3","text":"تحتاج لمراجعة كود الفريق. ماذا تفعل؟","choices":[{"text":"أراجع الكود بدقة وأعطي ملاحظات مفصلة","scores":{"programmer":3,"cybersecurity":1}},{"text":"أوافق بسرعة لتسريع العمل","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-4","text":"برنامجك يحتاج لتحسين الأداء. ماذا تفعل؟","choices":[{"text":"أعيد كتابة الأجزاء البطئية وأحسن الكود","scores":{"programmer":3,"cybersecurity":1}},{"text":"أضيف موارد لتسريع التنفيذ مؤقتًا","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-5","text":"تحتاج لتوثيق كود المشروع. كيف تتصرف؟","choices":[{"text":"أكتب توثيق مفصل لكل جزء من الكود","scores":{"programmer":3,"cybersecurity":1}},{"text":"أكتب ملخص سريع لتوفير الوقت","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-6","text":"تواجه تعارض بين مكتبات برمجية. ماذا تفعل؟","choices":[{"text":"أحل المشكلة بتحليل dependencies بدقة","scores":{"programmer":3,"cybersecurity":1}},{"text":"أستبدل المكتبات لتجاوز المشكلة بسرعة","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-7","text":"مطلوب تصميم واجهة مستخدم جديدة. كيف تتصرف؟","choices":[{"text":"أصمم واجهة متوافقة وجذابة","scores":{"programmer":3,"cybersecurity":1}},{"text":"أستخدم واجهة جاهزة لتسريع العمل","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-8","text":"برنامجك يحتاج لاختبارات أمان قبل الإطلاق. ماذا تفعل؟","choices":[{"text":"أجري اختبارات شاملة وأصلح الثغرات","scores":{"programmer":3,"cybersecurity":1}},{"text":"أختبر بشكل أساسي وأعدل عند الحاجة","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-9","text":"مطلوب تطوير تطبيق جديد مع واجهة معقدة. ماذا تفعل؟","choices":[{"text":"أخطط التطبيق بدقة وأبدأ التنفيذ","scores":{"programmer":3,"cybersecurity":1}},{"text":"أبدأ التنفيذ مباشرة لتوفير الوقت","scores":{"programmer":2,"cybersecurity":1}}]},
  { "id":"programmer-10","text":"تحتاج لتقييم أداء البرنامج بعد الإطلاق. كيف تتصرف؟","choices":[{"text":"أحلل الأداء بدقة وأضع تحسينات واضحة","scores":{"programmer":3,"cybersecurity":1}},{"text":"أراقب الأداء بشكل أساسي وأعدل عند الحاجة","scores":{"programmer":2,"cybersecurity":1}}]},

  /* Cybersecurity Specialist – مختص أمن سيبراني */
  { "id":"cyber-1","text":"تواجه محاولة اختراق على النظام. ماذا تفعل؟","choices":[{"text":"أحلل الهجوم وأمنع أي ثغرة ممكنة","scores":{"programmer":1,"cybersecurity":3}},{"text":"أوقف النظام مؤقتًا لتجنب الضرر فقط","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-2","text":"تحتاج لتأمين بيانات العملاء. كيف تتصرف؟","choices":[{"text":"أطبق كل بروتوكولات الأمان بدقة","scores":{"programmer":1,"cybersecurity":3}},{"text":"أركز على البيانات الأساسية فقط لتسريع العملية","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-3","text":"تم اكتشاف ثغرة في النظام. ماذا تفعل؟","choices":[{"text":"أصلح الثغرة فورًا وأراجع الأنظمة الأخرى","scores":{"programmer":1,"cybersecurity":3}},{"text":"أعالج الثغرة الأساسية فقط لتسريع العمل","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-4","text":"مطلوب تقييم أمان الشبكة. كيف تتصرف؟","choices":[{"text":"أجري تقييم شامل لكل المكونات والأنظمة","scores":{"programmer":1,"cybersecurity":3}},{"text":"أقيم الشبكة بشكل أساسي وأركز على النقاط الحرجة","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-5","text":"تواجه هجوم DDoS. ماذا تفعل؟","choices":[{"text":"أطبق حلول حماية متقدمة وأراقب الهجوم","scores":{"programmer":1,"cybersecurity":3}},{"text":"أوقف السيرفر مؤقتًا لتخفيف الضغط فقط","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-6","text":"تحتاج لتعليم الفريق إجراءات أمان جديدة. كيف تتصرف؟","choices":[{"text":"أقدم تدريب شامل وتوجيه مفصل","scores":{"programmer":1,"cybersecurity":3}},{"text":"أقدم ملخص سريع لتسهيل التطبيق","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-7","text":"مطلوب إنشاء نظام حماية جديد. ماذا تفعل؟","choices":[{"text":"أخطط النظام بدقة وأختبر كل المراحل","scores":{"programmer":1,"cybersecurity":3}},{"text":"أطبق النظام بشكل سريع مع تعديلات لاحقة","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-8","text":"تحتاج لمراجعة سجلات الدخول المشبوهة. كيف تتصرف؟","choices":[{"text":"أحلل كل السجلات وأكتشف أي نشاط مشبوه","scores":{"programmer":1,"cybersecurity":3}},{"text":"أركز على الأنشطة الأكثر خطورة فقط","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-9","text":"تم طلب تقرير أمني شامل للنظام. ماذا تفعل؟","choices":[{"text":"أجهز تقرير مفصل مع كل البيانات المهمة","scores":{"programmer":1,"cybersecurity":3}},{"text":"أقدم تقرير مختصر يغطي النقاط الأساسية فقط","scores":{"programmer":1,"cybersecurity":2}}]},
  { "id":"cyber-10","text":"تواجه تسريب بيانات محتمل. كيف تتصرف؟","choices":[{"text":"أحقق بسرعة وأتخذ إجراءات حماية دقيقة","scores":{"programmer":1,"cybersecurity":3}},{"text":"أعالج الحالة بشكل مؤقت وأتابع التحقيق لاحقًا","scores":{"programmer":1,"cybersecurity":2}}]},

  /* Accountant – محاسب */
  { "id":"accountant-1","text":"تحتاج لمراجعة دفاتر الحسابات قبل نهاية الشهر. ماذا تفعل؟","choices":[{"text":"أراجع كل البيانات بدقة وأصحح الأخطاء","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أركز على الحسابات الأساسية وأترك الباقي لاحقًا","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-2","text":"تواجه تناقض في التقارير المالية. كيف تتصرف؟","choices":[{"text":"أحقق في التفاصيل وأصلح الأخطاء بدقة","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أصلح بسرعة لتجنب التأخير فقط","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-3","text":"مطلوب إعداد ميزانية جديدة للشركة. ماذا تفعل؟","choices":[{"text":"أخطط الميزانية بعناية وأتأكد من كل الأرقام","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أعد ميزانية تقريبية لتوفير الوقت","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-4","text":"تحتاج لمراجعة كشوف رواتب الموظفين. كيف تتصرف؟","choices":[{"text":"أراجع كل تفاصيل الرواتب بدقة","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أراجع فقط النقاط المهمة لتسريع العملية","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-5","text":"تواجه استفسارًا ماليًا عاجلًا من الإدارة. ماذا تفعل؟","choices":[{"text":"أعطي إجابة دقيقة مدعومة بالأرقام","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أقدم إجابة سريعة تغطي الأساسيات فقط","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-6","text":"تحتاج لتدقيق الحسابات السنوية. كيف تتصرف؟","choices":[{"text":"أجري تدقيق شامل وأعدل أي خطأ","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أركز على الأقسام الأكثر أهمية فقط","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-7","text":"مطلوب تقديم تقرير مالي لمستثمر. ماذا تفعل؟","choices":[{"text":"أعد تقرير دقيق ومفصل مع جميع البيانات","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أعد تقرير مختصر يغطي النقاط الأساسية","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-8","text":"تحتاج للتعامل مع خطأ ضريبي. كيف تتصرف؟","choices":[{"text":"أصلح الخطأ بدقة وأتأكد من الامتثال الكامل","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أصلح الخطأ بشكل سريع لتجنب المشاكل مؤقتًا","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-9","text":"مطلوب تحليل بيانات مالية لتقرير الإدارة. ماذا تفعل؟","choices":[{"text":"أحلل البيانات بدقة وأضع توصيات واضحة","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أقدم تحليل مختصر يغطي الأساسيات فقط","scores":{"accountant":2,"marketer":1,"hr":1}}]},
  { "id":"accountant-10","text":"تحتاج لمراجعة مستندات مالية معقدة. كيف تتصرف؟","choices":[{"text":"أراجع كل المستندات بدقة وأوثق النتائج","scores":{"accountant":3,"marketer":1,"hr":1}},{"text":"أركز على أهم النقاط لتوفير الوقت","scores":{"accountant":2,"marketer":1,"hr":1}}]},

  /* Marketer – مسوق */
  { "id":"marketer-1","text":"تحتاج لإطلاق حملة تسويقية جديدة. ماذا تفعل؟","choices":[{"text":"أخطط الحملة بدقة مع دراسة السوق والجمهور","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أطلق الحملة بسرعة وأعدل التفاصيل لاحقًا","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-2","text":"تواجه انخفاض تفاعل العملاء مع الحملة. كيف تتصرف؟","choices":[{"text":"أحلل البيانات وأعدل الحملة بدقة","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أجرب تغييرات سريعة لمعرفة التأثير","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-3","text":"مطلوب إعداد محتوى جذاب للسوشيال ميديا. ماذا تفعل؟","choices":[{"text":"أصنع محتوى مبتكر ومتوافق مع الجمهور","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أستخدم محتوى جاهز وأعدله قليلًا","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-4","text":"تحتاج لتقييم أداء حملة سابقة. كيف تتصرف؟","choices":[{"text":"أحلل النتائج وأضع توصيات دقيقة للحملات القادمة","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أركز على النتائج الأساسية فقط","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-5","text":"عميل يريد تعديل في الحملة الحالية. ماذا تفعل؟","choices":[{"text":"أطبق التعديل بدقة وأتابع تأثيره","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أجري تعديل سريع لتلبية طلب العميل فقط","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-6","text":"تواجه منافسة شديدة في السوق. كيف تتصرف؟","choices":[{"text":"أضع استراتيجيات دقيقة للتفوق على المنافسين","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أركز على الحملات السريعة لجذب العملاء الآن","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-7","text":"تحتاج لإقناع عميل محتمل بخدمة جديدة. ماذا تفعل؟","choices":[{"text":"أعد عرض متكامل يوضح الفوائد والقيمة","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أقدم عرض سريع لتقييم اهتمام العميل أولًا","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-8","text":"تواجه طلبًا لتقليص ميزانية الحملة. كيف تتصرف؟","choices":[{"text":"أعيد توزيع الموارد بعناية للحفاظ على النتائج","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أقلل التفاصيل فقط لتوفير المال بسرعة","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-9","text":"مطلوب إعداد تقرير شهري للحملات. ماذا تفعل؟","choices":[{"text":"أجمع كل البيانات بدقة وأحللها للتقرير","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أعد تقرير مختصر يغطي الأساسيات فقط","scores":{"accountant":1,"marketer":2,"hr":1}}]},
  { "id":"marketer-10","text":"تحتاج لإطلاق حملة على منصات متعددة. كيف تتصرف؟","choices":[{"text":"أخطط لكل منصة بدقة وأخصص المحتوى المناسب","scores":{"accountant":1,"marketer":3,"hr":1}},{"text":"أكرر نفس المحتوى على كل المنصات لتوفير الوقت","scores":{"accountant":1,"marketer":2,"hr":1}}]},

  /* HR Specialist – موظف موارد بشرية */
  { "id":"hr-1","text":"مطلوب توظيف موظف جديد. ماذا تفعل؟","choices":[{"text":"أجري مقابلات دقيقة وأقيم المرشحين بعناية","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أختار بسرعة لتغطية الحاجة العاجلة","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-2","text":"تواجه شكاوى موظفين عن بيئة العمل. كيف تتصرف؟","choices":[{"text":"أستمع للشكاوى وأحلل المشكلة بدقة","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أحل المشاكل الأساسية فقط لتسريع الأمر","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-3","text":"تحتاج لتقييم أداء موظف. ماذا تفعل؟","choices":[{"text":"أجري تقييم شامل وأعطي ملاحظات مفصلة","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أعطي تقييم أساسي لتوفير الوقت","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-4","text":"مطلوب تنظيم دورة تدريبية للموظفين. كيف تتصرف؟","choices":[{"text":"أخطط التدريب بدقة وأراعي احتياجات الجميع","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أعطي تدريب مختصر يغطي النقاط الأساسية","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-5","text":"تحتاج لمعالجة نزاع بين موظفين. ماذا تفعل؟","choices":[{"text":"أحل النزاع بحذر وأضمن رضا الأطراف","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أحل المشكلة بشكل سريع لتجنب التصعيد","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-6","text":"مطلوب إعداد سياسة جديدة للموظفين. كيف تتصرف؟","choices":[{"text":"أعد السياسة بدقة وأراعي كل التفاصيل","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أعد مسودة مختصرة للتطبيق السريع","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-7","text":"تحتاج لمقابلة موظف حول أدائه. ماذا تفعل؟","choices":[{"text":"أجري المقابلة بدقة وأوضح نقاط التطوير","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أناقش النقاط الأساسية فقط لتوفير الوقت","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-8","text":"مطلوب متابعة غياب الموظفين. كيف تتصرف؟","choices":[{"text":"أتابع كل التفاصيل وأضع خطة للغياب المتكرر","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أتابع الحالات الأكثر أهمية فقط","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-9","text":"تواجه طلب موظف للحصول على ترقية. ماذا تفعل؟","choices":[{"text":"أقيم الطلب بدقة وأراجع الأداء السابق","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أوافق بسرعة إذا استوفى الشروط الأساسية","scores":{"accountant":1,"marketer":1,"hr":2}}]},
  { "id":"hr-10","text":"تحتاج لإعداد تقرير شامل عن الموارد البشرية. كيف تتصرف؟","choices":[{"text":"أجمع كل البيانات وأحللها بدقة للتقرير النهائي","scores":{"accountant":1,"marketer":1,"hr":3}},{"text":"أعد تقرير مختصر يغطي النقاط الأساسية فقط","scores":{"accountant":1,"marketer":1,"hr":2}}]}
  ,
  /* Software Engineer – مهندس برمجيات */
  { "id":"software-1","text":"تواجه خطأ في البرنامج أثناء الاختبار. ماذا تفعل؟","choices":[{"text":"أحلل الخطأ وأصححه بدقة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أبحث عن حل سريع لتجاوز المشكلة مؤقتًا","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-2","text":"مطلوب إضافة ميزة جديدة بسرعة. كيف تتصرف؟","choices":[{"text":"أخطط بعناية وأكتب الكود مع اختبارات جيدة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أكتب الكود بسرعة لتسليم الميزة سريعًا","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-3","text":"تحتاج لمراجعة كود الفريق. ماذا تفعل؟","choices":[{"text":"أراجع الكود بدقة وأعطي ملاحظات مفصلة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أوافق بسرعة لتسريع العمل","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-4","text":"برنامجك يحتاج لتحسين الأداء. ماذا تفعل؟","choices":[{"text":"أعيد كتابة الأجزاء البطئية وأحسن الكود","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أضيف موارد لتسريع التنفيذ مؤقتًا","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-5","text":"تحتاج لتوثيق كود المشروع. كيف تتصرف؟","choices":[{"text":"أكتب توثيق مفصل لكل جزء من الكود","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أكتب ملخص سريع لتوفير الوقت","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-6","text":"تواجه تعارض بين مكتبات برمجية. ماذا تفعل؟","choices":[{"text":"أحل المشكلة بتحليل dependencies بدقة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أستبدل المكتبات لتجاوز المشكلة بسرعة","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-7","text":"مطلوب تصميم واجهة مستخدم جديدة. كيف تتصرف؟","choices":[{"text":"أصمم واجهة متوافقة وجذابة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أستخدم واجهة جاهزة لتسريع العمل","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-8","text":"برنامجك يحتاج لاختبارات أمان قبل الإطلاق. ماذا تفعل؟","choices":[{"text":"أجري اختبارات شاملة وأصلح الثغرات","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أختبر بشكل أساسي وأعدل عند الحاجة","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-9","text":"مطلوب تطوير تطبيق جديد مع واجهة معقدة. ماذا تفعل؟","choices":[{"text":"أخطط التطبيق بدقة وأبدأ التنفيذ","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أبدأ التنفيذ مباشرة لتوفير الوقت","scores":{"software":2,"architect":1,"mechanical":1}}]},
  { "id":"software-10","text":"تحتاج لتقييم أداء البرنامج بعد الإطلاق. كيف تتصرف؟","choices":[{"text":"أحلل الأداء بدقة وأضع تحسينات واضحة","scores":{"software":3,"architect":1,"mechanical":1}},{"text":"أراقب الأداء بشكل أساسي وأعدل عند الحاجة","scores":{"software":2,"architect":1,"mechanical":1}}]},

  /* Architect – مهندس معماري */
  { "id":"architect-1","text":"مطلوب تصميم مبنى جديد. ماذا تفعل؟","choices":[{"text":"أخطط التصميم بدقة وأراعي التفاصيل الهندسية والجمالية","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أستخدم تصميم تقليدي لتسريع العمل","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-2","text":"تحتاج لتلبية طلبات العميل الخاصة بالتصميم. كيف تتصرف؟","choices":[{"text":"أدمج الطلبات بحذر مع الحفاظ على جودة التصميم","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أعدل على الطلبات بسرعة دون التركيز على التفاصيل","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-3","text":"مطلوب تصميم داخلي جذاب. ماذا تفعل؟","choices":[{"text":"أبتكر تصميم داخلي مبتكر وجذاب","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أستخدم تصميمات جاهزة مع تعديلات بسيطة","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-4","text":"تواجه مشكلة في متانة المبنى. كيف تتصرف؟","choices":[{"text":"أحلل المشكلة وأعدل التصميم بدقة لضمان السلامة","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أجري تعديل سريع لتجاوز المشكلة مؤقتًا","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-5","text":"مطلوب تقييم تكاليف المشروع. ماذا تفعل؟","choices":[{"text":"أحسب كل التكاليف بدقة وأضع ميزانية مفصلة","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أضع تقدير تقريبي لتوفير الوقت","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-6","text":"عميل يريد تغيير التصميم بعد البدء. كيف تتصرف؟","choices":[{"text":"أعيد التصميم مع مراعاة التفاصيل بدقة","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أجري تعديل سريع لتلبية رغبة العميل فقط","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-7","text":"تحتاج لإعداد رسم هندسي كامل. ماذا تفعل؟","choices":[{"text":"أجهز رسمًا دقيقًا ومفصلًا لكل جزء من المشروع","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أجهز رسمًا عام لتسهيل العمل","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-8","text":"مطلوب تصميم خارجي مبتكر. كيف تتصرف؟","choices":[{"text":"أصمم واجهة مبتكرة ومتناسقة مع البيئة","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أستخدم نمط تقليدي لتسريع التنفيذ","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-9","text":"تواجه تحدي في توزيع المساحات. ماذا تفعل؟","choices":[{"text":"أخطط توزيع المساحات بعناية لضمان الوظائف المثالية","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أوزع المساحات بشكل تقريبي لتسهيل التنفيذ","scores":{"software":1,"architect":2,"mechanical":1}}]},
  { "id":"architect-10","text":"مطلوب تقديم عرض التصميم للعميل. كيف تتصرف؟","choices":[{"text":"أجهز عرض شامل وجذاب يوضح كل التفاصيل","scores":{"software":1,"architect":3,"mechanical":1}},{"text":"أقدم عرض مختصر يركز على النقاط الأساسية فقط","scores":{"software":1,"architect":2,"mechanical":1}}]},

  /* Mechanical Engineer – مهندس ميكانيكا */
  { "id":"mechanical-1","text":"تحتاج لتصميم آلة جديدة. ماذا تفعل؟","choices":[{"text":"أخطط التصميم بدقة وأراعي جميع المعايير الهندسية","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أستخدم تصميم تقريبي لتسريع العمل","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-2","text":"تواجه مشكلة في أداء جهاز ميكانيكي. كيف تتصرف؟","choices":[{"text":"أحلل السبب وأعيد التصميم لتحسين الأداء","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أجري تعديل مؤقت لتشغيل الجهاز فقط","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-3","text":"مطلوب اختبار متانة مكونات جديدة. ماذا تفعل؟","choices":[{"text":"أجري اختبارات دقيقة وأوثق النتائج","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أختبر الأجزاء الأساسية فقط لتوفير الوقت","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-4","text":"تحتاج لتحسين كفاءة نظام ميكانيكي. كيف تتصرف؟","choices":[{"text":"أحلل النظام وأجري تحسينات دقيقة","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أضيف تعديلات سريعة لتسريع الأداء","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-5","text":"مطلوب صيانة جهاز ميكانيكي عاجلة. ماذا تفعل؟","choices":[{"text":"أجري الصيانة بدقة وأتأكد من سلامة الجهاز","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أصلح الجزء الضروري فقط لتشغيل الجهاز","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-6","text":"تواجه أعطال متكررة في آلة. كيف تتصرف؟","choices":[{"text":"أحلل السبب الجذري وأعيد التصميم إذا لزم","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أصلح الأعطال السطحية فقط لتشغيل الآلة","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-7","text":"مطلوب تصميم أجزاء جديدة لآلة قائمة. ماذا تفعل؟","choices":[{"text":"أخطط التصميم بدقة وأراعي كل المعايير","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أستخدم تصميم تقريبي لتوفير الوقت","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-8","text":"تحتاج لتقييم كفاءة نظام ميكانيكي. كيف تتصرف؟","choices":[{"text":"أجري تقييم شامل وأوثق النتائج","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أركز على النقاط الأساسية فقط لتوفير الوقت","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-9","text":"مطلوب تقديم تقرير شامل عن مشروع ميكانيكي. ماذا تفعل؟","choices":[{"text":"أجهز تقرير مفصل مع بيانات دقيقة","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أعد تقرير مختصر يوضح أهم النقاط فقط","scores":{"software":1,"architect":1,"mechanical":2}}]},
  { "id":"mechanical-10","text":"تواجه تحديات تصميمية في آلة معقدة. كيف تتصرف؟","choices":[{"text":"أحلل التحديات وأضع حلول دقيقة وفعالة","scores":{"software":1,"architect":1,"mechanical":3}},{"text":"أطبق حلول مؤقتة لتشغيل الجهاز فقط","scores":{"software":1,"architect":1,"mechanical":2}}]},

  /* Education – التعليم */
  /* Teacher – معلم */
  {"id":"teacher-1","text":"طالب يطرح سؤال صعب أثناء الدرس. ماذا تفعل؟","choices":[{"text":"أشرح بالتفصيل حتى يفهم الطالب","scores":{"teacher":3,"student_counselor":1}},{"text":"أعطي إجابة مختصرة وأكمل الدرس","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-2","text":"تحتاج لتخطيط درس جديد. كيف تتصرف؟","choices":[{"text":"أخطط الدرس بدقة مع كل الأنشطة","scores":{"teacher":3,"student_counselor":1}},{"text":"أستخدم خطة جاهزة لتوفير الوقت","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-3","text":"طالب يتصرف بشكل سيء في الصف. ماذا تفعل؟","choices":[{"text":"أتعامل مع الموقف بحزم وبشرح السبب","scores":{"teacher":3,"student_counselor":1}},{"text":"أتجاهل السلوك وأكمل الدرس","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-4","text":"تحتاج لتقييم أداء الطلاب. كيف تتصرف؟","choices":[{"text":"أعد اختبار شامل وموضوعي لكل الطلاب","scores":{"teacher":3,"student_counselor":1}},{"text":"أقيم الطلاب بطريقة سريعة وأساسية","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-5","text":"طالب يواجه صعوبة في فهم الدرس. ماذا تفعل؟","choices":[{"text":"أشرح له بشكل فردي وبصبر","scores":{"teacher":3,"student_counselor":1}},{"text":"أوجهه لمصادر إضافية ويكمل بنفسه","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-6","text":"تحتاج لاختيار نشاط للصف. كيف تتصرف؟","choices":[{"text":"أختار النشاط المناسب لكل مستوى بدقة","scores":{"teacher":3,"student_counselor":1}},{"text":"أختار نشاط بسيط سريع التطبيق","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-7","text":"طالب يسأل عن موضوع خارج المنهج. ماذا تفعل؟","choices":[{"text":"أجيب بدقة وأوضح الرابط بالدرس","scores":{"teacher":3,"student_counselor":1}},{"text":"أعطي إجابة مختصرة فقط","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-8","text":"تحتاج لإشراك الطلاب في النقاش. كيف تفعل؟","choices":[{"text":"أشجع الجميع على المشاركة وأدير النقاش بدقة","scores":{"teacher":3,"student_counselor":1}},{"text":"أختار بعض الطلاب للرد لتوفير الوقت","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-9","text":"طالب يطلب تقييمه الشخصي. ماذا تفعل؟","choices":[{"text":"أقدم تقييم شامل ونصائح للتطوير","scores":{"teacher":3,"student_counselor":1}},{"text":"أعطي تقييم سريع وغالبًا نقاط أساسية","scores":{"teacher":2,"student_counselor":1}}]},
  {"id":"teacher-10","text":"تحتاج لإدارة وقت الدرس بشكل فعال. كيف تفعل؟","choices":[{"text":"أقسم الوقت بدقة لكل نشاط","scores":{"teacher":3,"student_counselor":1}},{"text":"أركز على أهم الأنشطة فقط","scores":{"teacher":2,"student_counselor":1}}]},

  /* Student Counselor – مرشد طلابي */
  {"id":"counselor-1","text":"طالب يشعر بالإحباط من دراسته. ماذا تفعل؟","choices":[{"text":"أستمع له بدقة وأعطي نصائح مفصلة","scores":{"teacher":1,"student_counselor":3}},{"text":"أعطي نصائح مختصرة فقط","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-2","text":"مطلوب تقديم استشارة لمشكلة شخصية. كيف تتصرف؟","choices":[{"text":"أقدم الدعم الكامل وأستمع لكل التفاصيل","scores":{"teacher":1,"student_counselor":3}},{"text":"أقدم نصيحة مختصرة لتوفير الوقت","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-3","text":"طالب يعاني من ضغط نفسي شديد. ماذا تفعل؟","choices":[{"text":"أعطي جلسة دعم مفصلة وأتابع الحالة","scores":{"teacher":1,"student_counselor":3}},{"text":"أقدم توجيه أساسي وأتابع لاحقًا","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-4","text":"تحتاج لإرشاد طالب لاختيار تخصصه الجامعي. كيف تفعل؟","choices":[{"text":"أحلل ميوله وأرشده بدقة","scores":{"teacher":1,"student_counselor":3}},{"text":"أعطي خيارات عامة ليختار بنفسه","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-5","text":"طالب يحتاج لتجاوز مشكلة اجتماعية. ماذا تفعل؟","choices":[{"text":"أستمع وأضع خطة دعم دقيقة","scores":{"teacher":1,"student_counselor":3}},{"text":"أعطي نصائح سريعة فقط","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-6","text":"مطلوب تنظيم ورشة تطوير مهارات للطلاب. كيف تتصرف؟","choices":[{"text":"أخطط الورشة بدقة مع كل التفاصيل","scores":{"teacher":1,"student_counselor":3}},{"text":"أختصر الورشة لتغطية النقاط الأساسية فقط","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-7","text":"طالب يحتاج لمتابعة مستمرة في مشاكله. ماذا تفعل؟","choices":[{"text":"أتابع الحالة خطوة بخطوة وأدون كل ملاحظة","scores":{"teacher":1,"student_counselor":3}},{"text":"أتابع النقاط الأساسية فقط","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-8","text":"مطلوب تقييم نتائج استشارة سابقة. كيف تتصرف؟","choices":[{"text":"أجري تقييم شامل لكل النقاط","scores":{"teacher":1,"student_counselor":3}},{"text":"أركز على النتائج الأساسية فقط","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-9","text":"طالب يحتاج نصيحة عاجلة لمشكلة دراسية. ماذا تفعل؟","choices":[{"text":"أقدم نصيحة دقيقة مدروسة","scores":{"teacher":1,"student_counselor":3}},{"text":"أعطي إجابة سريعة لحل المشكلة مؤقتًا","scores":{"teacher":1,"student_counselor":2}}]},
  {"id":"counselor-10","text":"تحتاج لإدارة وقت الاستشارات اليومية. كيف تتصرف؟","choices":[{"text":"أقسم الوقت بدقة لكل طالب","scores":{"teacher":1,"student_counselor":3}},{"text":"أركز على الحالات الحرجة أولًا","scores":{"teacher":1,"student_counselor":2}}]}]

  /************************************************************************
 * تخصيص: اختيار 20 سؤال فقط بناءً على الإجابات
 ************************************************************************/
const MAX_QUESTIONS = 30;
let selectedQuestions = []; // هنا نخزن العشرين سؤال
let usedIds = new Set();

// دالة لاختيار السؤال التالي حسب الميول (scores الحالية)

function pickNextQuestion() {
  if (selectedQuestions.length >= MAX_QUESTIONS) return null;

  // خذ كل الأسئلة التي لم تُستخدم بعد
  let available = scenarios.filter(q => !usedIds.has(q.id));

  if (available.length === 0) return null;

  // اختر سؤالًا عشوائيًا
  const nextQ = available[Math.floor(Math.random() * available.length)];
  usedIds.add(nextQ.id);
  selectedQuestions.push(nextQ);
  return nextQ;
}

  /************************************************************************
   * 3) الحالة والتهيئة
   ************************************************************************/
  let currentIndex = 0;
  let answers = Array(scenarios.length).fill(null); // يخزن choiceIndex لكل سؤال
  let totals = {}; // نقاط كل مهنة
  careers.forEach(c => totals[c.id] = 0);

  /************************************************************************
   * 4) عناصر DOM والـ UI
   ************************************************************************/
  const startBtn = document.getElementById('startBtn');
  const intro = document.getElementById('intro');
  const quiz = document.getElementById('quiz');
  const cardsSection = document.getElementById("cards-section");
  const questionText = document.getElementById('questionText');
  const choicesDiv = document.getElementById('choices');
  const progressText = document.getElementById('progressText');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const finishBtn = document.getElementById('finishBtn');
  const resultDiv = document.getElementById('result');
  const resultList = document.getElementById('resultList');
  const explain = document.getElementById('explain');
  const retryBtn = document.getElementById('retryBtn');

  /************************************************************************
   * 5) دوال رئيسية
   ************************************************************************/
  function renderQuestion(i) {
    const q = selectedQuestions[i];
    progressText.textContent = `السؤال ${i+1} من ${MAX_QUESTIONS}`;
    questionText.textContent = q.text;
    choicesDiv.innerHTML = '';
    q.choices.forEach((choice, idx) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'choiceBtn';
      btn.innerText = choice.text;
      btn.onclick = () => selectChoice(i, idx);
      // تمييز الاختيار إذا كان محدد مسبقاً
      if (answers[i] === idx) btn.style.outline = '3px solid #bde4ff';
      choicesDiv.appendChild(btn);
    });
    prevBtn.disabled = (i === 0);
    // إظهار/إخفاء أزرار
    if (i === scenarios.length - 1) {
      nextBtn.classList.add('hidden');
      finishBtn.classList.remove('hidden');
    } else {
      nextBtn.classList.remove('hidden');
      finishBtn.classList.add('hidden');
    }
  }

  function selectChoice(questionIndex, choiceIndex) {
    answers[questionIndex] = choiceIndex;
    // تحديث UI لتمييز الاختيار
    Array.from(document.querySelectorAll('#choices button')).forEach((b, idx) => {
      b.style.outline = (idx === choiceIndex) ? '3px solid #bde4ff' : '';
    });
  }

 function computeTotals() {
  // اصفار
  careers.forEach(c => totals[c.id] = 0);

  // احسب النقاط من الأسئلة اللي ظهرت فقط
  selectedQuestions.forEach((q, qi) => {
    const ci = answers[qi];
    if (ci === null || ci === undefined) return;
    const choice = q.choices[ci];
    const scoresObj = choice.scores || {};
    Object.keys(scoresObj).forEach(cId => {
      if (totals[cId] !== undefined) totals[cId] += Number(scoresObj[cId]) || 0;
    });
  });
}


  function normalizeAndSort() {
    computeTotals();
    // مجموع درجات جميع المهن
    const sum = Object.values(totals).reduce((a,b)=>a+b,0) || 1;
    // احسب نسبة لكل مهنة
    const ranked = careers.map(c => ({
      id: c.id,
      name: c.name,
      score: totals[c.id],
      pct: Math.round((totals[c.id]/sum)*10000)/100 // نسبة مئوية مع دقتين
    })).sort((a,b)=> b.score - a.score);
    return ranked;
  }

  /************************************************************************
   * 6) أحداث الأزرار
   ************************************************************************/
  startBtn.addEventListener('click', () => {
  intro.classList.add('hidden');
  quiz.classList.remove('hidden');
  cardsSection.style.display = "none";
  currentIndex = 0;
  selectedQuestions = [];
  usedIds.clear();
  pickNextQuestion();
  renderQuestion(currentIndex);
  document.body.classList.add("quiz-active");
});


  nextBtn.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex < MAX_QUESTIONS) {
      if (!selectedQuestions[currentIndex]) pickNextQuestion();
      renderQuestion(currentIndex);
    } else {
      showResults();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      renderQuestion(currentIndex);
    }
  });

  finishBtn.addEventListener('click', () => {
    if (answers.some(a => a === null)) {
      if (!confirm('بعض الأسئلة غير مجابة — هل ترغب بإنهاء الاختبار الآن؟')) return;
    }
    showResults();
  });

  retryBtn.addEventListener('click', () => {
    // إعادة ضبط
    answers = Array(scenarios.length).fill(null);
    careers.forEach(c => totals[c.id] = 0);
    currentIndex = 0;
    resultDiv.classList.add('hidden');
    intro.classList.remove('hidden');
  });

  // لما يضغط المستخدم على "ابدأ الاختبار"
  startBtn.addEventListener("click", () => {
    document.body.classList.add("quiz-active");
    // إخفاء الكروت + المقدمة
    cardsSection.style.display = "none";
    intro.style.display = "none";

    // إظهار الاختبار
    quiz.classList.remove("hidden");
  });

  // زر "إعادة المحاولة"
  retryBtn.addEventListener("click", () => {
    currentQuestion = 0;          // إعادة تعيين السؤال الأول
    selectedAnswers = [];         // إعادة تعيين الإجابات المختارة
    result.classList.add("hidden");
    intro.classList.remove("hidden");
    renderQuestion(questions);
  });


  
  ////////////////////////////////////////////////////////////////////////
    function sendResultsToServer() {
    const ranked = normalizeAndSort();
    const top = ranked.slice(0, 3);

    const formData = new FormData();
    formData.append('job1', top[0]?.name || '');
    formData.append('job1_percent', top[0]?.pct ? Math.round(top[0].pct) : 0);
    formData.append('job2', top[1]?.name || '');
    formData.append('job2_percent', top[1]?.pct ? Math.round(top[1].pct) : 0);
    formData.append('job3', top[2]?.name || '');
    formData.append('job3_percent', top[2]?.pct ? Math.round(top[2].pct) : 0);
   fetch('save_scenarios_result.php', {
    method: 'POST',
    body: formData,
    credentials: 'include'
     })
    .then(res => res.text())
    .then(data => console.log(data));
       }

// تعديل showResults
function showResults() {
    const ranked = normalizeAndSort();
    resultList.innerHTML = '';
    const top = ranked.slice(0,3);
    top.forEach(r => {
        const li = document.createElement('li');
        li.innerHTML = `<strong>${r.name}</strong> — نقاط: ${r.score} — نسبة تقريبية: ${r.pct}%`;
        resultList.appendChild(li);
    });

    quiz.classList.add('hidden');
    resultDiv.classList.remove('hidden');

    // أرسل النتائج الى PHP
    sendResultsToServer();
  }



  </script>
</body>

</html>
