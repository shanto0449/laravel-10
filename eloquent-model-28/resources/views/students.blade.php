<div>
<h1>Student List</h1>

<table border="1">
    <tr>
        <th>Nane</th>
        <th>Email</th>
        <th>Batch</th>
    </tr>
    @foreach ($data as $student)
        <tr>
            <th>{{$student->name}}</th>
            <th>{{$student->email}}</th>
            <th>{{$student->batch}}</th>
        </tr>
    @endforeach
</table>
</div>
