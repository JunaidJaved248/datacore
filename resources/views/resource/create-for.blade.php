@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Resource for {{ $item->name }}</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form id="resource-creation-form" method="POST" action="{{ route($itemType . '.store_resource', [$itemType => $item]) }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="main_material">Main Material</label>
                        <input type="text" id="main_material" name="main_material" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="commonality">Commonality</label>
                        <input type="number" id="commonality" name="commonality" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="number" id="value" name="value" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input id="tags" name="tags" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection