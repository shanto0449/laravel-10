<div>
    <h1>List Of images</h1>
    <a href="/upload">Upload mare img</a>
    <br>
    @foreach ($imgData as $img )
    <img style="width: 300px; margin:10px" src="{{url('storage/' .$img->path)}}" alt="">

    @endforeach
</div>
