@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Список договоров</h1>

    <a href="{{ route('contracts.create') }}" class="btn btn-primary mb-3">Создать новый договор</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Компания</th> <!-- Новое поле для компании -->
            <th>Подписан</th>
            <th>Дата договора</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contracts as $contract)
            <tr>
                <td>{{ $contract->title }}</td>
                <td>{{ $contract->description }}</td>
                <td>{{ $contract->company }}</td> <!-- Отображение компании -->
                <td>{{ $contract->user->name }}</td>
                <td>
                    @if($contract->contract_date)
                        {{ $contract->contract_date->format('d.m.Y') }}
                    @else
                        Не указана
                    @endif
                </td>
                <td class="table-actions">
                    <a href="{{ route('contracts.show', $contract->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                    <a href="{{ route('contracts.edit', $contract->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены?')">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
