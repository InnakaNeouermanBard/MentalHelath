<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="name">Product Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <label for="image">Product Image:</label>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Update Product</button>
</form>
    