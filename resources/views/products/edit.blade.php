<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product_API</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Use PUT or PATCH for updating -->
        
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        
            <br>
        
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $product->description }}" required>
        
            <br>
        
            <fieldset>
                <legend>Product available?</legend>
                
                <div>
                    <input type="radio" id="yes" name="available" value="1" {{ $product->available ? 'checked' : '' }} />
                    <label for="yes">Yes</label>
                </div>
                
                <div>
                    <input type="radio" id="no" name="available" value="0" {{ !$product->available ? 'checked' : '' }} />
                    <label for="no">No</label>
                </div>
            </fieldset>
        
            <label for="price">Price</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
        
            <br>
        
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        
            <br>
        
            <label for="categories">Select Category</label>
            <select name="categories[]" id="categories" multiple>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ $product->categories->contains($category->id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        
            <br>
        
            <button type="submit">Update Product</button>
        </form>
    </body>
</html>