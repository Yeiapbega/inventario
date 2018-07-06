@extends('main')
@section('title', 'Dashboard')

@section('content')
holi 
<a href="{{ route('logout') }}">salir</a>
<br>
{{-- {{ session()->get('user_dni') }} --}}
{{ Auth::user()->rol_id }}
@endsection