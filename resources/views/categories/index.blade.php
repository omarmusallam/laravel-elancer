@extends('layouts.dashboard')

@section('title')
    Categories <small><a class="btn  btn-sm btn-outline-primary" href="{{ route('categories.create') }}">Create</a></small>
@endsection

@section('content')
    <x-flash-message />

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Parent Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories1 as $category)
                    <tr>
                        {{-- ['id' => $category->id] : route في ال key حسب ال   prameter ترتيب ال   --}}
                        {{-- [$category->id] : route حسب ال  prameter ترتيب ال   --}}
                        {{-- $category->id :(فقط one prameter - route عندما يستقبل ال ) --}}
                        <td>{{ $category->id }}</td>
                        <td><a
                                href="{{ route('categories.show', ['category' => $category->id]) }} ">{{ $category->name }}</a>
                        </td>
                        <td>{{ $category->slug }} </td>
                        <td>{{ $category->parent_name ?? 'No Parent' }} </td>
                        <td>{{ $category->created_at }} </td>
                        <td><a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-sm btn-dark">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }} " method="post">
                                @csrf
                                @method('delete')
                                {{-- <input type="hidden" name="_method" value="delete"> --}}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $categories1->withQueryString()->links() }}
@endsection
