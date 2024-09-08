<form action="{{ route('books.update', $books->$book) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $book->name) }}">
    <button type="submit">Update</button>

    <a href="{{ route('books.index') }}">Back to Books</a>
</form>
