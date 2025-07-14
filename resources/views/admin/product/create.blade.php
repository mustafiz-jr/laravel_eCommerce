@extends('admin.pages.layouts.app')



@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class=" mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Form Header -->
            <div class="bg-teal-600 px-6 py-4">
                <h2 class="text-2xl font-bold text-white">Add New Product</h2>
            </div>
            <!-- Product Form -->
            <form class="p-6 space-y-6">
                @csrf
                <!-- Basic Information Section -->
                <div class="border-b pb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Product Creation</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Product Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Product Title*</label>
                            <input type="text" id="title" name="title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Category*</label>
                            <select id="category_id" name="category_id" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                                @foreach ($categories as $category)
                                    <option value="" selected disabled>select a category for your product</option>
                                    <option value="{{ $category->slug }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <!-- Slug -->
                        <div>
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug*</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500">example.com/</span>
                                <input type="text" id="slug" name="slug" required
                                    class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-teal-500 focus:ring-teal-500 p-2 border">
                            </div>
                        </div> --}}

                        <!-- Short Description -->
                        <div class="md:col-span-2">
                            <label for="short_description" class="block text-sm font-medium text-gray-700">Short
                                Description</label>
                            <textarea id="short_description" name="short_description" rows="2"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="border-b pb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Pricing</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Regular Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Regular Price*</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">$</span>
                                </div>
                                <input type="number" id="price" name="price" step="0.01" min="0" required
                                    class="block w-full pl-7 pr-12 rounded-md border-gray-300 focus:border-teal-500 focus:ring-teal-500 p-2 border">
                            </div>
                        </div>

                        <!-- Sale Price -->
                        <div>
                            <label for="sale_price" class="block text-sm font-medium text-gray-700">Sale Price</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">$</span>
                                </div>
                                <input type="number" id="sale_price" name="sale_price" step="0.01" min="0"
                                    class="block w-full pl-7 pr-12 rounded-md border-gray-300 focus:border-teal-500 focus:ring-teal-500 p-2 border">
                            </div>
                        </div>

                        <!-- Discount -->
                        <div>
                            <label for="discount" class="block text-sm font-medium text-gray-700">Discount (%)</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="number" id="discount" name="discount" min="0" max="100"
                                    class="block w-full pr-12 rounded-md border-gray-300 focus:border-teal-500 focus:ring-teal-500 p-2 border">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inventory & Shipping -->
                <div class="border-b pb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Inventory & Shipping</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Quantity -->
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700">Stock Quantity*</label>
                            <input type="number" id="quantity" name="quantity" min="0" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                        </div>

                        <!-- Shipping Cost -->
                        <div>
                            <label for="shipping_cost" class="block text-sm font-medium text-gray-700">Shipping Cost</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">$</span>
                                </div>
                                <input type="number" id="shipping_cost" name="shipping_cost" step="0.01" min="0"
                                    class="block w-full pl-7 pr-12 rounded-md border-gray-300 focus:border-teal-500 focus:ring-teal-500 p-2 border">
                            </div>
                        </div>

                        <!-- Shipping Method -->
                        <div>
                            <label for="shipping_method" class="block text-sm font-medium text-gray-700">Shipping
                                Method</label>
                            <select id="shipping_method" name="shipping_method"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                                <option value="">Select Method</option>
                                <option value="standard">Standard Shipping</option>
                                <option value="express">Express Shipping</option>
                                <option value="pickup">Store Pickup</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Images Section -->
                <div class="border-b pb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Images</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Main Image -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Main Image*</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-teal-600 hover:text-teal-500 focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input id="image" name="image" type="file" class="sr-only"
                                                required>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG up to 2MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Images -->
                        <div>
                            <label for="images" class="block text-sm font-medium text-gray-700">Additional
                                Images</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-gray-600">
                                        <label for="images"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-teal-600 hover:text-teal-500 focus-within:outline-none">
                                            <span>Upload files</span>
                                            <input id="images" name="images" type="file" multiple
                                                class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">Up to 5 images</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO & Status -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">SEO & Status</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- SEO Title -->
                        <div>
                            <label for="seo_title" class="block text-sm font-medium text-gray-700">SEO Title</label>
                            <input type="text" id="seo_title" name="seo_title"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                        </div>

                        <!-- Keywords -->
                        <div>
                            <label for="keywords" class="block text-sm font-medium text-gray-700">Keywords</label>
                            <input type="text" id="keywords" name="keywords" placeholder="comma separated"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 p-2 border">
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1 flex items-center space-x-4">
                                <div class="flex items-center">
                                    <input id="status_active" name="status" type="radio" value="1"
                                        class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                    <label for="status_active" class="ml-2 block text-sm text-gray-700">Active</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="status_inactive" name="status" type="radio" value="0" checked
                                        class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                    <label for="status_inactive" class="ml-2 block text-sm text-gray-700">Inactive</label>
                                </div>
                            </div>
                        </div>

                        <!-- Featured -->
                        <div>
                            <div class="flex items-center">
                                <input id="featured" name="featured" type="checkbox" value="1"
                                    class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
                                <label for="featured" class="ml-2 block text-sm text-gray-700">Featured Product</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-4 pt-6">
                    <button type="button"
                        class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                        Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
