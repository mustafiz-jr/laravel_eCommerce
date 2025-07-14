@extends('admin.pages.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0 text-teal-800">Product Categories Management</h1>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-teal bg-teal-600 hover:bg-teal-700 text-white">
                <i class="fas fa-plus mr-2"></i>Add Category
            </a>
        </div>
        
        <div class="table-responsive rounded-lg shadow-sm">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-teal-600 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Serial Number
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($categories as $category)
                    <tr class="hover:bg-teal-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $i++ }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $category->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $category->slug }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                    class="text-teal-600 hover:text-teal-900 bg-teal-50 hover:bg-teal-100 px-3 py-1 rounded-md transition-colors duration-200">
                                    <i class="fas fa-edit mr-1"></i>Edit
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 bg-red-50 hover:bg-red-100 px-3 py-1 rounded-md transition-colors duration-200">
                                        <i class="fas fa-trash mr-1"></i>Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('styles')
    <style>
        .btn-teal {
            background-color: #0d9488;
            border-color: #0d9488;
        }
        .btn-teal:hover {
            background-color: #0f766e;
            border-color: #0f766e;
        }
        .text-teal-800 {
            color: #115e59;
        }
        .bg-teal-50 {
            background-color: #f0fdfa;
        }
        .bg-teal-600 {
            background-color: #0d9488;
        }
        .hover\:bg-teal-700:hover {
            background-color: #0f766e;
        }
        .hover\:bg-teal-100:hover {
            background-color: #ccfbf1;
        }
    </style>
    @endpush
@endsection