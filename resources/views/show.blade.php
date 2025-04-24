@extends('app')

@section('title', 'Showing Book')

@section('content')
<div class="container mt-5">

    {{-- Flash message --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    {{-- Book Card --}}
    <div class="card mb-4" style="max-width: 600px;">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="{{ $book->imgpath }}" alt="Book Image" class="img-fluid rounded-start" style="height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->name }}</h5>
                    <p class="card-text"><strong>Category:</strong> {{ $book->category }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
                    <p class="card-text"><strong>Quantity:</strong> {{ $book->quantity }}</p>

                    <div class="d-flex gap-2 mt-3">
                        <form action="{{ route('books.edit', ['book' => $book->id]) }}">
                            <button type="submit" class="btn btn-warning btn-sm">Update</button>
                        </form>

                        <form action="{{ route('books.show', ['book' => $book->id]) }}">
                            <button type="submit" class="btn btn-info btn-sm">Show</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
