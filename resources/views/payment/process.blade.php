@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Proceso de Pago</h1>
    <form action="{{ route('payment.handle') }}" method="POST">
        @csrf
        <!-- Aquí agregarás los campos necesarios para el pago -->
        <button type="submit" class="btn btn-primary">Realizar Pago</button>
    </form>
</div>
@endsection
