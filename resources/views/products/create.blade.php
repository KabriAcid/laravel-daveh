<x-layout>
    <h1>New Product</h1>

    <form action="{{ route('products.store') }}" method="post">
        @crsf;
        <!-- Name -->
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <!-- Description -->
        <div>
            <label for="">Description</label>
            <textarea name="description" id=""></textarea>
        </div>
        <!-- Size -->
        <div>
            <label for="">Size</label>
            <input type="text" name="size">
        </div>
        <!-- Button -->
        <button>Save</button>
    </form>
</x-layout>