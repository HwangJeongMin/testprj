<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>게시판 글 수정</title>
    </head>
    <body>
        <h1>글 수정</h1>
        <form method="POST" action="/update/{{ $post->id }}">
            @csrf
            @method('PATCH')
            <div>
                <input type="text" name="title" value="{{ $post->title }}" />
            </div>
            <div>
                <textarea name="description" cols="30" rows="10">{{ $post->description }}</textarea>
            </div>
            <div>
                <button type="submit">글 수정</button>
            </div>
        </form>
    </body>
</html>