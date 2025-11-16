<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
  @vite('resources/css/app.css')
</head>
<body class="h-full bg-gray-50 flex items-center justify-center">

  <div class="w-full max-w-lg bg-white p-8 rounded shadow-md border border-red-500">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create a Product</h1>

    <form action="{{ route('product.store') }}" method="post" class="space-y-4">
      @csrf
      @method('post')

      <div>
        <label for="name" class="block text-gray-700 mb-1">Name</label>
        <input type="text" name="name" id="name" placeholder="Product Name" required
               class="w-full px-4 py-2 border border-red-500 rounded focus:outline-none focus:ring-2 focus:ring-red-500"/>
      </div>

      <div>
        <label for="qty" class="block text-gray-700 mb-1">Quantity</label>
        <input type="text" name="qty" id="qty" placeholder="Quantity" required
               class="w-full px-4 py-2 border border-red-500 rounded focus:outline-none focus:ring-2 focus:ring-red-500"/>
      </div>

      <div>
        <label for="price" class="block text-gray-700 mb-1">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" required
               class="w-full px-4 py-2 border border-red-500 rounded focus:outline-none focus:ring-2 focus:ring-red-500"/>
      </div>

      <div>
        <label for="description" class="block text-gray-700 mb-1">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" required
               class="w-full px-4 py-2 border border-red-500 rounded focus:outline-none focus:ring-2 focus:ring-red-500"/>
      </div>

      <button type="submit" 
              class="w-full bg-red-500 text-white font-semibold py-2 rounded hover:bg-red-600 transition">
        Add Product
      </button>
    </form>
  </div>

</body>
</html>