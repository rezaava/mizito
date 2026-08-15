<form action="/login-post" method="post">
    @CSRF
    <div>
        <label for="">mobile</label>
        <input type="text" name="mobile" id="">
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password" id="">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>