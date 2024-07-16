<!-- resources/views/addresses/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Добавить новый адрес</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('addresses.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="state">Штат:</label>
                <input type="text" id="state" name="state" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="city">Город:</label>
                <input type="text" id="city" name="city" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="street">Улица и номер дома:</label>
                <input type="text" id="street" name="street" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="postal_code">Почтовый индекс:</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить адрес</button>
        </form>
    </div>
@endsection
