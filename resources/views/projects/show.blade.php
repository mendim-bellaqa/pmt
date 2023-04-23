@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $project->name }}</div>
                    <div class="card-body">
                        <p>{{ $project->description }}</p>
                        <p>Product ID: {{ $project->product_id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
