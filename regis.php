<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan Cafe & BarberShop Linggau</title>
    <link rel="icon" href="img/12.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url(img/3.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="regis">
            <img src="img/12.png" alt="" style="width: 120px;">

            <div class="input-group">
                <input type="nama" name="nama" placeholder="Nama" required>
            </div>

            <div class="input-group">
                <input type="username" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <input type="password2" name="password2" placeholder="Confirm Password" required>
            </div>
        </form>
    </div>

</body>

</html>