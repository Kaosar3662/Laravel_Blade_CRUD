<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Create a product</h1>
  <form action="{{route('product.store')}}" method="post">
    @csrf
    @method('post')
    <div>
      <label for="name"></label>
      <input type="text" name="name" placeholder="Name" required>
    </div>
    <div>
      <label for="Qty"></label>
      <input type="text" name="qty" placeholder="Qty" required>
    </div>
    <div>
      <label for="price"></label>
      <input type="text" name="price" placeholder="Price" required>
    </div>
    <div>
      <label for="Description"></label>
      <input type="text" name="description" placeholder="Description" required>
    </div>
    <button type="submit">Add Product</button>
  </form>
</body>

</html>