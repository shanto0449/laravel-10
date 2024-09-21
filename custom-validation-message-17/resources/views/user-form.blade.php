<div>
   <h2>Add New User</h2>
   <form action="adduser" method="post">
    @csrf
    <div class="input-user">
        <input type="text" name="username" placeholder="Enter User Name" value="{{old('username')}}" class="{{$errors->first('username')?'input-error':''}}">
        <span style="color: red">@error('username'){{$message}} @enderror</span>
    </div>
        <div class="input-user">
            <input type="text" name="useremail" placeholder="Enter User Email" value="{{old('useremail')}}" class="{{$errors->first('useremail')?'input-error':''}}">
            <span style="color: red">@error('useremail'){{$message}} @enderror</span>
        </div>
        <div class="input-user">
            <input type="text" name="userpassword" placeholder="Enter User Password" value="{{old('userpassword')}}" class="{{$errors->first('userpassword')?'input-error':''}}">
            <span style="color: red">@error('userpassword'){{$message}} @enderror</span>
        </div>
        <div>
            <button >
                Add New User
            </button>
        </div>

   </form>
</div>
<style>
    input{
    border: orange 1px solid;
    height: 30px;
    width: 200px;
    border-radius: 2px;
    color: rgb(55, 52, 48);
    margin: 10px;
    }




    button{
        border: orange 1px solid;
        height: 30px;
        width: 200px;
        border-radius: 2px;
        color: rgb(98, 0, 255);
        background-color: rgb(245, 179, 200);
        cursor: pointer;
        margin: 10px;
    }
    .input-error{
        border: 1px solid red;
        color: red;
    }

</style>
