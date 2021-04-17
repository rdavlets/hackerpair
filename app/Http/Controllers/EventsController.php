<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {

        return view('events.index');
    }

    public function show($id)
    {
        return view('events.show')
            ->with('id', $id)
            ->with('name', 'Laravel Hacking and Coffee');
    }

    public function category($category, $subcategory)
    {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
