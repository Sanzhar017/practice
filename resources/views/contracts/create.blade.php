@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Создать новый договор</h1>

    <form action="{{ route('contracts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Название:</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Подписант:</label>
            <select class="form-select" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Создать договор</button>
        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection