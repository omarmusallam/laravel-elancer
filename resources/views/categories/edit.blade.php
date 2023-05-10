@extends('layouts.dashboard')

@section('title', 'Edit Category')

@section('content')
    <form action="{{ route('dashboard.categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')

        @include('categories._form')
    </form>
@endsection
