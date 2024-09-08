@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Редактировать договор</h1>

    <form action="{{ route('contracts.update', $contract->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Название:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $contract->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required>{{ $contract->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Подписант:</label>
            <select class="form-select" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $contract->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Обновить договор</button>
        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection
