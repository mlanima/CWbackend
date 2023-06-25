@extends('layouts.app')

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Вийти</button>
</form>

@section('content')
@endsection
