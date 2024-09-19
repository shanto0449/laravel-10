<div>
    <h2>Add New User</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Enter user name">

        </div>
        <div class="input-wrapper">
            <input type="email" name="useremail" placeholder="Enter user Email">

        </div>
        <div class="input-wrapper">
            <input type="password" name="userpassword" placeholder="Enter user Password">

        </div>
        <div class="input-wrapper">
           <button>Add new User</button>
        </div>
    </form>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

<style>
    input{
        border: orange 1px solid;
        height: 30px;
        width: 200px;
        border-radius: 2px;
        color: rgb(152, 148, 140);
    }

    .input-wrapper{
       margin: 10px;
    }

    button{
        border: orange 1px solid;
        height: 30px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: wheat;
        cursor: pointer;
    }
</style>
