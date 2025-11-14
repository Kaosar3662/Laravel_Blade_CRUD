<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Edit a product</h1>
  <form action="{{route('product.update',['product'=> $product])}}" method="post">
    @csrf
    @method('put')
    <div>
      <label for="name"></label>
      <input type="text" name="name" placeholder="Name" value="{{$product->name}}"  required>
    </div>
    <div>
      <label for="Qty"></label>
      <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" required>
    </div>
    <div>
      <label for="price"></label>
      <input type="text" name="price" placeholder="Price" value="{{$product->price}}" required>
    </div>
    <div>
      <label for="Description"></label>
      <input type="text" name="description" placeholder="Description" value="{{$product->description}}" required>
    </div>
    <button type="submit">Update Product</button>
  </form>
</body>

</html>