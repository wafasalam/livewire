<div>
    
    <input type="number" wire:model="number1" placeholder="number1">
    <select class="w-24" wire:model="action">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
    <option>%</option>
    </select>
    <input type="number" wire:model="number2" placeholder="number2">
    <button wire:click="calculate" {{ $disabled ? ' disabled' : ''}}>=</button>
 <p class="text-3xl">{{$result}}</p>
</div>