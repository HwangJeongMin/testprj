<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>게시판 상세페이지</title>
    </head>
    <body>
        <h1>상세페이지</h1>
        <div>
            {{ $post->title }}
        </div>
        <div>
            {{ $post->description }}
        </div>
        <div>
            <a href="/posts/{{ $post->id }}/edit">수정하기</a>
        </div>
    </body>
</html>