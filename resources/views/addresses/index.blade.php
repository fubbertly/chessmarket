<!-- resources/views/addresses/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Список адресов доставки</h2>
        @foreach($addresses as $address)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $address->state }}, {{ $address->city }}</h5>
                    <p class="card-text">{{ $address->street }}, {{ $address->postal_code }}</p>
                </div>
            </div>
        @endforeach
        <a href="{{ route('addresses.create') }}" class="btn btn-primary">Добавить новый адрес</a>
    </div>
@endsection
