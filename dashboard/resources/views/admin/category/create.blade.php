@extends('layouts.master')

@section('title','Category')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
        @if($errors->any())
        <div class="alret alert-danger">
    @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    </div>
@endif



            <form action="{{ url('admin/add-category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name">Category Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keyword">Meta Keyword</label>
                    <textarea id="meta_keyword" name="meta_keyword" rows="3" class="form-control"></textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">   
                        <label for="navbar_status">Navbar Status</label>
                        <input type="checkbox" id="navbar_status" name="navbar_status" />
                    </div>
                    <div class="col-md-3 mb-3">   
                        <label for="status">Status</label>
                        <input type="checkbox" id="status" name="status" />
                    </div>
                   <div class="col-md-6">
                   <button type="submit" class="btn btn-primary">Save Category</button>
                   </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
