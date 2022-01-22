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

        /* css login.php */
        .container {
            width: 400px;
            min-height: 400px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            padding: 25px 30px;
        }

        .container .login {
            color: rgb(0, 0, 0);
            font-weight: 500;
            font-size: 1rem;
            margin-bottom: 20px;
            display: block;
            text-transform: capitalize;
        }

        .container form img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 20px;
        }

        .container .login .input-group {
            width: 100%;
            height: 50px;
            margin-bottom: 25px;
        }

        .container .login .input-group input {
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 10px;
            background: transparent;
            transition: 0.3s;
        }

        .container .login .input-group input:focus,
        .container .login .input-group input:valid {
            border-color: #a29bfe;
        }

        .container .login .input-group .button {
            display: block;
            width: 100%;
            padding: 15px 20px;
            text-align: center;
            border: none;
            background: #994999;
            outline: none;
            border-radius: 10px;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .container .login .input-group .button:hover {
            transform: translateY(-5px);
            background: rgb(116, 48, 116);
        }

        .regis a {
            text-decoration: none;
            color: rgb(116, 48, 116);
        }

        .container form label a {
            text-decoration: none;
        }

        footer {
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            color: rgb(236, 236, 232);
            display: flex;
            position: absolute;
            padding-top: 600px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login">
            <img src="img/12.png" alt="" style="width: 120px;">

            <div class="input-group">
                <input type="username" name="username" placeholder="Masukan Username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Masukan Password" required>
            </div>

            <div class="input-group">
                <button name="login" class="button">Login</button>
            </div>
            <label>
                <input type="checkbox" name="remember"> Remember me <span class="pasw" style="margin-left: 83px;">Forgot <a href="#">Password?</a></span>
            </label>
        </form>

    </div>
    <footer>
        <p style="text-align: center;">Copyright &copy; 2021 All Rights Reserved <br> by Yayan Dwi Putra &#127891;</p>
    </footer>

</body>

</html>