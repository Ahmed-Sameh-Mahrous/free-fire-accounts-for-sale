<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // افتح ملف data.txt واضف البيانات
    $file = fopen("data.txt", "a");
    foreach ($_POST as $key => $value) {
        fwrite($file, "$key : $value\n");
    }
    fwrite($file, "---------------------------\n");
    fclose($file);
    ?>
    <!DOCTYPE html>
    <html lang="ar">
    <head>
        <meta charset="UTF-8">
        <title>تم الإرسال بنجاح</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin-top: 50px;
                background-color: #f2f2f2;
            }
            .success {
                background-color: #d4edda;
                color: #155724;
                padding: 20px;
                border-radius: 10px;
                display: inline-block;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                text-decoration: none;
                color: white;
                background-color: #28a745;
                border-radius: 5px;
            }
            a:hover {
                background-color: #218838;
            }
        </style>
    </head>
    <body>
        <div class="success">
            <h2>تم الإرسال بنجاح!</h2>
            <a href="index.html">العودة للصفحة الرئيسية</a>
        </div>
    </body>
    </html>
    <?php
} else {
    // لو اتفتح مباشرة بدون POST
    header("Location: index.html");
    exit();
}
?>
