<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صفحة دخول أنيقة</title>
    <style>
        /* reset بسيط */
        *{margin:0;padding:0;box-sizing:border-box;font-family:"Cairo",sans-serif}

        /* خلفية صفحة كاملة بصورة وتدرّج نصف‑شفاف */
        body{
            min-height:100vh;
            background:
                linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.55)),
                url("https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1650&q=80");
            background-size:cover;
            background-position:center;
            display:flex;align-items:center;justify-content:center;
            color:#fff;
        }

        /* حاوية نموذج الدخول */
        .login-card{
            width:360px;
            padding:2.5rem 2rem 3rem;
            border-radius:16px;
            background:rgba(255,255,255,0.08);
            box-shadow:0 8px 24px rgba(0,0,0,.25);
            backdrop-filter:blur(6px);
            -webkit-backdrop-filter:blur(6px);
            animation:fade-in .9s ease;
        }

        h1{font-size:1.8rem;margin-bottom:1.6rem;text-align:center}

        label{display:block;font-size:.95rem;margin:.75rem 0 .35rem}

        input{
            width:100%;padding:.7rem .9rem;border:none;border-radius:12px;
            background:rgba(255,255,255,.15);color:#fff;
            outline:none;font-size:.9rem;transition:.25s;
        }

        input:focus{background:rgba(255,255,255,.25)}

        button{
            margin-top:1.8rem;width:100%;padding:.8rem 0;
            border:none;border-radius:14px;
            background:#5d8cff;cursor:pointer;font-size:1rem;font-weight:600;
            color:#fff;box-shadow:0 4px 14px rgba(0,0,0,.25);
            transition:.3s;
        }
        button:hover{transform:translateY(-3px);box-shadow:0 8px 20px rgba(0,0,0,.35)}

        .links{margin-top:1rem;font-size:.85rem;text-align:center}
        .links a{color:#a0c5ff;text-decoration:none}
        .links a:hover{text-decoration:underline}

        /* دخول سلسي */
        @keyframes fade-in{from{opacity:0;transform:translateY(25px)}to{opacity:1;transform:none}}
    </style>
</head>
<body>

<div class="login-card">
    <h1>تسجيل الدخول</h1>
    <form action="login_process.php" method="POST">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" required>

        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">دخول</button>
    </form>

    <div class="links">
        <a href="register.php">إنشاء حساب</a> ‧
        <a href="forget.php">نسيت كلمة المرور؟</a>
    </div>
</div>

</body>
</html>
