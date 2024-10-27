@extends('layouts.app')

@section('content')
    <h1>Просмотр компании</h1>

    <div class="mb-3">
        <strong>Название:</strong> {{ $company->name }}
    </div>

    <div class="mb-3">
        <strong>Описание:</strong> {{ $company->description }}
    </div>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary">Назад</a>
@endsection
