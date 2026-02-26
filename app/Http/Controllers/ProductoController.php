<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function index() {
        $productos = [

        ];
        return view('producto', $productos);
    }

    function create() {}

    function store() {}

    function show() {}
    function edit() {}
    function update() {}
    function destroy() {}
}
