@foreach($suki as $suk)
    {{$suk->name}} <br>
@endforeach
<a href="{{route('suka.create')}}">create</a>
