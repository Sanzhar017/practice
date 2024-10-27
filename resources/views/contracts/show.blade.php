@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Договор: {{ $contract->title }}</h1>

        <div class="card">
            <div class="card-header">
                <h5>Подробности договора</h5>
            </div>
            <div class="card-body">
                <p><strong>Тип договора:</strong> {{ $contract->contractType->name ?? 'Не указан' }}</p>
                <p><strong>Описание:</strong> {{ $contract->description }}</p>
                <p><strong>Компания:</strong> {{ $contract->company->name ?? 'Не указана' }}</p>
                <p><strong>Подписан:</strong> {{ $contract->user->name ?? 'Не указан' }}</p>
                <p><strong>Дата договора:</strong>
                    {{ $contract->contract_date ? \Carbon\Carbon::parse($contract->contract_date)->format('d.m.Y') : 'Не указана' }}
                </p>
                <p><strong>Создан:</strong> {{ $contract->created_at->format('d.m.Y H:i') }}</p>
                <p><strong>Обновлен:</strong> {{ $contract->updated_at->format('d.m.Y H:i') }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('contracts.index') }}" class="btn btn-primary">Назад к списку</a>
            <a href="{{ route('contracts.edit', $contract->id) }}" class="btn btn-warning">Редактировать</a>
            <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить этот договор?')">Удалить</button>
            </form>
        </div>
    </div>
@endsection
