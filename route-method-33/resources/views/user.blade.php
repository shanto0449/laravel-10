<div>
    <h1>User Form</h1>

    <form action="/user" method="post">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="username" placeholder="Enter  User Name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter User Email ">
        <br>
        <br>
        <input type="text" name="password" placeholder="Enter User Password">
        <br>
        <br>
        <button>Submit</button>

    </form>
</div>
