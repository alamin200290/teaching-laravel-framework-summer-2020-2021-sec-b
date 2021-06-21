@extends('layout')

@section('navbar')
    {{-- nav bar --}}
    <nav>
        <a href="/user/create"> Create New </a> |
        <a href="{{route('user.index')}}"> User List </a> |
        <a href="/logout"> Logout </a> 
    </nav>
@endsection
 
