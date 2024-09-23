<div>
   <h1>
    User login
   </h1>
   <form action="user" method="post">
    @csrf
    <input type="text" name="name" placeholder="User Name">
    <br>
    <br>
    <input type="email" name="email" placeholder="User Email">
    <br>
    <br>
    <input type="password" name="password" placeholder="User Paseeword">

    <br><br>
    <button>Login</button>
   </form>
</div>
