<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

Componente  {{ $counter }}

<button wire:click="suma(1)" class="bg-red-100"> + 1 </button>


<br>
<input type="text" wire:model="counter"  class=" bg-companyColor-primary">
<input type="text" wire:model.lazy="counter"  class="btnSave text-white">
<input type="text" wire:model.defer="counter"  class="btnSave">

</div>
