<form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
    @csrf
    @if(isset($product))
        @method('PUT')
    @endif

    <label>Product ID:</label>
    <input type="text" name="product_id" value="{{ old('product_id', $product->product_id ?? '') }}" required>

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required>

    <label>Description:</label>
    <textarea name="description">{{ old('description', $product->description ?? '') }}</textarea>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" required>

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}">

    <button type="submit">{{ isset($product) ? 'Update' : 'Create' }}</button>
</form>
