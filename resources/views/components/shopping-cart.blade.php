<div class="flex flex-col mt-8">
    <h2 class="text-lg font-semibold mb-4">Shopping Cart</h2>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        @if (count($items) > 0)
            <ul class="divide-y divide-gray-200">
                @foreach ($items as $item)
                    <li class="flex py-4 px-4 sm:px-6">
                        <div class="flex-shrink-0">
                            <img class="h-16 w-16 rounded-md object-cover" src="{{ $item->image }}" alt="{{ $item->name }}">
                        </div>

                        <div class="ml-6 flex-1 flex flex-col">
                            <div class="flex">
                                <h3 class="text-sm font-medium">
                                    <a href="{{ $item->url }}">{{ $item->name }}</a>
                                </h3>
                                <p class="ml-4 text-sm text-gray-500">{{ $item->price }}</p>
                            </div>
                            <div class="flex-1 flex items-end justify-between">
                                <div class="flex">
                                    <button class="font-medium text-red-500 hover:text-red-700 focus:outline-none" wire:click="removeItem('{{ $item->rowId }}')">Remove</button>
                                </div>
                                <div class="flex items-center">
                                    <button class="text-gray-400 hover:text-gray-600 focus:outline-none" wire:click="decreaseQty('{{ $item->rowId }}')">
                                        <span class="sr-only">Decrease quantity</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M13 7H7v6h6V7zm2-2v10a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <input class="mx-2 border border-gray-300 text-center w-8" type="number" wire:model="qty.{{ $item->rowId }}" readonly>
                                    <button class="text-gray-400 hover:text-gray-600 focus:outline-none" wire:click="increaseQty('{{ $item->rowId }}')">
                                        <span class="sr-only">Increase quantity</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M13 7H7v6h6V7zm2-2v10a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li
