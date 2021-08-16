<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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


        .register-container{
            background-color: white;
            width: 450px;
            padding: 40px 30px;
            box-sizing: border-box;
            margin: 210px auto;
            border-bottom: 1px solid #ccc;
            font-family: monospace;
        }

        .register-container input{
            display: block;
            width: 100%;
            padding: 8px;
            border-radius: 0;
        }

        .register-container input[type="submit"] {
            background-color: #00CCAB;
            border: 0;
        }

        .register-container input[type="submit"]:hover {
            background-color: #4cacff;
        }

    </style>
</head>
<body>  
    <div class="container">

        <div class="register-container">
            <form method="post">
                @csrf
                <input class="form-control" type="text" name="name" placeholder="Fullname"><br>
                <input class="form-control" type="email" name="email" placeholder="Email"><br>
                <input class="form-control"type="password" name="password" placeholder="Password"><br>
                <input class="form-control"type="password" name="password_confirmation" placeholder="Confirm Password"><br>
                <input class="btn btn-lg btn-success" type="submit" value="REGISTER">
            </form>
        </div>

    </div>
</body>
</html>
