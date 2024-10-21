<form action="{{route('teachers.store')}}" method="post">
    @csrf
    <label for="name">name</label>
    <input type="text" value="" name="name">
    <select name="student_id">
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Отправить</button>
</form>
