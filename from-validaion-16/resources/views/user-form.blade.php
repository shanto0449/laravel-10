<div>
    <h2>Add New User</h2>
{{--
    @if($errors->any())
    @foreach ($errors->all() as $error )
    <div style="color: red">
        {{$error}}
    </div>

    @endforeach

    @endif --}}

   <form action="adduser" method="post">
    @csrf

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Enter Your Name" >
        <span style="color: red">@error('name'){{$message}} @enderror</span>
    </div>

    <div class="input-wrapper">
        <input type="text" name="email" placeholder="Enter Your Email" >
        <span style="color: red">@error('email'){{$message}} @enderror</span>
    </div>

    <div class="input-wrapper">
        <input type="password" name="password" placeholder="Enter Your Password" >
        <span style="color: red">@error('password'){{$message}} @enderror</span>
    </div>

    <div >
        <h4>Skill</h4>
        <input type="checkbox" name="skill[]" value="php" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="java" id="java">
        <label for="java">Java</label>
        <input type="checkbox" name="skill[]" value="laravel" id="laravel">
        <label for="laravel">Laravel</label>
        <input type="checkbox" name="skill[]" value="c++" id="c++">
        <label for="c++">C++</label>
    </div>

    <div class="input-wrapper">
        <button>Add New User</button>
    </div>

   </form>
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
