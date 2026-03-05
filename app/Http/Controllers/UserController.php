<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        $users = [
            ['id' => 1, 'name' => 'Juan', 'email' => 'juan@juan.com'],
            ['id' => 2, 'name' => 'Ana',  'email' => 'ana@ana.com'],
            ['id' => 3, 'name' => 'Pepe', 'email' => 'pepe@pepe.com']
        ];

        return view('user.index', ['users' => $users]);
    }

    function create() {

    }

    function store() {

    }

    function show() {

    }
    function edit() {

    }
    function update() {

    }
    function destroy() {

    }
}
