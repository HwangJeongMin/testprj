<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>게시판 글쓰기</title>
    </head>
    <body>
        <h1>글 작성</h1>
        <form method="POST" action="/store">
            @csrf
            <div>
                <input type="text" name="title" placeholder="제목" />
            </div>
            
            <div>
                <textarea name="description" placeholder="내용" cols="30" rows="10"></textarea>
            </div>

            <div>
                <button type="submit">글 작성</button>
            </div>
        </form>
    </body>
</html>