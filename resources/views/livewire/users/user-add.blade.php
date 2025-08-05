<form action="" wire:submit="save">
<input type="text" class="w-full border rounded p-3" placeholder="Name" wire:model="name">
<div class="text-red-600 text-sm mb-3">
 @error('name')
{{$message}}
 @enderror
</div>
<input type="text" class="w-full border rounded p-3" placeholder="Email" wire:model="email">
<div class="text-red-600 text-sm mb-3">
 @error('email')
{{$message}}
 @enderror
</div>
<button class="rounded bg-green-400 text-white py-2 px-6" type="submit">
    Add User
</button>
</form>
