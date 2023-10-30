<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
// add inertia 
use Inertia\Inertia;
use Inertia\Response;
 
class personController extends Controller
{
    //
    function allPerson(){
        // function allPerson(): Response{
        return Inertia::render('Welcome', [
            // 'person' => Person::findOrFail($id)
            'person' => Person::all()
            
        ]);
    }

    function hola(){
        return Inertia::render('Welcome',['name' => 'hola jose']);
    }
}
