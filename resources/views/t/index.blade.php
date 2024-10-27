@foreach($teachers as $teacher)
    Учитель: {{$teacher->name}} <br>
    Студент: {{$teacher->student->name}} <br>
@endforeach
<a href="{{route('teachers.create')}}">Create</a>
