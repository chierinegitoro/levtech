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
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" />
            </div>
            
            <div class = "body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日はいい1日でした。" ></textarea>
            </div>
            
            <input type="submit" value="投稿"/>
        </form>
        
        <div class = "back">[<a href = "/">back</a>]</div>
        
    </body>
</html>