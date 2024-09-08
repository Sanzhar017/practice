@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Просмотр договора</h1>

    <div class="mb-3">
        <strong>Название:</strong> {{ $contract->title }}
    </div>
    <div class="mb-3">
        <strong>Описание:</strong> {{ $contract->description }}
    </div>
    <div class="mb-3">
        <strong>Подписант:</strong> {{ $contract->user->name }}
    </div>

    <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Назад к списку</a>
    <a href="{{ route('contracts.edit', $contract->id) }}" class="btn btn-warning">Редактировать</a>
    <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
    </form>
@endsection

