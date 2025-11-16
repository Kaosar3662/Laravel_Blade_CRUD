<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-semibold mb-6 text-center">Edit a Product</h1>
    <form action="{{route('product.update',['product'=> $product])}}" method="post" class="space-y-5">
      @csrf
      @method('put')
      <div>
        <label for="name" class="block mb-1 font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}" required
          class="w-full px-4 py-2 border border-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-700 transition" />
      </div>
      <div>
        <label for="qty" class="block mb-1 font-medium text-gray-700">Qty</label>
        <input type="text" name="qty" id="qty" placeholder="Qty" value="{{$product->qty}}" required
          class="w-full px-4 py-2 border border-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-700 transition" />
      </div>
      <div>
        <label for="price" class="block mb-1 font-medium text-gray-700">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}" required
          class="w-full px-4 py-2 border border-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-700 transition" />
      </div>
      <div>
        <label for="description" class="block mb-1 font-medium text-gray-700">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}" required
          class="w-full px-4 py-2 border border-red-500 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-700 transition" />
      </div>
      <button type="submit"
        class="w-full bg-red-500 text-white font-semibold py-2 rounded-md hover:bg-red-600 transition">Update Product</button>
    </form>
  </div>
</body>

</html>