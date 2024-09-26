<div>
   <h1>Student List</h1>
   <table border="1">

    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Created</td>
        <td>Update</td>
        <td>Operation</td>

    </tr>

    @foreach ($students as $student)

    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td>
        <td><a href="{{'delete/'.$student->id}}">Delete</a></td>

    </tr>

    @endforeach

   </table>
</div>
