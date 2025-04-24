<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <!-- Displaying the session status -->
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- Iterating through the books and displaying them in a grid format -->
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <!-- Book Card -->
                <div class="card">
                    <img src="{{ $book->imgpath }}" class="card-img-top" alt="Book image" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text"><strong>Category:</strong> {{ $book->category }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
                        <p class="card-text"><strong>Quantity:</strong> {{ $book->quantity }}</p>
                        <p><strong>Comments:</strong> {{ $book->comments_count }}</p>

                        <!-- Buttons for update, delete, and show actions -->
                        <div class="d-flex justify-content-between">
                            <!-- Delete Form -->
                            <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                            <!-- Update Form -->
                            <form action="{{ route('books.edit', ['book' => $book->id]) }}">
                                <button type="submit" class="btn btn-warning btn-sm">Update</button>
                            </form>

                            <!-- Show Form -->
                            <form action="{{ route('books.show', ['book' => $book->id]) }}">
                                <button type="submit" class="btn btn-info btn-sm">Show</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
