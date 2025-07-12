@extends('admin.pages.layouts.app')



@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <h1 class="mb-4">Product Categories Management</h1>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Add Category</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                @foreach ($categories as $category)
                    <tbody>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                        style="display: inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
