<?php

use App\Livewire\Users\UserAdd;
use App\Livewire\Users\UserDetail;
use App\Livewire\Users\UserList;
use Illuminate\Support\Facades\Route;


Route::get('/users',UserList::class);
Route::get('/users/view/{id}',UserDetail::class);
Route::get('/users/add',UserAdd::class);


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
