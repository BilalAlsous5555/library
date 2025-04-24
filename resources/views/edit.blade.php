@extends('app')
@section('title' , "Edit Your Book")

@section('content')
    <form action="{{ route('books.update', ['book'=>$book->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('form')

        <button type="submit" style="margin-left: 200px" class="btn btn-warning btn-sm">Update</button>

    </form>
@endsection