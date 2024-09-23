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
        <h2>Create product</h2>

        <form action={{route('products.store')}} method="POST">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Insert name for the product..." required>

            <br>

            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Insert description for the product..." required>

            <br>

            <fieldset>
                <legend>Product available?</legend>
                
                <div>
                    <input type="radio" id="yes" name="available" value="1" checked />
                    <label for="yes">Yes</label>
                </div>
                
                <div>
                    <input type="radio" id="no" name="available" value="0" />
                    <label for="dewey">No</label>
                </div>
            </fieldset>

            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Insert price for the product..." required>

            <button type="submit">Aggiungi</button>
        </form>
    </body>
</html>