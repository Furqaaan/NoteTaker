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

        .post-id {
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
    </style>
</head>
<body>  
    <div class="container">

        <div class="search-container">
            <form method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Search among your notes ...">
                    <button type="submit" class="btn btn-secondary">SEARCH</button>
                </div>
            </form>
        </div>

        <div class="newpost-container">
            <form method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="newpost" placeholder="Add a new note ..."></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary" name="addpost">NOTE</button>
            </form>
        </div>

        @foreach($posts as $post)
        <div class="post-container">
            <span class="post-id">#{{$post->post_id}}</span>
            <span class="post-date">{{Str::of($post->created_at)->substr(0,10)}}</span>
            <span class="post-time">{{Str::of($post->created_at)->substr(10,20)}}</span>
            <div class="post-body">
                <br>
                {{$post->post}}
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
