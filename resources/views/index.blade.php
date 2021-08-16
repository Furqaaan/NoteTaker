<!DOCTYPE html>
<html>
<head>
    <title>Notes | Home</title>
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


        .newpost-container,.post-container,.search-container{
            background-color: white;
            width: 700px;
            padding: 30px;
            box-sizing: border-box;
            margin: 40px auto;
            border-bottom: 1px solid #ccc;
        }

        .search-container {
            padding: 14px;
            padding-bottom: 2px;
        }

        .search-container input[type="text"]{
            display:inline;
            width: 84%;
            font-family: monospace;
            font-size: 12px;
            border-radius: 0;
        }   

        .search-container button[type="submit"]{
            display:inline;
            width: 15%;
            font-size: 12px;
            font-weight: bold;
            border-radius: 0;
        } 

        .post-container:hover {
            transition-duration: .1s;
            box-shadow: 1px 1px 6px #ccc;
        }

        .newpost-container::after {
            content: "";
            clear: both;
            display: table;
            }

        .newpost-container textarea {
            width: 100%;
            padding: 10px;
            font-family: monospace;
            font-size: 12px;
            border-radius: 0;
           
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

        input[type="file"]::-webkit-file-upload-button {
            display: none;
        }

        input[type="file"] {
            color:white;
        }

        input[type="file"]::before {
            content: "add image";
            background-color: #6A75B4;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 10px;
            border: 0;
            padding: 10px;
            display: inline-block;
            border-top: 1px solid #6A75B4;
        }

        input[type="file"]:hover::before {
            background-color: #6B757D;
            cursor: pointer;
        }

        img {
            width: 100%;
        }

        .logout-container {
            position: absolute;
            bottom: 0;
            left: 100px;
        } 

        .logout-button {
            font-size: 10px;
            border-radius: 0;
            font-weight: bold;
            padding: 6px;
            border-bottom: 2px solid #c82333;
        }

        .profile-container {
            background-color: white;
            box-sizing: border-box;
            width: 250px;
            text-align: center;
            position:fixed;
            top:30%;
            left:40px;
            border-bottom: 1px solid #ccc;
        }

        .profile-container h1{
            padding: 20px;
        }

        .profile-container img {
            width: 100%;
        }

        select {
            background-color: #00CCAB;
            color: white;
            padding: 8px;
            font-size: 14px;
            font-weight: bold;
            border: 0;
            border-bottom: 2px solid #00CCAB;
        }

        .categories-container {
            background-color: white;
            width:250px;
            position: fixed;
            top:15%;
            right:40px;
            padding: 20px;
            border-bottom: 1px solid #ccc;
            text-align: center;
            font-weight: bold;
        }

        .categories-container a{
            display: block;
            padding: 10px;
            border-bottom: 1px solid #f3f3f3;
            color:black;
            text-decoration: none;

        }

        .categories-container a:hover {
            background-color: #00CCAB;
            color:white;
        }
    </style>
</head>
<body>  
    <div class="container">

        <div class="profile-container">
            <img src="http://www.100hdwallpapers.com/wallpapers/1920x1080/comet_minimal-hd_wallpapers.jpg">
            <br>
            <h1>{{ucwords($name)}}</h1>
            <br>
            <div class="logout-container">
                <a href="{{url('logout')}}"><button type="button" class="btn btn-lg btn-danger logout-button">LOGOUT</button></a>
            </div>
        </div>

        <div class="search-container">
            <form method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Search your notes ...">
                    <button type="submit" class="btn btn-secondary">SEARCH</button>
                </div>
            </form>
        </div>

        <div class="categories-container">
            <a href="{{url('index')}}">HOME</a>
            <a href="{{url('category/coding')}}">CODING</a>
            <a href="{{url('category/movies')}}">MOVIES</a>
            <a href="{{url('category/remainder')}}">REMAINDER</a>
            <a href="{{url('category/random')}}">RANDOM</a>
            <a href="{{url('category/fitness')}}">FITNESS</a>
            <a href="{{url('category/food')}}">FOOD</a>
            <a href="{{url('category/fun')}}">FUN</a>
            <a href="{{url('category/gaming')}}">GAMING</a>
            <a href="{{url('category/sports')}}">SPORTS</a>
            <a href="{{url('category/news')}}">NEWS</a>
            <a href="{{url('category/tech')}}">TECH</a>
        </div>

        <div class="newpost-container">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="newpost" placeholder="Add a new note ..."></textarea>
                </div>
                <select name="categories" id="categories">
                    <option class="option" value="coding">CODING</option>
                    <option value="movies">MOVIES</option>
                    <option value="remainder">REMAINDER</option>
                    <option value="random">RANDOM</option>
                    <option value="fitness">FITNESS</option>
                    <option value="food">FOOD</option>
                    <option value="fun">FUN</option>
                    <option value="gaming">GAMING</option>
                    <option value="sports">SPORTS</option>
                    <option value="news">NEWS</option>
                    <option value="tech">TECH</option>
                </select>
                &nbsp;
                <input type="file" name="image-note" value="1">
                <button type="submit" class="btn btn-lg btn-primary" name="addpost">NOTE</button>
            </form>
        </div>

        @foreach($posts as $post)
        <div class="post-container">
            <span class="post-category">#{{$post->categories}}</span>
            <span class="post-date">{{Str::of($post->created_at)->substr(0,10)}}</span>
            <span class="post-time">{{Str::of($post->created_at)->substr(10,20)}}</span>
            <div class="post-body">
                <br>
                {{$post->post}}
                @if($post->img)
                    <br><br>
                    <img class="postimage" src="{{route('index').'/'.$post->img}}">
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

        <div class="page-nav">
            <br>
            {{$posts->links("pagination::bootstrap-4")}}
        </div>

    </div>
</body>
</html>
