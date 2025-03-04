<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>خدمات كتابة السيرة الذاتية</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Oleo+Script:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preload" href="assets/pexels-sora-shimazaki-5673502.jpg" as="image">
    <link rel="shortcut icon" href="assets/صورة واتساب بتاريخ 1446-06-16 في 20.13.52_116b222c_preview_rev_1.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* الخطوط والألوان */
        html,
        body {
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        img {
            user-select: none;
        }

        body {
            font-family: "Cairo", serif;
            background-color: rgb(0, 119, 255);
            color: white;
            line-height: 1.6;
        }

        h1,
        h2,
        h3 {
            color: #ffd700;
        }

        .navbar {
            background-color: rgb(0, 119, 255);
            /* لون الهيدر */

            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            /* ظل للهيدر */
            position: fixed;
            z-index: 100;
            width: 100%;
            left: 0;
            right: 0;
            top: 0;
        }

        .navbar .container {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center;

            /* لضبط المحاذاة عموديًا */
        }

        .navbar-brand {
            margin-right: auto;
            /* يدفع اللوجو إلى أقصى اليمين */
        }

        .navbar-collapse {
            flex-grow: 0;
            /* يمنع القائمة من التمدد */
        }

        /* تصميم اللوجو */
        .navbar-brand img {
            width: 80px;
            /* حجم اللوجو */
            height: auto;
        }

        /* تصميم عناصر الناف */
        .navbar-nav .nav-link {
            color: #fff !important;
            /* لون الخط */
            transition: color 0.3s ease;
            /* تأثير التغيير */
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(44, 177, 159) !important;
            /* تغيير اللون عند التحريك */
        }

        /* ترتيب العناصر */
        .navbar-brand {
            margin-right: 0;
            /* اللوجو إلى أقصى اليمين */
        }

        .navbar-collapse {
            justify-content: flex-start;
            /* دفع القائمة لأقصى الشمال */
        }

        /* زر التوجل */
        .navbar-toggler {
            border: none;
            /* لون حدود الزر */
            outline: none;
            order: -1;
            /* تغيير ترتيب زر التوجل */
        }

        .navbar-toggler:focus {
            border: none;
            outline: none;
        }

        .navbar-toggler-icon {
            /* color: #ffd700; */
            font-size: 24px;
        }

        /* ترتيب الهاتف */
        @media (max-width: 992px) {
            .navbar-brand {
                margin-right: auto;
                /* اللوجو في أقصى اليمين */
            }

            .navbar-toggler {
                margin-left: auto;
                /* زر التوجل في أقصى اليسار */
            }
        }

        .hero-section {
            background-image: url("assets/pexels-sora-shimazaki-5673502.jpg");
            /* استبدل بمسار الصورة */
            background-size: cover;
            /* لجعل الصورة تغطي القسم بالكامل */
            background-position: center;
            /* توسيط الصورة */
            background-repeat: no-repeat;
            height: 100vh;
            /* القسم بطول الشاشة بالكامل */
            position: relative;
            color: white;
            /* لون النص */

        }

        /* إضافة طبقة شفافة */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 38, 71, 0.6);
            /* لون غامق شفاف لتحسين وضوح النص */
            z-index: 1;
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
            /* النص فوق الطبقة الشفافة */
        }

        /* تحسين النص */
        .hero-title {
            font-size: 3rem;
            /* حجم العنوان */
            font-weight: bold;
            margin-bottom: 10px;
            color: rgb(0, 119, 255);
            /* اللون الذهبي */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            /* ظل للنص */
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: rgba(0, 119, 255, 0.514);
        }

        .order {
            display: inline-block;
            padding: 12px 24px;
            background-color: #003D73;
            /* الأزرق الملكي */
            color: #FFFFFF;
            /* الأبيض النقي */
            text-decoration: none;
            border-radius: 25px;
            /* حواف دائرية */
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            height: 60px;
            width: 240px;
        }

        .order:hover {
            background-color: #005A9C;
            /* لون أفتح عند التمرير */
            transform: scale(1.05);
            /* تكبير بسيط */
        }

        /* about */
        #about {
            background-color: #f1f8ff;
            padding: 40px 0;
            border-radius: 15px;
        }

        .section-header h2 {
            font-size: 3rem;
            color: #0a2647;
        }

        .section-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        /* about */
        /* عام: تنسيقات عامة */
        #about {
            background-color: #f9f9f9;
            /* لون خلفية فاتح للقسم */
            padding: 50px 0;
            /* تباعد علوي وسفلي */
            color: #333;
            /* لون النص */
            font-family: "Tajawal", Arial, sans-serif;
            /* اختيار خط عربي حديث */
        }

        .section-header h2 {
            font-weight: 700;
            color: #00796b;
            /* لون مميز للعناوين */
        }

        .section-header p {
            color: #555;
            /* لون نص العنوان الفرعي */
        }

        /* توزيع الصورة والنص */
        #about .row {
            display: flex;
            align-items: center;
            /* توسيط عمودي */
            justify-content: space-between;
        }

        #about img {
            max-width: 100%;
            /* تأكد من ضبط حجم الصورة */
            height: auto;
            border-radius: 15px;
            /* حواف دائرية خفيفة */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* ظل خفيف */
        }

        #about h4 {
            font-size: 1.8rem;
            color: #00796b;
            /* لون رئيسي للنص */
            margin-bottom: 15px;
        }

        #about p {
            font-size: 1rem;
            line-height: 1.8;
            color: #444;
            /* لون أغمق قليلاً للقراءة */
        }

        #about ul {
            list-style: none;
            /* إزالة العلامات */
            padding: 0;
        }

        #about ul li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
            color: #555;
        }

        #about ul li::before {
            content: "✓";
            /* رمز تحقق */
            position: absolute;
            right: -15px;
            color: #00796b;
            /* لون أيقونة الرمز */
            font-weight: bold;
        }

        @media(max-width:767px) {
            .about_lang {
                text-align: center;
            }
        }

        /* الخدمات */
        /* تصميم القسم الكامل */
        .full-width-section {
            background-color: #f9f9f9;
            padding: 60px 0;
            /* تباعد علوي وسفلي */
            margin-top: 30px;
            /* تباعد عن القسم السابق */
            width: 100%;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: #00796b;
            margin-bottom: 40px;
            font-weight: 700;
        }

        /* تصميم البطاقات */
        .service-card {
            background-color: #4A4A4A;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card .icon i {
            color: #00796b;
            /* لون الأيقونات */
        }

        .service-card h3 {
            font-size: 1.6rem;
            color: white;
            margin-bottom: 10px;
        }

        .service-card p {
            color: white;
            font-size: 1rem;
            line-height: 1.6;
        }

        #swiper1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            /* عرض السوايبر ليشغل الشاشة بالكامل */
            height: 500px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            /* إخفاء أي عناصر تتجاوز حدود السوايبر */
        }

        #swiper1 img {
            width: 100%;
            /* جعل الصور تملأ عرض السوايبر بالكامل */
            height: 100%;
            /* جعل الصور تملأ ارتفاع السوايبر بالكامل */
            object-fit: cover;
            /* الحفاظ على تناسب الصورة داخل المساحة */
            border-radius: 8px;
        }

        /* استجابة للأجهزة الصغيرة */
        @media(max-width: 767px) {
            #swiper1 {
                height: 300px;
                /* تقليل ارتفاع السوايبر على الشاشات الصغيرة */
            }

        }

        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap');

        a.tele {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 260px;
            height: 60px;
            background-color: #EFC93A;
            /* الذهبي الفاخر */
            color: #1A1A1A;
            /* الأسود الراقي */
            text-decoration: none;
            border-radius: 30px;
            /* حواف مدورة */
            font-family: 'Tajawal', sans-serif;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        a.tele:hover {
            transform: translateY(-3px) scale(1.05);
            /* Bounce Effect */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            /* ظل خفيف */
        }

        a.tele i {
            margin-right: 8px;
            /* مسافة بين النص والأيقونة */
            color: #EFC93A;
            /* لون النجمة */
            font-size: 22px;
            /* حجم النجمة */
        }

        /* additional services */
        /* تنسيق الخدمات */
        #additional-services {
            background-color: #0e1f2d;
            /* خلفية داكنة */
            color: #fff;
            /* النص باللون الأبيض */
        }

        #additional-services h4 {
            color: #ffcc66;
            /* لون العناوين */
            font-weight: bold;
        }

        #additional-services ul {
            padding: 0;
            list-style-type: none;
        }


        #additional-services ul li {
            margin-bottom: 10px;
            font-size: 1rem;
            position: relative;
            padding-left: 20px;
            display: flex;
            justify-content: flex-start;
            /* توسيط الأيقونة على اليمين */
            align-items: center;
        }

        @media (max-width: 767px) {
            #additional-services ul li {
                margin-right: 30px;
            }
        }

        .service-item {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 20px;
        }

        .service-item .service-icon {
            width: 40px;
            /* حجم الصورة */
            height: 40px;
            /* حجم الصورة */
            margin-right: 15px;
            /* المسافة بين الصورة والنص */
            border-radius: 50%;
            /* إذا أردت جعل الصور دائرية */
            object-fit: cover;
            /* الحفاظ على نسبة العرض والارتفاع للصور */
        }

        .service-item ul {
            margin: 0;
        }

        /* تنسيق الأيقونات كصور */
        .icon-right {
            width: 16px;
            /* حجم الصورة */
            height: 16px;
            /* حجم الصورة */
            margin-left: 10px;
            /* المسافة بين النص والصورة */
            object-fit: contain;
            /* الحفاظ على شكل الصورة */
        }


        /* why us */
        #why-us {
            background-color: #0e1f2d;
            color: #fff;
            margin-top: 50px;
            /* مسافة بين السكشن السابق */
            padding-top: 30px;
            /* مسافة داخلية علوية */
            padding-bottom: 50px;
            /* مسافة داخلية سفلية */
        }

        #why-us h4 {
            color: #ffcc66;
            font-weight: bold;
        }

        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card i {
            margin-bottom: 15px;
        }

        /* our client */


        #our-clients {
            background: linear-gradient(to right, #2a3d56, #1f2b3e);
            /* خلفية متدرجة */
            color: #fff;
            padding: 60px 0;
            margin-bottom: 20px;
            width: 100%;
        }

        #our-clients .section-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffcc66;
            margin-bottom: 20px;
        }

        #our-clients .section-header p {
            font-size: 1.25rem;
            margin-bottom: 40px;
        }

        /* our works */
        #our-works {
            background: linear-gradient(to right, #2a3d56, #1f2b3e);
            /* خلفية متدرجة */
            color: #fff;
            padding: 60px 0;
            width: 100%;
        }

        #our-works .section-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffcc66;
            margin-bottom: 20px;
        }

        #our-works .section-header p {
            font-size: 1.25rem;
            margin-bottom: 40px;
        }

        .swiper-container {
            width: 100%;
            /* العرض 100% */
            height: 400px;
            /* ارتفاع السكشن */
            overflow: hidden;
            /* إخفاء الصور الزائدة عن حدود السكشن */
        }

        .swiper-wrapper {
            display: flex;
            /* عرض الصور في صف واحد */
        }

        .swiper-slide {
            width: 100%;
            /* كل صورة تغطي 100% من مساحة السكشن */
            height: auto;
            display: flex;
            justify-content: center;
        }

        .swiper-slide img {
            width: 100%;
            /* ملائمة الصورة داخل الـ swiper */
            border-radius: 10px;
            object-fit: cover;
            /* الحفاظ على النسب المناسبة للصورة */
        }




        footer {
            background-color: #0a1c32;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #ffd700;
            text-decoration: none;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 10px;
            right: 20px;
            background-color: #34495e;
            /* لون الخلفية */
            color: #fff;
            /* لون السهم */
            border-radius: 50%;
            /* لجعل الدائرة مستديرة */
            width: 40px;
            height: 40px;
            display: flex;
            /* استخدام Flexbox */
            align-items: center !important;
            /* محاذاة رأسية */
            justify-content: center !important;
            /* محاذاة أفقية */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* ظل خفيف */
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-to-top:hover {
            background-color: #aca76d;
            /* تغيير اللون عند التمرير */
            transform: scale(1.1);
            /* تكبير بسيط */
        }

        .scroll-to-top i {
            font-size: 20px;
            /* حجم السهم */
            position: absolute;
            left: 23%;
            top: 15%;
        }

        @media (max-width: 767px) {
            .scroll-to-top {
                width: 30px;
                height: 30px;
            }

            .scroll-to-top i {
                font-size: 15px;
            }
        }

        /* whats app button */
        .fixed-container {
            position: fixed;
            bottom: 50px;
            right: 20px;
            display: flex;
            align-items: center;
            z-index: 1000;
        }

        .whatsapp-button {
            width: 50px;
            height: 50px;
            background-color: #25D366;
            /* لون أخضر واتساب */
            color: #FFFFFF;
            /* الأبيض المريح */
            border-radius: 50%;
            /* زر دائري */
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            /* تكبير بسيط عند التمرير */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
            /* ظل أكبر */
        }

        .fixed-container span {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            margin-right: 12px;
            /* مسافة بين النص والزر */
            color: #333;
            background-color: #fff;
            padding: 6px 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            white-space: nowrap;
            /* منع النص من الالتفاف */
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-4px);
            }

            75% {
                transform: translateX(4px);
            }
        }

        .shake {
            animation: shake 0.5s ease infinite;
            animation-iteration-count: 1;
        }

        /* إعادة تشغيل الهزة كل 10 ثوانٍ */
        @keyframes shakeInterval {
            0% {
                animation: shake 0.5s ease 1;
            }

            100% {
                animation: none;
            }
        }



        /* button */
        .cta-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .cta-button {
            width: 280px;
            height: 60px;
            background-color: #F15A24;
            /* لون برتقالي */
            color: #FFFFFF;
            /* نص أبيض */
            font-size: 18px;
            font-family: 'Tajawal', sans-serif;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            /* مسافة بين النص والأيقونة */
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button i {
            font-size: 20px;
            /* حجم الأيقونة */
        }

        .cta-button:hover {
            background-color: #FF7043;
            /* درجة أفتح من البرتقالي */
        }

        .thank-you-message {
            display: none;
            text-align: center;
            color: #333;
            font-size: 16px;
            margin-top: 10px;
        }

        /* تفاعل النقر */
        .cta-button:active {
            transform: scale(0.95);
            /* تأثير الضغط */
        }

        .about-section {
            background-color: rgb(0, 119, 255);
            /* اللون الأساسي */
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .about-section {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .about-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        .about-text {
            flex: 1;
            text-align: start;
        }

        .about-text h2 {
            color: rgb(0, 119, 255);
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
        }

        .about-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .about-image img {
            width: 100%;
            max-width: 450px;
            object-fit: cover;
            background: none;
            border: none;
            box-shadow: none;
        }

        /* ✅ تغيير ترتيب العناصر في الشاشات الصغيرة */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
                /* الصورة تحت والنص فوق */
                text-align: center;
            }

            .about-text {
                text-align: center;
            }
        }

        .services-section {
            padding: 60px 20px;
            background-color: #f1f1f1;
            /* لون رمادي فاتح */
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            color: rgb(0, 119, 255);
            margin-bottom: 40px;
            font-weight: bold;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            justify-content: center;
        }

        .service-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .service-box span {
            font-size: 2rem;
        }

        .service-box:hover {
            background-color: rgb(0, 119, 255);
            color: white;
            transform: translateY(-5px);
        }

        .why-us-section {
            padding: 60px 20px;
            background-color: #f2f2f2 !important;
            /* خلفية رمادية فاتحة */
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            color: rgb(0, 119, 255);
            margin-bottom: 40px;
            font-weight: bold;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .why-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
            font-size: 1rem;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .why-box i {
            font-size: 2.5rem;
            color: rgb(0, 119, 255);
        }

        .why-box:hover {
            background-color: rgb(0, 119, 255);
            color: white;
            transform: translateY(-5px);
        }

        .why-box:hover i {
            color: white;
        }
    </style>
</head>

<body>
    <div id="butter">
        <!-- الهيدر -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- زر التوجل (للهاتف) -->
                <button style="border: none; font-size: 1.5rem;" class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="تبديل التنقل">
                    <!-- <span class="navbar-toggler-icon"> -->
                    <i class="ri-menu-3-line"></i>
                    <!-- أيقونة ريمكس -->
                    </span>
                </button>
                <!-- اللوجو في أقصى اليمين -->
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 1.8rem; font-weight: bold; text-decoration: none;">
                    MARKO
                </a>
                
                <!-- قائمة التنقل -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">خدماتنا</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#additional-services">خدمات إضافية</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#why-us">لماذا نحن</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#our-clients">عملاؤنا </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#our-works">اعمالنا </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
            </div>


        </nav>
        <header class="hero-section d-flex justify-content-center align-items-center text-center">
            <div class="container hero__text" data-aos="fade-up">
                <h1 class="hero-title"> ماركو</h1>
                <p class="hero-subtitle">
                    تطوير أعمالك يبدأ بخطــــوة
                </p>
                <p>خطوتك الأولى نحو النجاح تبدأ من هنا</p>
                <!-- <a href="https://wa.me/+966539910897" target="_blank" class="order">اطلب الآن!
                </a> -->
            </div>
        </header>
        <!-- عنا -->
        <!-- <section id="about" class="container py-5">
            <div class="section-header text-center mb-5 about_texto">
                <h2 class="display-4 ">من نحن</h2>
                <p class="lead">
                    مؤسسة سفراء المستقبل هو أكثر من مجرد اسم. هو بوابة تحوّل طموحاتك إلى
                    واقع، وخبراتك إلى قصص ملهمة تُروى للعالم.
                </p>
            </div>

            <div class="row align-items-center">
              
                <div class="col-md-6 text-center mb-4">
                    <img loading="lazy" src="assets/صورة واتساب بتاريخ 1446-06-16 في 22.01.34_f0d0563b.jpg"
                        alt="سيرة ذاتية" class="img-fluid rounded-circle about_img" style="max-width: 300px" />
                </div>

              
                <div class="col-md-6 about_lang">
                    <p> نحن أكثر من مجرد محطة لتطوير سيرتك
                        الذاتية، نحن المنصة الشاملة التي تفتح لك أبواب النجاح. بخدمات مُبتكرة
                        تُغطي جميع جوانب مسارك المهني، نُعيد تشكيل صورتك الشخصية والمهنية
                        لتترك أثرًا لا يُنسى، ولتصبح الخيار الأول في عالم مليء بالتنافس</p>
                    <p>لأننا المكان الوحيد الذي يجمع كل ما تحتاجه لتطوير نفسك مهنيًا وشخصيًا في مكانٍ واحد. من التحليل
                        العميق لشبكة علاقاتك، إلى إعدادك للفرص الكبرى بثقةٍ وإبداع، خدماتنا هي المفتاح لتُصبح النسخة
                        الأفضل من نفسك، وتجعل المستقبل يطرق بابك</p>
                    <p>
                        نقدم لك خدمات كتابة وتصميم سير ذاتية احترافية بنظام ATS وبأعلى
                        معايير الجودة لضمان وصولك إلى أهدافك. نوفر لك سعرًا مرنًا ونتائج
                        تفوق التوقعات.
                    </p>
                    <ul>
                        <li>تصميمات حديثة وعصرية.</li>
                        <li>ملفات LinkedIn جاهزة للتألق.</li>
                        <li>رسائل احترافية لبداية ناجحة.</li>
                    </ul>
                </div>
            </div>
        </section> -->

        <section id="about" class="about-section">
            <div class="container">
                <div class="about-content">
                    <div class="about-text" data-aos="fade-left">
                        <h2 class="section-title">من نحن</h2>
                        <p>
                            نحن في <strong>ماركو</strong> نقدم حلولًا متكاملة في مجالي التسويق والتجارة الإلكترونية،
                            لمساعدة الشركات والأفراد على تحقيق نجاحهم الرقمي.
                            نسعى لتقديم خدمات عالية الجودة من خلال استراتيجيات مبتكرة وتقنيات حديثة.
                        </p>
                        <p>
                            خبرتنا في السوق تضمن لك تحقيق نتائج فعالة في إدارة الحملات الإعلانية،
                            بناء المتاجر الإلكترونية، وتقديم استشارات متخصصة في اختيار المنتجات والموردين.
                        </p>
                    </div>
                    <div class="about-image"  data-aos="fade-right">
                        <img src="assets/22.svg" alt="من نحن">
                    </div>
                </div>
            </div>
        </section>



        <!-- services  -->
        <section id="services" class="services-section">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">خدماتنا</h2>
                <div class="services-grid" data-aos="fade-down">
                    <div class="service-box"><span>📢</span> الحملات الإعلانية</div>
                    <div class="service-box"><span>🎬</span> تصميم الفيديوهات الإعلانية</div>
                    <div class="service-box"><span>🖼️</span> تصميم البوسترات</div>
                    <div class="service-box"><span>📱</span> إدارة حسابات السوشيال ميديا</div>
                    <div class="service-box"><span>🛍️</span> إنشاء متجر إلكتروني</div>
                    <div class="service-box"><span>📊</span> اختيار المنتجات الرائجة</div>
                    <div class="service-box"><span>🔗</span> توفير موردين للمنتجات</div>
                </div>
            </div>
        </section>



        <!-- why us -->
        <section id="why-us" class="why-us-section">
            <div class="container">
                <h2 class="section-title" style="padding-bottom: 30px;"  data-aos="fade-up-right">لماذا نحن؟</h2>
                <div class="why-us-grid"  data-aos="flip-left">
                    <div class="why-box">
                        <i class="ri-lightbulb-line"></i>
                        <h3>خبرة وكفاءة</h3>
                        <p>نمتلك فريقاً محترفاً بخبرة طويلة في التسويق والتجارة الإلكترونية.</p>
                    </div>
                    <div class="why-box">
                        <i class="ri-flashlight-line"></i>
                        <h3>حلول مبتكرة</h3>
                        <p>نقدم استراتيجيات حديثة وتقنيات متطورة لضمان أفضل النتائج.</p>
                    </div>
                    <div class="why-box">
                        <i class="ri-bar-chart-box-line"></i> <!-- أيقونة جديدة -->
                        <h3>نتائج مضمونة</h3>
                        <p>نعمل على تحقيق أهداف عملك بأعلى كفاءة ودقة.</p>
                    </div>
                    <div class="why-box">
                        <i class="ri-hand-heart-line"></i>
                        <h3>دعم مستمر</h3>
                        <p>نوفر استشارات ومتابعة دورية لضمان استمرارية النجاح.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- سكشن الاتصال بنا -->
        <!-- سكشن الاتصال -->
        <section id="contact" data-aos="zoom-in-left" class="contact-section">
            @if(session('success'))

            {{session('success')}}
            @endif
            <div class="container">
                <div class="contact-content">
                    <h2 class="section-title">تواصل معنا</h2>
                    <p class="contact-text">
                        نحن هنا لمساعدتك! لا تتردد في التواصل معنا لأي استفسار أو طلب. سنكون سعداء بالرد عليك في أقرب
                        وقت.
                    </p>
                    <form class="contact-form" action="{{route('contact')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="الاسم الكامل" required>
                        <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                        <input type="tel" name="phone" placeholder="رقم الهاتف" required>
                        <textarea placeholder="اكتب رسالتك هنا..." rows="5" required name="message"></textarea>
                        <button type="submit">إرسال</button>
                    </form>
                </div>
            </div>
        </section>

        <style>
            /* تنسيق السكشن */
            .contact-section {
                background: #f9f9f9;
                padding: 60px 20px;
                text-align: center;
            }

            /* تنسيق العنوان */
            .section-title {
                font-size: 2rem;
                color: #0077ff;
                margin-bottom: 10px;
            }

            /* تنسيق النص التوضيحي */
            .contact-text {
                font-size: 1.1rem;
                color: #666;
                margin-bottom: 30px;
            }

            /* ستايل الفورم */
            .contact-form {
                max-width: 500px;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 15px;
                margin: auto;
                padding: 20px;
                background: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .contact-form input,
            .contact-form textarea {
                width: 100%;
                padding: 14px;
                border: 1px solid #ddd;
                border-radius: 8px;
                /* حدود ناعمة */
                font-size: 1rem;
                transition: 0.3s;
                outline: none;
            }

            .contact-form input:focus,
            .contact-form textarea:focus {
                border-color: #0077ff;
                box-shadow: 0 0 5px rgba(0, 119, 255, 0.3);
            }

            .contact-form textarea {
                resize: none;
            }

            .contact-form button {
                background: #0077ff;
                color: white;
                padding: 14px;
                font-size: 1rem;
                border: none;
                cursor: pointer;
                border-radius: 8px;
                transition: 0.3s;
                font-weight: bold;
            }

            .contact-form button:hover {
                background: #005bb5;
            }

            /* استجابة للشاشات الصغيرة */
            @media (max-width: 768px) {
                .contact-section {
                    padding: 40px 15px;
                }

                .contact-form {
                    padding: 15px;
                }
            }
        </style>

    </div>
    <footer class="footer">
        <p>
            All Rights Reserved &copy; 2025 By 
            <a href="https://wa.me/+201556477029" target="_blank" class="footer-link">Eng: Saad Harera</a> 
            
        </p>
    </footer>
    
    <style>
    /* تنسيق الفوتر */
    .footer {
        background: #f1f1f1;
        text-align: center;
        padding: 15px 10px;
        font-size: 1rem;
        color: #333;
    }
    
    /* تنسيق الرابط */
    .footer-link {
        color: #0077ff; /* لون الموقع المميز */
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }
    
    .footer-link:hover {
        text-decoration: underline;
        color: #005bb5; /* لون أغمق عند التحويل */
    }
    </style>
    
    <div class="fixed-container">
        <a href="https://wa.me/+966539910897" target="_blank" class="whatsapp-button">
            <i class="ri-whatsapp-line"></i> <!-- أيقونة واتساب -->
        </a>
        <span>إضغط لإستشارتك المجانية</span>
    </div>
    <!--~~~~~~~~~~~~~~~ Scroll Up ~~~~~~~~~~~~~~~-->
    <div class="scroll-to-top kolo" style="display: none">
        <i class="ri-arrow-up-line"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="js/swiper.js" defer></script>
    <script src="js/scrollreveal.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const scrollbtn = document.querySelector(".kolo");
        window.addEventListener("scroll", () => {
            if (scrollY >= 2500) {
                scrollbtn.style.display = "block";
            } else {
                scrollbtn.style.display = "none";
            }
        });

        scrollbtn.onclick = function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        };

        AOS.init();
    </script>
</body>

</html>