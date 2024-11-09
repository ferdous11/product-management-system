<!-- Search and sorting form -->
<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by product ID or description">
    <button type="submit">Search</button>
    <a href="{{ route('products.index', ['sort' => 'name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Sort by Name</a>
    <a href="{{ route('products.index', ['sort' => 'price', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Sort by Price</a>
</form>

<!-- Product Table -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}
