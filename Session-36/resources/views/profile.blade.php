<div>
    <h1>Profile Page</h1>

    {{-- <h2>{{session('user')}}</h2> --}}

    @if(session('user'))
    <h1>Welcome,{{session('user')}}</h1>
     @else
     <h1>No user found in session <br><a href="login">login</a></h1>
     @endif

     <a href="logout">Logout</a>

     {{print_r(session('allData'))}}

</div>
