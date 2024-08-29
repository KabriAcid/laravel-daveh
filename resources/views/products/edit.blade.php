<x-layout>
    <h1>Edit Product</h1>
    {{-- Display errors --}}
    <x-errors/>
    
    {{-- Form --}}
    <form action="" method="post">
        @method('PATCH')
      <x-products.form :product="$product" />
    </form>

</x-layout>
