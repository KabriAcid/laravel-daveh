<x-layout>
    <h1>New Product</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('products.store') }}" method="post">
        @csrf
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
            <input type="number" name="size">
        </div>
        <!-- Button -->
        <button>Save</button>
    </form>
</x-layout>