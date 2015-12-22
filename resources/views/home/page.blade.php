@extends('home')

@section('content')

    @if (!empty($posts))
        @include("partials.$layout")
    @else
        <div class="alert alert-danger">
            <strong>Danger!</strong> There are no posts here.
        </div>
    @endif

@endsection
