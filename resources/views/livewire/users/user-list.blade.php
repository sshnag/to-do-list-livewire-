<div class="mt-10 flex justify-center">
    <div class="w-full max-w-3xl bg-white shadow-xl rounded-xl overflow-hidden">
        <div class="bg-gray-100 px-6 py-4 border-b text-lg font-semibold text-gray-800">
            User List
        </div>
        <input type="text" wire:model.live.throttle.500ms='search' placeholder="Search..." class="ring-1 ring-inset ring-gray-100 text-gray-900 text-sm rounded block w-full p-2.5 mx-auto">
        <button wire:click="update" type="button" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Search
        </button>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-left text-sm font-semibold text-gray-600">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($this->users as $user)
                        <tr wire:key="{{ $user->id }}" class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-800">
                                <a href="/users/view/{{ $user->id }}" class="text-blue-700 hover:underline" wire:navigate>
                                    {{ $user->name }}
                                </a>
                            </td>

                            <td class="px-6 py-4 text-center">
                                <button wire:click="delete({{ $user->id }})"
                                    class="text-red-500 hover:text-red-700 font-bold text-xl"
                                    title="Delete">
                                    &times;
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4">
            {{ $this->users->links() }}
        </div>
    </div>
</div>
