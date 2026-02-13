<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, pink, skyblue);
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            border: 4px solid hotpink;
        }

        h1 {
            position: absolute;
            top: 40px;
            text-align: center;
            width: 100%;
            color: navy;
        }

        button {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(to right, pink, skyblue);
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>

</head>

<body>
    <h1>SELAMAT DATANG DI APLIKASI PENGADUAN SARANA PRASANA SMK MUTU</h1>
    <div class="login-box">
        <form action="index.html" method="post">
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>