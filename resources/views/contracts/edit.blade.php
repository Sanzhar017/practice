@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Редактировать договор</h1>

    <form action="{{ route('contracts.update', $contract->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Название:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $contract->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="contract_type_id" class="form-label">Тип договора:</label>
            <select class="form-select" name="contract_type_id" id="contract_type_id" required>
                @foreach($contractTypes as $contractType)
                    <option value="{{ $contractType->id }}" {{ $contract->contract_type_id == $contractType->id ? 'selected' : '' }}>
                        {{ $contractType->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание:</label>
            <textarea class="form-control" name="description" id="description" rows="4" required>{{ old('description', $contract->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="company_id" class="form-label">Компания:</label>
            <select class="form-select" name="company_id" id="company_id" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $contract->company_id == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Подписан:</label>
            <select class="form-select" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $contract->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="contract_date" class="form-label">Дата договора:</label>
            <input type="date" class="form-control" name="contract_date" id="contract_date" value="{{ old('contract_date', $contract->contract_date->format('Y-m-d')) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Сохранить изменения</button>
        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection
