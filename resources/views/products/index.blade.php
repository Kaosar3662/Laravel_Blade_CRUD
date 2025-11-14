<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="max-width:1200px">
  <div style="display: flex; justify-content: space-between; align-items: center; height: fit-content; margin-bottom: 20px; ">
    <h1>Products</h1>
    <a href="{{ route('product.create') }}" style="height: fit-content;">
        <button>Add</button>
    </a>
  </div>

  <div>
    <table border="1" style="width: 100%; border-collapse: collapse;">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Description</th>
        <th>Edit</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->qty }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
        <td><a href="{{ route('product.edit', ['product'=> $product]) }}">Edit</a></td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>