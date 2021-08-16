<!DOCTYPE html>
<html>
<head>
    <title>Search | </title>
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
            margin: 80px auto !important; 
        }

        .newpost-container,.post-container{
            background-color: white;
            width: 700px;
            padding: 30px;
            box-sizing: border-box;
            margin: 40px auto;
            border-bottom: 1px solid #ccc;
        }

        .post-container:hover {
            transition-duration: .1s;
            box-shadow: 1px 1px 5px #ccc;
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

        .post-container {
            word-wrap: break-word;
            margin-bottom: -10px;
            position:relative;
        }

        .post-date {
            padding: 3px 12px;
            position:absolute;
            top:0px;
            left:0px;
            font-size:12px;
            background: dodgerblue;
            color: white;
            font-weight: bold;
            
        }


        .post-time {
            padding: 3px 12px;
            position:absolute;
            top:0px;
            left:90px;
            font-size:12px;
            background: tomato;
            color: white;
            font-weight: bold;
        }

        .post-category {
            padding: 3px 12px;
            position:absolute;
            top:0px;
            right:0px;
            font-size:12px;
            background: #0d0d0d;
            color: white;
            font-weight: bold;
        }

        .page-nav {
            width:190px;
            margin: 0 auto;

        }

        .delete-button {
            font-size: 10px;
            padding: 4px;
            font-weight: bold;
            border-radius: 0;
            position: absolute;
            bottom:0 ;
            right: 0;
        }

        .edit-button {
            font-size: 10px;
            padding: 4px;
            font-weight: bold;
            border-radius: 0;
            position: absolute;
            bottom:28px ;
            right: 0;
        }

        .back-container {
            width: 700px;
            margin: 0 auto;
        }

        .back-button {
            font-size: 12px;
            font-weight: bold;
            border-radius: 0;
            padding: 6px 10px;
        }

        img {
            width: 100%;
        }
    </style>
</head>
<body>  
    <div class="container">

    <div class="back-container">
        <a href="route('index')"><button type="button" class="btn btn-lg btn-secondary back-button">&#8629; BACK</button></a>
    </div>

    @foreach($searchItems as $post)
        <div class="post-container">
            <span class="post-category">#{{$post->categories}}</span>
            <span class="post-date">{{Str::of($post->created_at)->substr(0,10)}}</span>
            <span class="post-time">{{Str::of($post->created_at)->substr(10,20)}}</span>
            <div class="post-body">
                <br>
                {{$post->post}}
                @if($post->img)
                    <br><br>
                    <img class="postimage" src="{{$post->img}}">
                    <br>
                @endif
                <br><br>
            </div>
            <div class="post-buttons">
                <a href="{{url('delete').'/'.$post->post_id}}"><button type="button" class="btn btn-lg btn-danger delete-button">DELETE</button></a>
                <a href="{{url('edit').'/'.$post->post_id}}"><button type="button" class="btn btn-lg btn-success edit-button">EDIT</button></a>
            </div>
        </div>
        @endforeach
        
    </div>
</body>
</html>
