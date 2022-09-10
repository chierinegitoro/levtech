<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>edit</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class = "title">編集画面</h1>
        <form action = '/posts/{{$post->id}}' method = 'POST'>
            
            @csrf
            @method('PUT')
    
            <div class = "content__title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value = "{{$post->title}}" />
            </div>
            
            <div class = "content__body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日はいい1日でした。" >{{$post->body}}</textarea>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        
        <div class = "back">[<a href = "/">back</a>]</div>
        
    </body>
</html>