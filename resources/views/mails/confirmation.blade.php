<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تأكيد الحجز</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            max-width: 1280px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            font-weight: bold;
            margin-top: 30px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        .details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="{{ asset('img/website_logo.png') }}" alt="لوجو الموقع" class="logo">
    <h2>مرحبًا {{ $name }},</h2>
    <p>تم تأكيد الحجز الخاص بك بنجاح. إليك التفاصيل:</p>
    <div class="details">
        <p><strong>رقم الحجز:</strong> {{ $code }}</p>
    </div>
    <p>شكرًا لاختيارك Furina Store!</p>
    <p>مع أطيب التحيات،</p>
    <p>فريق Furina Store</p>
</div>

</body>
</html>
