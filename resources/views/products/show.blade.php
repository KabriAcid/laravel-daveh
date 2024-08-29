<x-layout>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form action="{{ route('products.destroy', $product) }}" method="post">
        @csrf
        @method('DELETE')
        <button style="margin-top: 20px;background-color: red; color:white">Delete</button>
    </form>
</x-layout>