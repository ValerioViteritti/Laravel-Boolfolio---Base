@extends('layouts.app')

@section('content')
    <h1>Benvenuti nella dashboard di Boolfolio</h1>
    <h3>Attualmente sono presenti {{ $count_posts }} post</h3>
@endsection
