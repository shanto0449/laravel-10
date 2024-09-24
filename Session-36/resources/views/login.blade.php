<div>
    <h1>Login Form</h1>

    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder="User Name">
        <br><br>
        <input type="password" name="password" placeholder="User Password">
        <br><br>
        <button>Login</button>

    </form>
</div>
