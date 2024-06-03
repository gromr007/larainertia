<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     *
     *  array:13 [▼ // app/Http/Controllers/UserController.php:18
        "current_page" => 1
        "data" => []
        "first_page_url" => "http://larainertia.dcr:8810/users?page=1"
        "from" => null
        "last_page" => 1
        "last_page_url" => "http://larainertia.dcr:8810/users?page=1"
        "links" => array:3 [▶]
        "next_page_url" => null
        "path" => "http://larainertia.dcr:8810/users"
        "per_page" => 5
        "prev_page_url" => null
        "to" => null
        "total" => 0
        ]
     *
     */
    public function index()
    {
        //dd(User::paginate(5)->toArray());
        return Inertia::render('Users/Index', [
            'title' => 'Users Index',
            'users' => User::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Users/Create', [
            'title' => 'Users Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function store(Request $request)
    {
        User::create(
            $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email', Rule::unique('users')],
                'password' => ['required'],
            ])
        );

        session()->flash('message', 'Пользователь успешно создан');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Inertia\Response
     */
    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            'title' => 'Users Show',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Inertia\Response
     */
    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'title' => 'Users Edit',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Inertia\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update(
            $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            ])
        );

        session()->flash('message', 'Пользователь успешно изменен');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
