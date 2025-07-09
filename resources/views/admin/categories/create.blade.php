@extends('admin.pages.layouts.app')




@section('create_category')
    <br>
    <h1 class="text-center">Create Your Category</h1>
    <br>
    <div class="container my-5 px-4" style="height: 65vh">

        <form method="POST" action="{{route('admin.categories.store')}}">
            @csrf
            @include('admin.categories.partials.form',[
                'category'=>$category
            ])
        </form>
    </div>
@endsection
