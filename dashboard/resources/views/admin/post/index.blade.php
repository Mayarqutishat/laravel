@extends('layouts.master')

@section('title','View Post')

@section('content')

<div class="container-fluid px-4">
<div class="card mt-4">
<div class="card-header">
<h4> View posts
<a href="{{ url('admin/add-posts')}}" class="btn btn-primary float-end">Add posts</a>   
</h4>
</div>
<div class="card-body">
@if(session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Category</th>
<th>Post Name </th>
<th>Status</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
@foreach($posts as $item)
<tr>
 <td>{{ $item->id}}</td>  
 <td>{{ $item->category->name}}</td>  
 <td>{{ $item->name}}</td>  
 <td>{{ $item->status == '1' ? 'Hidden':'Visable'}}</td>   
 <td>
  <a href="{{ url('admin/post/'.$item->id)}}" class="btn btn-success">Edit</a>  
 </td>  
</tr>
@endforeach
</tbody>
</table>


</div>
</div>


</div>
@endsection