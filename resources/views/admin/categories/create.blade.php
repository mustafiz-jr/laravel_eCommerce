@extends('pages.layouts.app')



@section('create_category')
<br>
<br>
    <div class="container my-5 px-4" style="height: 65vh">
        <form id="categoryForm" method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="title" required>
            </div>
            <div class=" gap-2">
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
        </form>
    </div>
@endsection
