<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    public function home(){
        $people=Person::all();
        return view('pages.home', compact('people'));
    }

    public function showPerson(Person $person){
        return view('pages.single', compact('person'));
    }

    public function createPerson(){
        return view('pages.form');
    }

    public function savePerson(Request $request){
        $data = $request->all();
        $person = new Person;
        $person->firstName=$data['firstName'];
        $person->lastName=$data['lastName'];
        $person->dateOfBirth=$data['dateOfBirth'];
        $person->height=$data['height'];
        $person -> save();
        return redirect()->route('home');
    }

    public function deletePerson(Person $person){
        $person->delete();
        return redirect()->route('home');
    }
}
