@extends('layouts.dashboard')

@section('page-title', 'Create Role')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.roles.store') }}" method="post">
        @csrf

        @include('roles._form')
    </form>

@endsection
