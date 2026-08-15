<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/register-post" method="post">
        @CSRF
        <div>
            <label for="">name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">family</label>
            <input type="text" name="family" id="">
        </div>
        <div>
            <label for="">mobile</label>
            <input type="text" name="mobile" id="">
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="password" id="">
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>