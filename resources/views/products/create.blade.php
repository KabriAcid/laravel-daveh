<x-layout>
    <h1>New Product</h1>

    <x-errors/>
    
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <!-- Name -->
        <div>
            <label for="">Name</label>
            <input type="text" value="{{ old('name')}}" name="name">
        </div>
        <!-- Description -->
        <div>
            <label for="">Description</label>
            <textarea name="description" value="{{ old('description')}}" id=""></textarea>
        </div>
        <!-- Size -->
        <div>
            <label for="">Size</label>
            <input type="number" value="{{ old('size')}}" name="size">
        </div>
        <!-- Button -->
        <button>Save</button>
    </form>
</x-layout>