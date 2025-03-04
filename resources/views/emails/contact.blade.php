<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة من نموذج الاتصال</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            direction: rtl;
            text-align: right;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: #0077ff;
            color: #ffffff;
            padding: 15px;
            font-size: 18px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
            font-size: 16px;
            color: #333;
            line-height: 1.8;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
        .contact-info {
            background: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .btn {
            display: inline-block;
            background: #0077ff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">📩 لديك رسالة جديدة من موقعك</div>
        <div class="content">
            <p>مرحبًا،</p>
            <p>لقد تلقيت رسالة جديدة من نموذج الاتصال على موقعك. إليك التفاصيل:</p>
            <div class="contact-info">
                <p><strong>👤 الاسم:</strong> {{ $data['name'] }}</p>
                <p><strong>📧 البريد الإلكتروني:</strong> {{ $data['email'] }}</p>
                <p><strong>📞 رقم الهاتف:</strong>{{ $data['phone'] }}</p>
                <p><strong>📜 الرسالة:</strong></p>
                <p>{{ $data['message'] }}</p>
            </div>
            <a href="mailto:{{ $data['email'] }}" class="btn">📩 الرد على المرسل</a>
        </div>
    
    </div>
</body>
</html>
