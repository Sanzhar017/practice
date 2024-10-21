<form action="{{route('suka.store')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <button type="submit">submit</button>
</form>
