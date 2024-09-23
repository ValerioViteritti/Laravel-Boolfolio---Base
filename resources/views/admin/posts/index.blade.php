@extends('layouts.app')

@section('content')
    <h1>elenco post</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.posts.show', ['post' => $post->id]) }}"><i
                                class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}"><i
                                class="fa-solid fa-pen"></i></a>
                        @include('admin.partials.formdelete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
