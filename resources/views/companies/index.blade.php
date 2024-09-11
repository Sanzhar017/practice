@extends('layouts.app')

@section('content')
    <h1>Список компаний</h1>
    <a href="{{ route('companies.create') }}" class="btn btn-primary">Создать новую компанию</a>

    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->description }}</td>
                <td>
                    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline;">
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
