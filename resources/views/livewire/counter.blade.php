<div>
    {{-- Success is as dangerous as failure. --}}
    <button wire:click="increment" class="py-2 px-4 bg-indigo-600 rounded text white">+</button>
    <span>{{$count}}</span>
    <button wire:click="decrement"class="py-2 px-4 bg-indigo-600 rounded text white">-</button>
</div>
