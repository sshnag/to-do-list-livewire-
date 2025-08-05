<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Livewire Testing</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="min-h-screen bg-green-100">
    <header class="bg-white shadow">
        <div class="flex max-w-5xl mx-auto py-6 px-4">
            <h2 class="font-semibold text-xl text-grey-800 leading-tight">
                Livewire Testing
            </h2>
            <a href="/users/add" class="text-green-600 ms-6" wire:navigate.hover>
                +Add User
            </a>
        </div>
    </header>
    <main class="max-x-3xl mx-auto py-6 px-4">
        {{$slot}}
    </main>
</div>
</body>
</html>
