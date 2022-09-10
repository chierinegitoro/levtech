<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>create</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <form action = '/posts' method = 'POST'>
            
            @csrf
            
            <div class = "title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value = "{{old('post.title')}}" />
                <p class = "title__error" style = "color:red">{{$errors->first("post.title")}}</p>
            </div>
            
            <div class = "body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日はいい1日でした。" >{{old('post.body')}}</textarea>
                <p class = "body__error" style = "color:red">{{$errors->first("post.body")}}</p>
            </div>
            
            <input type="submit" value="投稿"/>
        </form>
        
        <div class = "back">[<a href = "/">back</a>]</div>
        
    </body>
</html>