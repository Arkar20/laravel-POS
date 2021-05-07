<div>
    <div class="rounded overflow-hidden shadow-lg ml-4">
      <img   src="/img.jpg" alt="Mountain" class="mx-auto mt-4">
      <div class="px-6 py-2">
        <div class="font-bold text-xl mb-2">{{$product->size->size}}</div>
        <p class="text-gray-700 text-base">
            {{$product->category->thickness}}|{{$product->color->color}}
        </p>
      </div>
      <div class="px-6 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$product->category->madein}}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$this->price}}MMk</span>
        
      </div>
      <input type="number" class="my-2 mx-3 border-2" value="1000" min="0" wire:model.defer="qty"/>
      <x-button wire:click="addtocart({{$product->id}})">Add To Cart</x-button>
    </div>
</div>
