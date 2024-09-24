<div>
    <h1>Add New User</h1>
    <span class="success-message">{{session('message')}}</span>
    <form action="add" method="post">
        @csrf
        <input type="text" name="user" placeholder="User Name">
        <br><br>
        <input type="email" name="email" placeholder="User Email">
        <br><br>
        <input type="text" name="phone" placeholder="User Phone Number">
        <br><br>
        <button>Add New User</button>
    </form>
</div>

<style>
    .success-message{
        color: green;
        padding: 2px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>
