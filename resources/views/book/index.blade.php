@foreach($books as $book)
    <h3>{{$book->name}}</h3>
    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
@endforeach
<a href="{{route('books.create')}}">create</a>
