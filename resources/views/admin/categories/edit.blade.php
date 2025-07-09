@extends('pages.layouts.app')



@section('create_category')
    <br>
    <h1 class="text-center">Update Your Category</h1>
    <br>
    <div class="container my-5 px-4" style="height: 65vh">

         @include('admin.categories.partials.form',[
                'category'=>$category
            ])
       
             
    </div>
@endsection
