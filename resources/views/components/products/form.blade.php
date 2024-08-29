@csrf
<!-- Name -->
<div>
    <label for="">Name</label>
    <input type="text" value="{{ old('name', $product->name ?? '')}}" name="name">
</div>
<!-- Description -->
<div>
    <label for="">Description</label>
    <textarea name="description">{{ old('description', $product->description ?? '')}}</textarea>
</div>
<!-- Size -->
<div>
    <label for="">Size</label>
    <input type="number" value="{{ old('size', $product->size ?? '')}}" name="size">
</div>
<!-- Button -->
<button>Save</button>