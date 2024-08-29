<x-layout>
    <h1>New Product</h1>
    {{-- Display errors --}}
    <x-errors/>

    {{-- Form --}}
    <form action="{{ route('products.store') }}" method="post">
      <x-products.form/>
    </form>
</x-layout>