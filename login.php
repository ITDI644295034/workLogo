<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            background-color: #F5F7FB;
            font-family: Chakra Petch;
        }

        form.container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .com {
            display: flex;
            flex-direction: column;
            width: 437px;
            background-color: red;
        }
    </style>
    <form class="container" action="logo.php" method="POST" enctype="multipart/form-data">
        <div class="com">
            <h1>การเข้าสู่ระบบ</h1>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">เข้าสู่ระบบ</button>
        </div>
    </form>
</body>

</html>