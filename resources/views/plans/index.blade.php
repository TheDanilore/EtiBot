@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Elige tu plan</h1>
    <form action="{{ route('plans.choose') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="radio" id="basic" name="plan" value="basic">
            <label for="basic">Plan Básico</label>
        </div>
        <div class="form-group">
            <input type="radio" id="premium" name="plan" value="premium">
            <label for="premium">Plan Premium</label>
        </div>
        <button type="submit" class="btn btn-primary">Seleccionar Plan</button>
    </form>
</div>
@endsection
