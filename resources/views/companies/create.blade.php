@extends('layouts.app')

@section('content')
    <h1>Создать новую компанию</h1>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Название:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Создать</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection
