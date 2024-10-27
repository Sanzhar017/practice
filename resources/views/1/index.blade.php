@foreach($students as $student)
    Студент: {{$student->name}} <br>
    Учителя:
    @foreach($student->teachers as $teacher)
        {{$teacher->name}} <br>
    @endforeach
@endforeach
