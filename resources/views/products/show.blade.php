<h2>Product Details</h2>
<p>ID: {{ $product->id }}</p>
<p>Product ID: {{ $product->product_id }}</p>
<p>Name: {{ $product->name }}</p>
<p>Description: {{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<a href="{{ route('products.edit', $product->id) }}">Edit</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
</form>
