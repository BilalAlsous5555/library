<div class="container mt-4">
    <!-- Name Field -->
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', optional($book ?? null)->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Category Field -->
    <div class="mb-3">
        <label for="category" class="form-label">Category:</label>
        <input type="text" name="category" id="category"
            class="form-control @error('category') is-invalid @enderror"
            value="{{ old('category', optional($book ?? null)->category) }}">
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Price Field -->
    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" name="price" id="price" step="0.01"
            class="form-control @error('price') is-invalid @enderror"
            value="{{ old('price', optional($book ?? null)->price) }}">
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Quantity Field -->
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" name="quantity" id="quantity"
            class="form-control @error('quantity') is-invalid @enderror"
            value="{{ old('quantity', optional($book ?? null)->quantity) }}">
        @error('quantity')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Image Upload -->
    <div class="mb-3">
        <label for="imgpath" class="form-label">Upload Image:</label>
        <input type="file" name="imgpath" id="imgpath" class="form-control @error('imgpath') is-invalid @enderror">
        @error('imgpath')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
