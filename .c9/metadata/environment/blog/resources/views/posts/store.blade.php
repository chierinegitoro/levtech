{"filter":false,"title":"store.blade.php","tooltip":"/blog/resources/views/posts/store.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":37,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    ","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    ","    <body>","        ","        <h1>Blog Name</h1>","        ","        [<a href='/posts/create'>create</a>]","        ","        <div class='posts'>","            ","            @foreach($posts as $post)","            ","            <div class='post'>","                ","                <h2 class = 'title'>","                    <a href=\"/posts/{{$post->id}}\">{{$post->title}}</a>","                </h2>","                ","                <p class='body'>{{$post->body}}</p>","            ","            </div>","            ","            @endforeach","            ","        </div>","        <div class = 'paginate'>","            {{ $posts->links()}}","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":11,"column":0},"end":{"row":35,"column":14},"action":"remove","lines":["        ","        <h1>Blog Name</h1>","        ","        [<a href='/posts/create'>create</a>]","        ","        <div class='posts'>","            ","            @foreach($posts as $post)","            ","            <div class='post'>","                ","                <h2 class = 'title'>","                    <a href=\"/posts/{{$post->id}}\">{{$post->title}}</a>","                </h2>","                ","                <p class='body'>{{$post->body}}</p>","            ","            </div>","            ","            @endforeach","            ","        </div>","        <div class = 'paginate'>","            {{ $posts->links()}}","        </div>"],"id":2}],[{"start":{"row":10,"column":10},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":10,"column":10},"end":{"row":11,"column":8},"action":"insert","lines":["","        "],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":8},"end":{"row":11,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1662458651787,"hash":"004194cc28dd9e9fc5007b4ec38bf89f004ef890"}