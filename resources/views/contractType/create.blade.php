@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Создать тип договора</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contypes.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Название типа договора</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Введите название" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
