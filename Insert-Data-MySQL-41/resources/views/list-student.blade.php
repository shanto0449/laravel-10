<div>
   <h1>Student List</h1>

   <form action="search" method="get">
    <input type="text"  placeholder="Search name" name="search" value="{{@$search}}">
    <button>Search</button>
   </form>

   <form action="delete-multi" method="post">
    @csrf
    <button>Delete</button>



   <table border="1">

    <tr>
        <td>Select</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Created</td>
        <td>Update</td>
        <td>Operation</td>

    </tr>

    @foreach ($students as $student)

    <tr>
        <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td>
        <td><a href="{{'delete/'.$student->id}}">Delete</a>
        <a href="{{'edit/'.$student->id}}">Edit</a></td>

    </tr>

    @endforeach

   </table>
</form>
<br><br>
   {{$students->links()}}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>
