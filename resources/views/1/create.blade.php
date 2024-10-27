<form action="{{route('students.store')}}" method="post">
    @csrf
    <label for="students">студент</label>
    <input type="text" name="name" id="name">
    <button type="submit">Save</button>
</form>
