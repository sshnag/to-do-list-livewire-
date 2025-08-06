<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2xl text-gray-800 mb-5">
            Create New Account
        </h2>
    </div>
    @if ((session('success')))
       <span class="text-green-500">{{session('success')}}</span>
    @endif
    <form wire:submit="create" action="">
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

    <label for="" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Password</label>
<input wire:model='password' type="text" id="password" placeholder="" class="ring-1 ring-insect ring-gray-100 text-gray-900 text-sm rounded block w-full">
    @error('password')
        <span class="text-red-500 text-xs">{{$message}}</span>
    @enderror

    <label for="" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Profile Picture</label>
<input wire:model='image' accept="image/png, image.jpeg" type="file" id="image" placeholder"" class="ring-1 ring-insect ring-gray-100 text-gray-900 text-sm rounded block w-full">
    @error('image')
        <span class="text-red-500 text-xs">{{$message}}</span>
    @enderror
        @if ($image)
        <img src="{{$image->temporaryUrl()}}" class="rounded w-10 h-10 mt-5 block" alt="">

        @endif

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading...</span>
        </div>

        <div wire:loading.delay>
            <span class="text-green-500">Sending...</span>
        </div>
    <button type="button" @click="$dispatch('user-created')" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600" type="submit">Reload List
    <button wire:loading.class.remove="text-black" wire:loading.attr="disabled" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600" type="submit">Create +

    </button>
</form>
</div>
