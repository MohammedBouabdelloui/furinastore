@extends('admin.layout.dash')

@section('content')

@section('name' , 'User Accounts')

@section('description' , 'View accounts of registered users')

<div class="overflow-x-auto">
    
    
    <table class="min-w-[80%] m-auto mt-20 bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-100 border-b">Product</th>
                <th class="px-6 py-3 bg-gray-100 border-b">Description</th>
                <th class="px-6 py-3 bg-gray-100 border-b">Price</th>
                <th class="px-6 py-3 bg-gray-100 border-b">Stock</th>
                <th class="px-5 py-3 bg-gray-100 border-b">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/50" alt="Product Image">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">Product Name 1</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Product description goes here.</td>
                <td class="px-6 py-4 whitespace-nowrap">$19.99</td>
                <td class="px-6 py-4 whitespace-nowrap">100</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">unconfirme</span>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/50" alt="Product Image">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">Product Name 1</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Product description goes here.</td>
                <td class="px-6 py-4 whitespace-nowrap">$19.99</td>
                <td class="px-6 py-4 whitespace-nowrap">100</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Baned</span>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/50" alt="Product Image">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">Product Name 1</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Product description goes here.</td>
                <td class="px-6 py-4 whitespace-nowrap">$19.99</td>
                <td class="px-6 py-4 whitespace-nowrap">100</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="rounded-full bg-green-200 px-3  py-1 text-xs font-semibold text-green-900">Active</span>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
    


@endsection