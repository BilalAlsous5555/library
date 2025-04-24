@extends('app')

@section('title' , "Add A Book")

@section('content')
<form action="{{ route('books.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    @include('form')
    <button type="submit" style="margin-left: 200px" class="btn btn-warning btn-sm">Add</button>

</form>
@endsection