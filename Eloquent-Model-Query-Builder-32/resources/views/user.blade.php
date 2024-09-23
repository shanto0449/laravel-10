<div>
   <h1>User Data</h1>
   <table border="1">
    <tr>
        <td>User Name</td>
        <td>User Email</td>
        <td>Phone Number</td>
    </tr>

    @foreach ($users as $user)

    <tr>
        <td>{{$user->Name}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Phone}}</td>
    </tr>

    @endforeach

   </table>
</div>
