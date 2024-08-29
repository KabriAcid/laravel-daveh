<x-layout>
    <h1>Edit Product</h1>
    {{-- Display errors --}}
    <x-errors/>
    
    {{-- Form --}}
    <form action="" method="post">
      <x-products.form :product="$product" />
    </form>

</x-layout>
