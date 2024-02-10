<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تأكيد الحجز</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; text-align: right;">

    <div style="background-color: #fff; max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <img src="{{ asset('img/website_logo.png') }}" alt="لوجو الموقع" style="display: block; margin: 0 auto; max-width: 200px;">

        <h2 style="color: #333; font-weight: bold; margin-top: 30px;">مرحبًا {{ $name }},</h2>
    
        <p style="font-size: 18px; color: #555;">تم تأكيد الحجز الخاص بك بنجاح. إليك التفاصيل:</p>
        
        <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p style="font-size: 16px; color: #555; margin: 0;"><strong>رقم الحجز:</strong> {{ $code }}</p>
        </div>

        <p style="font-size: 16px; color: #555; margin-top: 20px;">شكرًا لاختيارك Furina Store!</p>

        <p style="font-size: 16px; color: #555; margin-top: 20px;">مع أطيب التحيات،</p>
        <p style="font-size: 16px; color: #555;">فريق Furina Store</p>
    
    </div>

</body>
</html>
