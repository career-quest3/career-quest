<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Error: session not found");
}
//echo "User ID: " . $_SESSION['user_id']; // مؤقتًا عشان اتحقق
?>


<!DOCTYPE html>

<html lang="ar" dir="ltr">
      <!-- الخطوط -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Suez+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
   <!-- logo font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Pixelify+Sans:wght@400..700&family=Suez+One&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">

         <!-- Linking google fonts for icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <title>اختبار الميول المهنية الذكي</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>


        body {
            font-family: 'Cairo', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 100px;
            box-sizing: border-box;
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

        .navbar {
            
            width: 100%;
            height: 75px;
            position: fixed;
             padding-right: 30px;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(6px); 
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
    background: linear-gradient(to bottom, rgb(10, 10, 151), rgb(100, 100, 230)); /* تدرج لوني */
    -webkit-background-clip: text; /* قص الخلفية على النص */
    -webkit-text-fill-color: transparent; /* جعل النص شفاف */
    background-clip: text; /* قص الخلفية على النص */ 
}
        

        .nav-links { 
        padding-right: 20px;
            display: flex;
            gap: 2px; 
             list-style: none;
             
        }

        .nav-links a {
             margin-left: 18px;
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-weight: bold;
            padding: 4px 8px;
            font-size: 15px;
            display: block;
            border: 2px solid rgba(87, 87, 152, 0.897);
            border-radius: 10px;
            transition: transform 0.4s ease-in-out, color 0.3s ease-in-out;
        }

         .menu ul li a:hover {
            color: rgb(100, 100, 230);
            transform: scale(1.1);
      }
 

        .start-screen {
            width: 100%;
            min-height: 380px;
            max-width: 700px;
            background-color: #fff;
            padding: 50px;
            border: 1px solid #e6e9ee;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(18, 38, 63, 0.06);
            margin-top: 30px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }

        .start-screen h1 {
             font-family: 'Cairo', sans-serif;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 30px;
            color:black;
        }

        .start-description {
            font-size: 18px;
            font-family: 'Cairo', sans-serif;
            color:rgb(67, 67, 155);;
            line-height: 1.6;
            font-weight: 500;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .start-screen button {
            width: 100%;
            padding: 16px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            background-color:  linear-gradient(to bottom, rgb(10, 10, 151), rgb(100, 100, 230));
            color: white;
            border: none;
            font-weight: 700;
            box-shadow: 0 6px 18px rgba(25, 118, 255, 0.18);
        }

        .start-screen button:hover {
            background-color: #000080;
        }

        .score-container,
        #display-container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border: 1px solid #e6e9ee;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(18, 38, 63, 0.06);
            text-align: center;
            margin-top: 30px;
            box-sizing: border-box;
        }

        .number-of-question {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
            text-align: left;
            color: #000;
        }

        .question {
            font-weight: 800;
            font-size: 20px;
            margin-bottom: 20px;
            text-align: left;
            color: #000;
        }

        .option-div {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            box-sizing: border-box;
            padding: 14px 18px;
            margin-bottom: 12px;
            border: 1px solid #e6e9ee;
            border-radius: 6px;
            background-color: #fff;
            cursor: pointer;
            transition: 0.2s;
            color: #000;
            font-weight: 600;
        }

        .option-div:hover {
            background-color: #f1f1f1;
        }

        .option-div input[type="radio"] {
            appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid rgb(91, 91, 189);
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            transition: 0.2s;
        }

        .option-div input[type="radio"]:checked {
            background-color: rgb(91, 91, 189);
            box-shadow: 0 0 0 3px rgba(10, 10, 151, 0.2);
        }

        button {
            padding: 14px 22px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            background-color:rgb(91, 91, 189);
            color: white;
            margin-top: 15px;
            font-weight: 700;
            box-shadow: 0 6px 18px rgba(25, 118, 255, 0.18);
        }

        button:hover:enabled {
            background-color: rgb(91, 91, 189);
        }

        button:disabled {
            background-color: #a0c4ff;
            cursor: not-allowed;
        }

        .progress {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .progress-dot {
            width: 14px;
            height: 14px;
            background: #e6e9ee;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .progress-dot.active {
            background: rgb(10, 10, 151);
        }

        .hide {
            display: none;
        }

        .career-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            background-color: rgba(91, 91, 189, 0.88);;
            color: white;
            border-radius: 20px;
            font-weight: bold;
        }

        .category-section {
            margin: 1.5rem 0;
            padding: 1rem;
            background-color: #e8f4fc;
            border-radius: 8px;
            border-left: 4px solid rgba(91, 91, 189, 0.88);
        }

        .category-title {
            font-size: 1.3rem;
            color: #2c3e50;
            margin-bottom: 0.8rem;
        }

        .career-item {
            padding: 0.5rem;
            margin: 0.3rem 0;
            background-color: #d6eaf8;
            border-radius: 4px;
        }

        .top-career {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }

        .detection-message {
            background-color: #e8f8f5;
            border: 1px solid #a9dfbf;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem 0;
            color: #0e6655;
        }

    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Career Quest</div>
        <div class="nav-links">

      <a href="scenario_test.php">اختبار السيناريوهات المهني</a>
     <a href="career_test.php">الاختبار المهني </a>
     <a href="register-page.php"> إنشاء حساب </a>
      <a href="index.html">الصفحة الرئيسية</a>
        </div>
    </nav>

    <div class="start-screen">
        <h1>اختبار الميول المهنية </h1>
        <p class="start-description"> أجب عن الأسئلة لاكتشاف المهن التي تناسب شخصيتك وقدرتك</p>

        <button id="start-button">ابدأ الاختبار</button>
    </div>

    <div id="display-container" class="hide">
        <div class="stage-indicator" id="stage-indicator"></div>
        <p class="number-of-question"></p>
        <div id="container"></div>
        <div class="progress" id="progress-dots"></div>
        <button id="next-button" disabled>التالي</button>
    </div>

    <div class="score-container hide">
        <h1>نتيجة الاختبار</h1>
        <div id="user-score"></div>
        <div class="career-result" id="career-result"></div>
         <a href="scenario_test.php" style="display: block; margin-top: 20px; font-size: 20px;  font-family: 'Cairo', sans-serif; color: rgba(91, 91, 189, 0.88);  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);/* ظل خفيف */
  border: 2px solid rgb(100, 100, 230); text-decoration: none;
">ابدأ اختبار السيناريوهات المهني</a>
    </div>
 
 



    <script>



        // ==================== بداية كود JavaScript ====================

        // العناصر الأساسية من DOM
        let quizContainer = document.getElementById("container");
        let nextBtn = document.getElementById("next-button");
        let countOfQuestion = document.querySelector(".number-of-question");
        let displayContainer = document.getElementById("display-container");
        let scoreContainer = document.querySelector(".score-container");
        let userScore = document.getElementById("user-score");
        let careerResult = document.getElementById("career-result");
        let startScreen = document.querySelector(".start-screen");
        let startButton = document.getElementById("start-button");
        let progressDots = document.getElementById("progress-dots");
        let stageIndicator = document.getElementById("stage-indicator");

        // المتغيرات العامة
        let questionCount;
        let careerScores = {};
        let selectedQuestions = [];
        let allCareers = new Set();
        let userAnswers = {};
        let currentStage = 1; // 1: المرحلة الأولى، 2: المرحلة الثانية
        let detectedCategory = null;

        let questions;

fetch('quiz.json')  // هنا رابط ملف الـ JSON
  .then(response => response.json())
  .then(data => {
    questions = data;
    console.log("تم تحميل الأسئلة:", questions);
  })
  .catch(error => {
    console.error("فشل تحميل ملف JSON:", error);
  });

        
        // أضف هذا المتغير في بداية قسم JavaScript
        const allQuestionsData = {
    "الصحة": {
        "الطبيب": [
            {
                "id": 1,
                "question": "أستطيع العمل في التشريح والدم دون إزعاج",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 2,
                "question": "استمتعت بدروس البيولوجيا وفهم جسم الإنسان",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 1,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 3,
                "question": "أطمح لاكتشاف علاج أو دواء مفيد للبشر",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 4,
                "question": "أهتم بـ فهم الجينات والهندسة الوراثية",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 3
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 2
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 1
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 5,
                "question": "أستمتع بـ مشاهدة محتوى طبي وعلاجي على الإنترنت",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 6,
                "question": "أحب القراءة عن الأمراض وطرق تشخيصها",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 7,
                "question": "أهتم بمتابعة الأبحاث الطبية الحديثة",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 3
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 2
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 1
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 8,
                "question": "أشعر بالمسؤولية تجاه صحة المرضى ورفاهيتهم",
                "choices": {
                    "دائمًا": {
                        "طبيب": 3,
                        "ممرض": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "طبيب": 2,
                        "ممرض": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "طبيب": 1,
                        "ممرض": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "طبيب": 0,
                        "ممرض": 0,
                        "جرّاح": 0
                    }
                }
            }
        ],
        "الممرض": [
            {
                "id": 9,
                "question": "أستمتع بـ فكرة العمل في المستشفى كمهنة مستقبلية",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 1
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 10,
                "question": "أستمتع بـ التعامل بصبر مع أشخاص صعبي الطباع",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 11,
                "question": "أجد متعة في رعاية المرضى ومساعدتهم",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 1
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 12,
                "question": "أستمتع بتعليم المرضى كيفية العناية بصحتهم",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 13,
                "question": "أستطيع العمل تحت الضغط في حالات الطوارئ",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 14,
                "question": "أهتم بتطبيق إجراءات النظافة والتعقيم بدقة",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 2
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 15,
                "question": "هل تهتم بالتعامل مع الأطفال؟",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 1
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            },
            {
                "id": 16,
                "question": "أشعر بالرضا عندما أرى تحسن حالة المرضى",
                "choices": {
                    "دائمًا": {
                        "ممرض": 3,
                        "طبيب": 2,
                        "جرّاح": 1
                    },
                    "أحيانًا": {
                        "ممرض": 2,
                        "طبيب": 1,
                        "جرّاح": 1
                    },
                    "نادرًا": {
                        "ممرض": 1,
                        "طبيب": 0,
                        "جرّاح": 0
                    },
                    "أبدًا": {
                        "ممرض": 0,
                        "طبيب": 0,
                        "جرّاح": 0
                    }
                }
            }
        ],
        "جرّاح": [
            {
                "id": 17,
                "question": "أستطيع التركيز لفترات طويلة أثناء العمل",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 3,
                        "طبيب": 2,
                        "ممرض": 1
                    },
                    "أحيانًا": {
                        "جرّاح": 2,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "نادرًا": {
                        "جرّاح": 1,
                        "طبيب": 0,
                        "ممرض": 0
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 18,
                "question": "أستمتع بالأعمال التي تتطلب دقة عالية",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 3,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "أحيانًا": {
                        "جرّاح": 2,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "نادرًا": {
                        "جرّاح": 1,
                        "طبيب": 0,
                        "ممرض": 0
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 19,
                "question": "أستمتع بالعمل داخل مختبر وتجارب علمية",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 3,
                        "طبيب": 2,
                        "ممرض": 1
                    },
                    "أحيانًا": {
                        "جرّاح": 2,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "نادرًا": {
                        "جرّاح": 1,
                        "طبيب": 0,
                        "ممرض": 0
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 20,
                "question": "أستمتع بحل المشكلات المعقدة",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 3,
                        "طبيب": 2,
                        "ممرض": 2
                    },
                    "أحيانًا": {
                        "جرّاح": 2,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "نادرًا": {
                        "جرّاح": 1,
                        "طبيب": 0,
                        "ممرض": 0
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 21,
                "question": "أستطيع اتخاذ قرارات سريعة في الظروف الصعبة",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 2,
                        "طبيب": 2,
                        "ممرض": 3
                    },
                    "أحيانًا": {
                        "جرّاح": 1,
                        "طبيب": 1,
                        "ممرض": 2
                    },
                    "نادرًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 1
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 22,
                "question": "أهتم بالتقنيات الطبية الحديثة",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 2,
                        "طبيب": 2,
                        "ممرض": 3
                    },
                    "أحيانًا": {
                        "جرّاح": 1,
                        "طبيب": 1,
                        "ممرض": 2
                    },
                    "نادرًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 1
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 23,
                "question": "هل تشعر بالإنجاز بعد العمليات الناجحة؟",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 2,
                        "طبيب": 2,
                        "ممرض": 3
                    },
                    "أحيانًا": {
                        "جرّاح": 1,
                        "طبيب": 1,
                        "ممرض": 2
                    },
                    "نادرًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 1
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            },
            {
                "id": 24,
                "question": "أستمتع بالعمل في بيئة منظمة ومنضبطة",
                "choices": {
                    "دائمًا": {
                        "جرّاح": 3,
                        "طبيب": 2,
                        "ممرض": 2
                    },
                    "أحيانًا": {
                        "جرّاح": 2,
                        "طبيب": 1,
                        "ممرض": 1
                    },
                    "نادرًا": {
                        "جرّاح": 1,
                        "طبيب": 0,
                        "ممرض": 0
                    },
                    "أبدًا": {
                        "جرّاح": 0,
                        "طبيب": 0,
                        "ممرض": 0
                    }
                }
            }
        ]
    },
    "التعليم": {
        "المعلم": [
            {
                "id": 25,
                "question": "أعرف كيف أتعامل مع الأطفال وأستمتع بأفعالهم",
                "choices": {
                    "دائمًا": {
                        "معلم": 3,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 2,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 1,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 26,
                "question": "أستمتع بالعمل مع الناس والتعاون في فريق",
                "choices": {
                    "دائمًا": {
                        "معلم": 3,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 2,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 1,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 27,
                "question": "أتطوع دائمًا لأكون ضمن المتحدثين في المحاضرات، أو المناسبات، أو الغرف الصفية",
                "choices": {
                    "دائمًا": {
                        "معلم": 3,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 2,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 1,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 28,
                "question": "أستمتع بتحضير الدروس والأنشطة التعليمية",
                "choices": {
                    "دائمًا": {
                        "معلم": 3,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 2,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 1,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 29,
                "question": "أحب مساعدة الآخرين على فهم المفاهيم الصعبة",
                "choices": {
                    "دائمًا": {
                        "معلم": 2,
                        "مرشد طلابي": 3,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 1,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 0,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 30,
                "question": "أستمتع بمشاهدة طلابي وهم يتقدمون ويتعلمون",
                "choices": {
                    "نعم": {
                        "معلم": 3,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 2,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 1,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    },
                    "لا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 31,
                "question": "أستمتع بابتكار طرق تعليمية جديدة",
                "choices": {
                    "دائمًا": {
                        "معلم": 2,
                        "مرشد طلابي": 3,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 1,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 0,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 32,
                "question": "أهتم بمتابعة أحدث طرق التعليم",
                "choices": {
                    "دائمًا": {
                        "معلم": 2,
                        "مرشد طلابي": 3,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "معلم": 1,
                        "مرشد طلابي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "معلم": 0,
                        "مرشد طلابي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "معلم": 0,
                        "مرشد طلابي": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ],
        "المرشد الطلابي": [
            {
                "id": 33,
                "question": "قرأت عن الاكتئاب والمشاكل النفسية وتهمني هذه المواضيع",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 34,
                "question": "المهنة التي تتطلب الصبر واللطف تجاه الآخرين هي المهنة المناسبة لي",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 35,
                "question": "هل تهتم بتوجيه الطلاب مهنياً؟",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 36,
                "question": "أنا على استعداد لوضع احتياجات الآخرين قبل احتياجاتي",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 37,
                "question": "أهتم بمعرفة أسباب السلوك البشري",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 38,
                "question": "هل تمتلك مهارات حل النزاعات؟",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 2,
                        "معلم": 3,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 1,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 0,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 39,
                "question": "أستطيع كسب ثقة الناس بسهولة",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 40,
                "question": "أستمتع بمساعدة الآخرين على اتخاذ قرارات مهمة",
                "choices": {
                    "دائمًا": {
                        "مرشد طلابي": 3,
                        "معلم": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "مرشد طلابي": 2,
                        "معلم": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مرشد طلابي": 1,
                        "معلم": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مرشد طلابي": 0,
                        "معلم": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ]
    },
    "الهندسة": {
        "مهندس برمجيات": [
            {
                "id": 41,
                "question": "أستمتع باستخدام برامج جديدة وأتساءل كيف بُنيت",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 42,
                "question": "هل تهتم بتعلم لغات البرمجة؟",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 43,
                "question": "أشعر أن الرياضيات منطقية وممتعة",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 44,
                "question": "هل تستمتع بالعمل على المشاريع التقنية؟",
                "choices": {
                    "نعم": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "لا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 45,
                "question": "أفضل العمل لوحدي عن العمل مع مجموعة من الأشخاص حتى لو اضطررت لذلك",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 46,
                "question": "أستمتع بتحليل المشكلات وإيجاد حلول لها",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 47,
                "question": "أستمتع بإنشاء تطبيقات وبرامج مفيدة",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 3,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 48,
                "question": "أستمتع بالعمل في بيئة مكتبية، وخاصة أمام جهاز الكمبيوتر",
                "choices": {
                    "دائمًا": {
                        "مهندس برمجيات": 3,
                        "مهندس معماري": 2,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            }
        ],
        "مهندس معماري": [
            {
                "id": 49,
                "question": "أرتب المساحات وأهتم بالديكور الداخلي",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 50,
                "question": "أجد تصاميم المباني والمساحات جذابة",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 51,
                "question": "أستمتع ببناء مجسمات هندسية دقيقة",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 52,
                "question": "أهتم بالتفاصيل الدقيقة في التصميم",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 1,
                        "مهندس mيكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "لا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 53,
                "question": "أهتم بترتيب أوراقي وملفاتي المدرسية/المهنية ووضع خطة دراسية واضحة قبل البدء بالدراسة/العمل",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 54,
                "question": "أستمتع برسم التصاميم والمخططات",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 55,
                "question": "هل تستمتع بتصميم المساحات؟",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 2,
                        "مهندس ميكانيكا": 2
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            },
            {
                "id": 56,
                "question": "أنتبه للألوان والتفاصيل في التصميمات",
                "choices": {
                    "دائمًا": {
                        "مهندس معماري": 3,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 1
                    },
                    "أحيانًا": {
                        "مهندس معماري": 2,
                        "مهندس برمجيات": 1,
                        "مهندس ميكانيكا": 0
                    },
                    "نادرًا": {
                        "مهندس معماري": 1,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    },
                    "أبدًا": {
                        "مهندس معماري": 0,
                        "مهندس برمجيات": 0,
                        "مهندس ميكانيكا": 0
                    }
                }
            }
        ],
        "مهندس ميكانيكا": [
            {
                "id": 57,
                "question": "أجيد فهم كيفية عمل محركات السيارات وأنظمة الوقود",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 58,
                "question": "أستطيع إصلاح الطابعة بنفسي إذا تعطّلت",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 59,
                "question": "أستمتع بتفكيك الأجهزة لمعرفة كيفية عملها",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 60,
                "question": "أستمتع بالعمل اليدوي واستخدام الأدوات",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "لا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 61,
                "question": "هل تستمتع بصيانة المعدات؟",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 2
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 62,
                "question": "هل تهتم بالسيارات والمركبات؟",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 2
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 63,
                "question": "أستمتع بالانخراط الطويل مع الآلات والأشياء",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 0
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            },
            {
                "id": 64,
                "question": "هل تهتم بالطاقة والوقود؟",
                "choices": {
                    "دائمًا": {
                        "مهندس ميكانيكا": 3,
                        "مهندس برمجيات": 2,
                        "مهندس معماري": 1
                    },
                    "أحيانًا": {
                        "مهندس ميكانيكا": 2,
                        "مهندس برمجيات": 1,
                        "مهندس معماري": 1
                    },
                    "نادرًا": {
                        "مهندس ميكانيكا": 1,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    },
                    "أبدًا": {
                        "مهندس ميكانيكا": 0,
                        "مهندس برمجيات": 0,
                        "مهندس معماري": 0
                    }
                }
            }
        ]
    },
    "الفن": {
        "فنان تشكيلي": [
            {
                "id": 65,
                "question": "أعبر عن نفسي من خلال الرسم",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 0
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 66,
                "question": "أعبر عن أفكاري ومشاعري من خلال الكتابة",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 67,
                "question": "أنتبه للألوان والتفاصيل في التصميمات",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 68,
                "question": "أستمتع بـ زيارة المعارض الفنية والمتاحف التاريخية",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 69,
                "question": "أستمتع بالتعبير عن أفكاري بطرق إبداعية",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 70,
                "question": "أشعر بالملل عند القيام بالواجبات نفسها يوميًا وأميل أكثر للقيام بأعمال جديدة ومختلفة",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيli": 3,
                        "مصمم جرافيك": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 71,
                "question": "أستمتع بتجربة تقنيات فنية جديدة",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 72,
                "question": "أستمتع بالتعبير عن نفسي من خلال الفن",
                "choices": {
                    "دائمًا": {
                        "فنان تشكيلي": 3,
                        "مصمم جرافيك": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "فنان تشكيلي": 2,
                        "مصمم جرافيك": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "فنان تشكيلي": 1,
                        "مصمم جرافيك": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "فنان تشكيلي": 0,
                        "مصمم جرافيك": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ],
        "مصمم جرافيك": [
            {
                "id": 73,
                "question": "هل تستمتع بتصميم الشعارات؟",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 74,
                "question": "أنتبه للألوان والتفاصيل في التصميمات",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 75,
                "question": "أستمتع بـ المشاركة في دورات تصميم مثل فوتوشوب أو برامج مشابهة",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 76,
                "question": "أستمتع بإنشاء تصاميم للوسائط الرقمية",
                "choices": {
                    "نعم": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    },
                    "لا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 77,
                "question": "أستمتع بتحويل الأفكار إلى تصاميم مرئية",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    },
                    "لا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 78,
                "question": "سأكون سعيدًا بالعمل في بيئة إبداعية ومرنة",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 79,
                "question": "سأكون سعيدًا باستخدام الخيال والإبداع في مهامي",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 80,
                "question": "أستمتع بإنشاء هويات بصرية للعلامات التجارية",
                "choices": {
                    "دائمًا": {
                        "مصمم جرافيك": 3,
                        "فنان تشكيلي": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مصمم جرافيك": 2,
                        "فنان تشكيلي": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مصمم جرافيك": 1,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مصمم جرافيك": 0,
                        "فنان تشكيلي": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ]
    },
    "التقنية": {
        "مبرمج": [
            {
                "id": 81,
                "question": "أستمتع باستخدام برامج جديدة وأتساءل كيف بُنيت",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 82,
                "question": "هل تستمتع بتطوير التطبيقات؟",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 83,
                "question": "هل تهتم بجودة البرمجيات؟",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 84,
                "question": "أستمتع بكتابة الأكواد البرمجية",
                "choices": {
                    "نعم": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    },
                    "لا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 85,
                "question": "أستمتع بتصميم خوارزميات لحل المشكلات",
                "choices": {
                    "نعم": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    },
                    "لا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 86,
                "question": "أفضّل العمل في مجال يتوفر فيه العديد من الابتكارات التكنولوجية",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 87,
                "question": "أرغب في ممارسة مهنة تعتمد على التفكير المنهجي والعقلاني",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 88,
                "question": "سأكون سعيدًا باستخدام مهاراتي التقنية",
                "choices": {
                    "دائمًا": {
                        "مبرمج": 3,
                        "مختص أمن سيبراني": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مبرمج": 2,
                        "مختص أمن سيبراني": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مبرمج": 1,
                        "مختص أمن سيبراني": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مبرمج": 0,
                        "مختص أمن سيبراني": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ],
        "مختص أمن سيبراني": [
            {
                "id": 89,
                "question": "هل تستمتع بتحليل الثغرات الأمنية؟",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 90,
                "question": "هل تهتم بحماية البيانات؟",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 91,
                "question": "عندي فضول دائم لاكتشاف كيف تعمل الأشياء",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 92,
                "question": "أهتم بمعرفة الثغرات الأمنية في الأنظمة",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 1,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 93,
                "question": "هل تستمتع باختبار الاختراق؟",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 3,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 2,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 94,
                "question": "أنا مؤهل للعمل الذي يتطلب إجراءات حذرة وأخطاء قليلة",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 95,
                "question": "أفضل أداء المهام التفصيلية مع تعليمات واضحة",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            },
            {
                "id": 96,
                "question": "أفضّل العمل باستخدام تسلسل ثابت ومنهجي من الإجراءات",
                "choices": {
                    "دائمًا": {
                        "مختص أمن سيبراني": 3,
                        "مبرمج": 2,
                        "مهن اخرى": 1
                    },
                    "أحيانًا": {
                        "مختص أمن سيبراني": 2,
                        "مبرمج": 1,
                        "مهن اخرى": 0
                    },
                    "نادرًا": {
                        "مختص أمن سيبراني": 1,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    },
                    "أبدًا": {
                        "مختص أمن سيبراني": 0,
                        "مبرمج": 0,
                        "مهن اخرى": 0
                    }
                }
            }
        ]
    },
    "الأعمال والإدارة": {
        "محاسب": [
            {
                "id": 97,
                "question": "أحب الترتيب وتنظيم الأوراق بدقة",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 98,
                "question": "أستمتع بإدخال البيانات والعمل على الحاسوب",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 2,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 99,
                "question": "أولي اهتمامًا بالحسابات والضرائب",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 100,
                "question": "أسجل مصاريفي وأنتبه لما أُنفقه",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 2,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 101,
                "question": "أستمتع بتحليل البيانات المالية",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 102,
                "question": "هل تهتمام بالضرائب والزكاة؟",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 103,
                "question": "هل تهتم بالميزانيات والتخطيط؟",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 104,
                "question": "أستمتع بأداء المهام الحسابية والرياضية",
                "choices": {
                    "دائمًا": {
                        "محاسب": 3,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "أحيانًا": {
                        "محاسب": 2,
                        "مسوق": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "محاسب": 1,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "محاسب": 0,
                        "مسوق": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            }
        ],
        "مسوق": [
            {
                "id": 105,
                "question": "أجيد إقناع الآخرين بوجهة نظري",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 106,
                "question": "عندي مهارة في إقناع الناس بشراء المنتجات أو الخدمات",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 107,
                "question": "أستمتع بـ بيع المنتجات والتفاوض مع الزبائن",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 108,
                "question": "أستمتع بدراسة سلوك المستهلكين",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "لا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 109,
                "question": "أنا منجذب إلى مجال المبيعات والتسويق",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 110,
                "question": "أستمتع بالتفاوض مع الآخرين",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 111,
                "question": "أرغب في ممارسة مهنة تتطلب إقناع الآخرين",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 1
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            },
            {
                "id": 112,
                "question": "المهنة التي تناسبني تتطلب مني تكوين صداقات مع أشخاص جدد بسهولة",
                "choices": {
                    "دائمًا": {
                        "مسوق": 3,
                        "محاسب": 1,
                        "موظف موارد بشرية": 3
                    },
                    "أحيانًا": {
                        "مسوق": 2,
                        "محاسب": 1,
                        "موظف موارد بشرية": 2
                    },
                    "نادرًا": {
                        "مسوق": 1,
                        "محاسب": 0,
                        "موظف موارد بشرية": 1
                    },
                    "أبدًا": {
                        "مسوق": 0,
                        "محاسب": 0,
                        "موظف موارد بشرية": 0
                    }
                }
            }
        ],
        "موظف موارد بشرية": [
            {
                "id": 113,
                "question": "هل تستمتع بالتعامل مع الأشخاص؟",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 114,
                "question": "أحب أن أعمل في مكان أتعرف فيه على أشخاص جدد",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 115,
                "question": "أستمتع بـ التفاعل مع أشخاص من ثقافات ولغات مختلفة",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 116,
                "question": "أستمتع بمساعدة الآخرين على تطوير مهاراتهم",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 117,
                "question": "أفضل الجلوس مع مجموعة من الأشخاص فضلًا عن البقاء لوحدي",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 118,
                "question": "تتأقلم اجتماعيًا في أي مكان جديد تذهب إليه وتبادر بالتعرف على الأشخاص الموجودين",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 119,
                "question": "يلجأ إلي أصدقائي غالبًا لمساعدتهم في حل مشكلاتهم الحياتية",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            },
            {
                "id": 120,
                "question": "هل تهتم بقوانين العمل؟",
                "choices": {
                    "دائمًا": {
                        "موظف موارد بشرية": 3,
                        "محاسب": 1,
                        "مسوق": 2
                    },
                    "أحيانًا": {
                        "موظف موارد بشرية": 2,
                        "محاسب": 1,
                        "مسوق": 1
                    },
                    "نادرًا": {
                        "موظف موارد بشرية": 1,
                        "محاسب": 0,
                        "مسوق": 0
                    },
                    "أبدًا": {
                        "موظف موارد بشرية": 0,
                        "محاسب": 0,
                        "مسوق": 0
                    }
                }
            }
        ]
    }
};


        // التصنيفات المهنية
        const careerCategories = {
            "الصحة": ["طبيب", "ممرض", "جرّاح"],
            "التعليم": ["معلم", "مرشد طلابي"],
            "الهندسة": ["مهندس برمجيات", "مهندس معماري", "مهندس ميكانيكا"],
            "الفن": ["فنان تشكيلي", "مصمم جرافيك"],
            "التقنية": ["مبرمج", "مختص أمن سيبراني"],
            "الأعمال والإدارة": ["محاسب", "مسوق", "موظف موارد بشرية"]
        };

        // عدد النقاط في شريط التقدم
        let totalDots = 5; // للمرحلة الأولى

        // دالة لاستخراج جميع المهن من البيانات
        function extractAllCareers() {
            allCareers.clear();

            if (!allQuestionsData) return;

            for (const category in allQuestionsData) {
                for (const career in allQuestionsData[category]) {
                    allCareers.add(career);
                }
            }

            console.log("المهن المستخرجة:", Array.from(allCareers));
        }

        // دالة للحصول على النقاط بناءً على نوع هيكل الخيارات
        function getScoresForChoice(question, choiceValue) {
            if (Array.isArray(question.choices)) {
                const choiceObj = question.choices.find(c => c.text === choiceValue);
                return choiceObj ? choiceObj.scores : {};
            } else if (question.choices && typeof question.choices === 'object') {
                return question.choices[choiceValue] || {};
            }
            return {};
        }

        // دالة للحصول على قائمة الخيارات بناءً على نوع هيكل السؤال
        function getChoicesList(question) {
            if (Array.isArray(question.choices)) {
                return question.choices.map(c => c.text);
            } else if (question.choices && typeof question.choices === 'object') {
                return Object.keys(question.choices);
            }
            return [];
        }

        // دالة لاختيار أسئلة عشوائية من جميع المجالات
        function selectRandomGeneralQuestions(count) {
            const allQuestions = [];

            if (!allQuestionsData) return [];

            // جمع جميع الأسئلة من جميع المجالات والمهن
            for (const category in allQuestionsData) {
                for (const career in allQuestionsData[category]) {
                    allQuestionsData[category][career].forEach(question => {
                        allQuestions.push({
                            ...question,
                            category: category,
                            career: career
                        });
                    });
                }
            }

            // اختيار أسئلة عشوائية
            const shuffled = allQuestions.sort(() => 0.5 - Math.random());
            return shuffled.slice(0, Math.min(count, allQuestions.length));
        }

        // دالة لاختيار أسئلة متخصصة من مجال معين - التعديل الرئيسي هنا
        function selectSpecializedQuestions(category, count) {
            const specializedQuestions = [];

            if (!allQuestionsData || !allQuestionsData[category]) return [];

            // جمع جميع الأسئلة من المجال المحدد
            for (const career in allQuestionsData[category]) {
                allQuestionsData[category][career].forEach(question => {
                    specializedQuestions.push({
                        ...question,
                        category: category,
                        career: career
                    });
                });
            }

            // التأكد من وجود أسئلة كافية
            if (specializedQuestions.length === 0) {
                console.log(`لا توجد أسئلة في مجال ${category}`);
                return [];
            }

            // اختيار الأسئلة المطلوبة فقط
            const selectedCount = Math.min(count, specializedQuestions.length);
            const shuffled = specializedQuestions.sort(() => 0.5 - Math.random());
            const selected = shuffled.slice(0, selectedCount);

            console.log(`تم اختيار ${selected.length} سؤال من أصل ${specializedQuestions.length} سؤال في مجال ${category}`);
            return selected;
        }

        // دالة لتحديد التصنيف المهني
        function getCareerCategory(career) {
            for (const category in careerCategories) {
                if (careerCategories[category].includes(career)) {
                    return category;
                }
            }
            return "أخرى";
        }

        // إنشاء نقاط التقدم
        function createProgressDots(total) {
            progressDots.innerHTML = "";

            for (let i = 0; i < total; i++) {
                let dot = document.createElement("div");
                dot.classList.add("progress-dot");
                progressDots.appendChild(dot);
            }
        }

        // تحديث نقاط التقدم
        function updateProgressDots(index) {
            let dots = document.querySelectorAll(".progress-dot");
            dots.forEach((dot) => dot.classList.remove("active"));

            if (dots.length > 0) {
                let currentDot = index % dots.length;
                dots[currentDot].classList.add("active");
            }
        }

        // التعامل مع النقر على زر التالي
        nextBtn.addEventListener("click", () => {
            // حفظ إجابة السؤال الحالي
            const currentQuestion = selectedQuestions[questionCount];
            const selectedOption = document.querySelector(`input[name="question${currentQuestion.id}"]:checked`);

            if (selectedOption) {
                userAnswers[currentQuestion.id] = selectedOption.value;

                // حساب النقاط للإجابة الحالية
                const points = getScoresForChoice(currentQuestion, selectedOption.value);
                for (const career in points) {
                    if (careerScores.hasOwnProperty(career)) {
                        careerScores[career] += points[career];
                    } else {
                        careerScores[career] = points[career];
                    }
                }
            }

            if (questionCount < selectedQuestions.length - 1) {
                questionCount += 1;
                quizDisplay(questionCount);
                updateProgressDots(questionCount);
            } else {
                // انتهاء المرحلة الحالية
                if (currentStage === 1) {
                    // انتقل إلى المرحلة الثانية
                    startStageTwo();
                } else {
                    // انتهاء الاختبار بالكامل
                    displayContainer.classList.add("hide");
                    scoreContainer.classList.remove("hide");
                    calculateResults();
                }
            }
        });

        // عرض السؤال الحالي - التعديل الرئيسي هنا
        const quizDisplay = (questionCount) => {
            let quizCards = document.querySelectorAll(".container-mid");
            quizCards.forEach((card) => card.classList.add("hide"));

            if (quizCards[questionCount]) {
                quizCards[questionCount].classList.remove("hide");
            }

            // التعديل الرئيسي هنا - عرض رقم السؤال الحالي من إجمالي الأسئلة في المرحلة
            const currentQuestionNumber = questionCount + 1;
            const totalQuestionsInStage = selectedQuestions.length;
            countOfQuestion.innerHTML = `السؤال ${currentQuestionNumber} من ${totalQuestionsInStage}`;

            nextBtn.disabled = true;
            nextBtn.innerText = (questionCount === selectedQuestions.length - 1) ?
                (currentStage === 1 ? "اكتشف مجالي" : "إنهاء الاختبار") : "التالي";
        };

        // إنشاء واجهة الأسئلة
        function quizCreator() {
            // تهيئة كائن النقاط لجميع المهن
            careerScores = {};
            allCareers.forEach(career => {
                careerScores[career] = 0;
            });

            // تهيئة إجابات المستخدم
            userAnswers = {};

            quizContainer.innerHTML = "";

            for (let i = 0; i < selectedQuestions.length; i++) {
                let question = selectedQuestions[i];
                let div = document.createElement("div");
                div.classList.add("container-mid", "hide");

                let question_DIV = document.createElement("p");
                question_DIV.classList.add("question");
                question_DIV.innerHTML = question.question;
                div.appendChild(question_DIV);

                // الحصول على الخيارات من بيانات السؤال باستخدام الدالة المساعدة
                const choices = getChoicesList(question);

                choices.forEach((option) => {
                    let label = document.createElement("label");
                    label.classList.add("option-div");

                    let input = document.createElement("input");
                    input.type = "radio";
                    input.name = "question" + question.id;
                    input.value = option;
                    input.onclick = () => checker(label);

                    let span = document.createElement("span");
                    span.innerText = option;

                    label.appendChild(input);
                    label.appendChild(span);
                    div.appendChild(label);
                });

                quizContainer.appendChild(div);
            }
        }

        // التعامل مع اختيار الإجابة
        function checker(userOption) {
            let options = document.getElementsByClassName("container-mid")[questionCount].querySelectorAll(".option-div");
            options.forEach((el) => el.classList.remove("selected"));
            userOption.classList.add("selected");
            nextBtn.disabled = false;
        }

        // دالة لتحديد المجال الأعلى نقاطًا بعد المرحلة الأولى
        function detectTopCategory() {
            const categoryScores = {};

            // حساب نقاط كل تصنيف
            for (const category in careerCategories) {
                categoryScores[category] = 0;
                careerCategories[category].forEach(career => {
                    if (careerScores[career]) {
                        categoryScores[category] += careerScores[career];
                    }
                });
            }

            // تحديد التصنيف الأعلى
            let topCategory = null;
            let maxScore = 0;

            for (const category in categoryScores) {
                if (categoryScores[category] > maxScore) {
                    maxScore = categoryScores[category];
                    topCategory = category;
                }
            }

            console.log("نقاط التصنيفات:", categoryScores);
            console.log("التصنيف الأعلى:", topCategory);

            return topCategory;
        }

        // بدء المرحلة الثانية
        function startStageTwo() {
            detectedCategory = detectTopCategory();

            if (!detectedCategory) {
                alert("لم يتمكن النظام من تحديد مجالك المهني. يرجى المحاولة مرة أخرى.");
                return;
            }

            // عرض رسالة للمستخدم
            const messageDiv = document.createElement("div");
            messageDiv.className = "detection-message";
            messageDiv.innerHTML = `
    <h2>تم تحديد مجالك المهني!</h2>
    <p>بناءً على إجاباتك، يبدو أنك تميل لمجال: <strong>${detectedCategory}</strong></p>
    <p>الآن سنجري لك اختبارًا متخصصًا لتحديد المهنة الأنسب لك داخل هذا المجال</p>
    `;

            displayContainer.innerHTML = "";
            displayContainer.appendChild(messageDiv);

            const continueBtn = document.createElement("button");
            continueBtn.className = "start-button";
            continueBtn.textContent = "ابدأ الاختبار المتخصص";
            continueBtn.style.cssText = `
    background-color: #3498db;
    color: white;
    border: none;
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 1.5rem;
    `;

            continueBtn.onclick = () => {
                currentStage = 2;
                totalDots = 15;
                initializeStageTwo();
            };

            displayContainer.appendChild(continueBtn);
        }

        // تهيئة المرحلة الثانية - التعديل الرئيسي هنا
        function initializeStageTwo() {
            // اختيار 15 سؤال متخصص من المجال المحدد
            selectedQuestions = selectSpecializedQuestions(detectedCategory, 15);

            console.log("عدد الأسئلة المختارة للمرحلة الثانية:", selectedQuestions.length);

            if (selectedQuestions.length === 0) {
                alert("لا توجد أسئلة متاحة لهذا المجال. يرجى التحقق من البيانات.");
                return;
            }

            questionCount = 0;

            // إعادة بناء واجهة الاختبار
            displayContainer.innerHTML = `
    <div class="stage-indicator" id="stage-indicator">المرحلة الثانية: الاختبار المتخصص في مجال ${detectedCategory}</div>
    <p class="number-of-question"></p>
    <div id="container"></div>
    <div class="progress" id="progress-dots"></div>
    <button id="next-button" disabled>التالي</button>
    `;

            // إعادة تعيين العناصر
            quizContainer = document.getElementById("container");
            nextBtn = document.getElementById("next-button");
            countOfQuestion = document.querySelector(".number-of-question");
            progressDots = document.getElementById("progress-dots");
            stageIndicator = document.getElementById("stage-indicator");

            // إعادة إنشاء واجهة الأسئلة
            quizCreator();

            // عرض السؤال الأول مع الرقم الصحيح
            quizDisplay(0);

            createProgressDots(15);
            updateProgressDots(0);

            // إعادة ربط الأحداث
            nextBtn.addEventListener("click", function () {
                // حفظ إجابة السؤال الحالي
                const currentQuestion = selectedQuestions[questionCount];
                const selectedOption = document.querySelector(`input[name="question${currentQuestion.id}"]:checked`);

                if (selectedOption) {
                    userAnswers[currentQuestion.id] = selectedOption.value;

                    // حساب النقاط للإجابة الحالية
                    const points = getScoresForChoice(currentQuestion, selectedOption.value);
                    for (const career in points) {
                        if (careerScores.hasOwnProperty(career)) {
                            careerScores[career] += points[career];
                        } else {
                            careerScores[career] = points[career];
                        }
                    }
                }

                if (questionCount < selectedQuestions.length - 1) {
                    questionCount += 1;
                    quizDisplay(questionCount);
                    updateProgressDots(questionCount);
                } else {
                    // انتهاء الاختبار بالكامل
                    displayContainer.classList.add("hide");
                    scoreContainer.classList.remove("hide");
                    calculateResults();
                }
            });
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calculateResults() {
    // حساب النتائج وترتيبها
    const resultsArray = Object.entries(careerScores)
        .map(([career, score]) => ({ career, score, category: getCareerCategory(career) }))
        .sort((a, b) => b.score - a.score);

    // تحديد التصنيف الأعلى
    let topCategory = null;
    const categoryScores = {};
    for (const category in careerCategories) {
        categoryScores[category] = 0;
        careerCategories[category].forEach(career => {
            if (careerScores[career]) categoryScores[category] += careerScores[career];
        });
    }
    let maxScore = 0;
    for (const category in categoryScores) {
        if (categoryScores[category] > maxScore) {
            maxScore = categoryScores[category];
            topCategory = category;
        }
    }

    // تحديد أعلى 2 أو 3 نتائج حسب التصنيف
    let numberOfResults = 3;
    if (topCategory === "التعليم" || topCategory === "الفن" || topCategory === "التقنية") {
        numberOfResults = 2;
    }
    const topResults = resultsArray.slice(0, numberOfResults);

    // حساب النسبة المئوية لكل نتيجة
    const maxPossibleScore = 20 * 3; // 5 أسئلة أولية + 15 متخصصة

    // عرض النتائج للمستخدم
    let resultHTML = `<h3>المهن الأكثر توافقاً معك:</h3>`;
    topResults.forEach((result, index) => {
        const percentage = Math.round((result.score / maxPossibleScore) * 100);
        resultHTML += `
            <div class="career-badge">${index + 1}. ${result.career} (${percentage}%) - ${result.category}</div>
        `;
    });

    userScore.innerHTML = `أكملت ${selectedQuestions.length + 5} سؤالاً بنجاح!`;
    careerResult.innerHTML = resultHTML;

    // --- إرسال البيانات للـ PHP ---
    const formData = new FormData();
    formData.append('main_field', topCategory || '');
    formData.append('career_1', topResults[0]?.career || '');
    formData.append('career_1_percent', topResults[0] ? Math.round((topResults[0].score / maxPossibleScore) * 100) : 0);
    formData.append('career_2', topResults[1]?.career || '');
    formData.append('career_2_percent', topResults[1] ? Math.round((topResults[1].score / maxPossibleScore) * 100) : 0);
    formData.append('career_3', topResults[2]?.career || '');
    formData.append('career_3_percent', topResults[2] ? Math.round((topResults[2].score / maxPossibleScore) * 100) : 0);

    fetch('save_test_results.php', {
    method: 'POST',
    body: formData,
    credentials: 'include' // مهم جدًا عشان PHP تعرف user_id
    })
    .then(res => res.text())
    .then(data => console.log(data)); // شوف رسالة النجاح أو الخطأ


      }
//////////////////////////////////////////////////////////////////////////////////////

        // تهيئة الاختبار
        function initial() {
            extractAllCareers();

            // اختيار 5 أسئلة عشوائية من جميع المجالات
            selectedQuestions = selectRandomGeneralQuestions(5);

            if (selectedQuestions.length === 0) {
                alert("لا توجد أسئلة متاحة للاختبار. يرجى التحقق من البيانات.");
                return;
            }

            currentStage = 1;
            totalDots = 5;
            stageIndicator.textContent = "المرحلة الأولى: تحديد المجال المهني";

            quizCreator();
            questionCount = 0;
            quizDisplay(questionCount);
            createProgressDots(totalDots);
            updateProgressDots(questionCount);
        }

        // بدء الاختبار
        startButton.addEventListener("click", () => {
            startScreen.classList.add("hide");
            displayContainer.classList.remove("hide");
            initial();
        });

        // التهيئة الأولية عند تحميل الصفحة
        window.onload = () => {
            startScreen.classList.remove("hide");
            displayContainer.classList.add("hide");
        };

        // ==================== نهاية كود JavaScript ====================

    </script>
</body>

</html>