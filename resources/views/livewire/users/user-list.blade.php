<ul class="mt-4">
    @foreach ($users as $user)
    <li class="border-b py-2 mb-2 flex justify-between" wire:key="{{$user->id}}">
        <a href="/users/view/{{$user->id}}" class="text-blue-700" wire:navigate>
            {{$user->name}}
        </a>
        <button class="text-red-500 text-xl font-bold" wire:click="delete({{$user->id}})"> &times;

        </button>
    </li>

    @endforeach
</ul>
