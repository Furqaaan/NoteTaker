<!DOCTYPE html>
<html>
<head>
    <title>Blog | Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #f3f3f3;
        }

        .newpost-container {
            background-color: white;
            width: 700px;
            padding: 30px;
            box-sizing: border-box;
            margin: 50px auto;
            border-bottom: 1px solid #ccc;
        }

        .newpost-container::after {
            content: "";
            clear: both;
            display: table;
            }

        .newpost-container textarea {
            width: 100%;
            padding: 10px;
           
        }

        .newpost-container button {
            float: right;
            padding: 5px;
            width: 80px;
            font-weight: bold;
            font-size: 16px;
            border-bottom: 1px solid #0062FF;
        }
    </style>
</head>
<body>  
    <div class="container">

        <div class="newpost-container">
            <form method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">POST</button>
            </form>
        </div>

    </div>
</body>
</html>
