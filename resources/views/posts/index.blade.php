<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>게시판 목록</title>
    </head>
    <body>
        <h1>게시판 목록</h1>
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="/show/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="/posts/create">글쓰기</a>
    </body>
</html>