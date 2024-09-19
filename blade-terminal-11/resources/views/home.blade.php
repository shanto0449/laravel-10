<div>
    <h1>Home Page</h1>
    <h1>{{$name}}</h1>
    <h1>{{rand()}}</h1>
    {{-- <h1> {{$user[0]}}</h1> --}}
    @if($name=='Shanto')
    <h2>This is Shanto</h2>
    @elseif($name=="Fahim")
    <h2>This is Fahim</h2>
    @else
    <h2>Other User</h2>
    @endif


    <div>
        @foreach ($user  as $users )
           <h4>{{$users}}</h4>
        @endforeach
    </div>

    <div>
        @for($i=0;$i<10;$i++)
        <h3> {{$i}} </h3>
        @endfor
    </div>


    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
