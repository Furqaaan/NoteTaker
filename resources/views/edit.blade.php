<!DOCTYPE html>
<html>
<head>
    <title>Notes | Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #f3f3f3;
        }

        .container {
            width: 700px;
            margin: 200px auto;
            background-color: white;
            padding: 25px;
            box-sizing: border-box;
            border-bottom: 2px solid #ccc;
        }

        .container button{
            float: right;
            margin-left: 10px;
            font-size:12px;
            font-weight: bold;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
            }

    </style>
</head>
<body>  
    <div class="container">

        <div class="editpost-container">
            <form method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="10" name="editpost">@foreach($posts as $post) {{$post->post}} @endforeach</textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-success">SAVE</button>
                <a href="{{route('index')}}"><button type="button" class="btn btn-lg btn-danger">CANCEL</button></a>
            </form>
        </div>

        
    </div>
</body>
</html>
