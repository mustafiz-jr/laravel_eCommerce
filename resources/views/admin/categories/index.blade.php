
@extends('pages.layouts.app')


@section('category_table')
    
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Product Categories Management</h1>
        <a href="{{route('admin.categories.create')}}" class="btn btn-info">Add Category</a>
    </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Number of Products</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Electronics</td>
                        <td>Devices and gadgets</td>
                        <td>125</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success" onclick="editCategory(1)">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory(1)">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Clothing</td>
                        <td>Apparel and accessories</td>
                        <td>89</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success" onclick="editCategory(2)">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory(2)">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Home & Garden</td>
                        <td>Furniture and decor</td>
                        <td>64</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success" onclick="editCategory(3)">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory(3)">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Books</td>
                        <td>Printed and digital books</td>
                        <td>42</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success" onclick="editCategory(4)">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory(4)">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sports & Outdoors</td>
                        <td>Equipment and gear</td>
                        <td>37</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success" onclick="editCategory(5)">Edit</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory(5)">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
