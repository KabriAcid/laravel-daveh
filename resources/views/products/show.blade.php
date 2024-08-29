<x-layout>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    <form action="{{route("products.destroy", $product)}}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>