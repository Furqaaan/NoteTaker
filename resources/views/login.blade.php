<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #f3f3f3;
        }


        .login-container{
            background-color: white;
            width: 450px;
            padding: 40px 30px;
            box-sizing: border-box;
            margin: 250px auto;
            border-bottom: 1px solid #ccc;
        }

        .login-container input{
            display: block;
            width: 100%;
            padding: 8px;
            border-radius: 0;
        }

        .login-container input[type="submit"] {
            background-color: #00A871;
        }

        .login-container input[type="submit"]:hover {
            background-color: #008F73;
        }

    </style>
</head>
<body>  
    <div class="container">

        <div class="login-container">
            <form method="post">
                @csrf
                <input class="form-control" type="email" name="email" placeholder="Email"><br>
                <input class="form-control"type="password" name="password" placeholder="Password"><br>
                <input class="btn btn-lg btn-success" type="submit" value="LOGIN">
            </form>
        </div>

    </div>
</body>
</html>
