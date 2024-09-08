<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Create</button>

    <a href='{{route('books.index')}}'>sds</a>
</form>
