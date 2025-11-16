<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  @vite('resources/css/app.css')
</head>
<body class="h-full bg-gray-50 flex flex-col items-center p-6">

  <div class="flex justify-between items-center w-full max-w-6xl mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Products</h1>

    <div>
      @if (session()->has('success'))
        <div class="px-4 py-2 bg-green-500 text-white rounded">
          {{ session('success') }}
        </div>
      @endif
    </div>

    <a href="{{ route('product.create') }}">
      <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
        Add
      </button>
    </a>
  </div>

  <div class="w-full max-w-6xl overflow-x-auto">
    <table class="w-full border border-red-500 text-left">
      <thead class="bg-red-500 text-white">
        <tr>
          <th class="px-4 py-2 border border-red-500">ID</th>
          <th class="px-4 py-2 border border-red-500">Name</th>
          <th class="px-4 py-2 border border-red-500">Qty</th>
          <th class="px-4 py-2 border border-red-500">Price</th>
          <th class="px-4 py-2 border border-red-500">Description</th>
          <th class="px-4 py-2 border border-red-500">Edit</th>
          <th class="px-4 py-2 border border-red-500">Delete</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        @foreach($products as $product)
          <tr class="hover:bg-red-50">
            <td class="px-4 py-2 border border-red-500">{{ $product->id }}</td>
            <td class="px-4 py-2 border border-red-500">{{ $product->name }}</td>
            <td class="px-4 py-2 border border-red-500">{{ $product->qty }}</td>
            <td class="px-4 py-2 border border-red-500">{{ $product->price }}</td>
            <td class="px-4 py-2 border border-red-500">{{ $product->description }}</td>
            <td class="px-4 py-2 border border-red-500">
              <a href="{{ route('product.edit', ['product'=> $product]) }}" class="text-red-500 hover:text-red-700 font-medium">
                Edit
              </a>
            </td>
            <td class="px-4 py-2 border border-red-500">
              <form method="post" action="{{ route('product.destroy', ['product'=> $product]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 cursor-pointer"/>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>