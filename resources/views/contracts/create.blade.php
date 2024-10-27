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
            <label for="contract_type_id" class="form-label">Тип договора:</label>
            <select class="form-select" name="contract_type_id" id="contract_type_id" required>
                @foreach($contractTypes as $contractType)
                    <option value="{{ $contractType->id }}">{{ $contractType->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="company_id" class="form-label">Компания:</label>
            <select class="form-select" name="company_id" id="company_id" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Подписан:</label>
            <select class="form-select" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="contract_date" class="form-label">Дата договора:</label>
            <input type="date" class="form-control" name="contract_date" id="contract_date" required>
        </div>

        <button type="submit" class="btn btn-success">Создать договор</button>
        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection
