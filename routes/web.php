<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return inertia('Home');
});
Route::get('/users', function () {
    return inertia('Users/Index', [
        'users' => User::query()
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10, ['name', 'id'])
            ->withQueryString(),
        'filters' => request()->only(['search'])
    ]);
});
Route::post('/users', function () {
    $attributes = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);

    User::create($attributes);

    return redirect('/users');
});
Route::get('/users/create', function () {
    return inertia('Users/Create');
});
Route::get('/settings', function () {
    return inertia('Settings');
});
