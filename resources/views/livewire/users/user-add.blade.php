<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">

<form action="" wire:submit="save">
            <label for="" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Name</label>
    <input wire:model='name' type="text" id="name" placeholder="Name..." class="ring-1 ring-insect ring-gray-100 text-gray-900 text-sm rounded block w-full">
 @error('name')
        <span class="text-red-500 text-xs">{{$message}}</span>
 @enderror
     <label for="" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Email</label>

<input wire:model='email' type="email" id="email" placeholder="Email..." class="ring-1 ring-insect ring-gray-100 text-gray-900 text-sm rounded block w-full">
 @error('email')
        <span class="text-red-500 text-xs">{{$message}}</span>
 @enderror
    <button class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">+
    Add User
</button>
</form>
</div>
