@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Minerals</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p><a href="{{ route('mineral.create') }}" class="btn btn-primary">Create New</a></p>

                <h2>List of Minerals</h2>
                <ul>
                    @foreach ($minerals as $mineral)
                        <li>
                            <a href="{{ route('mineral.show', ['mineral' => $mineral->id]) }}">{{ $mineral->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection