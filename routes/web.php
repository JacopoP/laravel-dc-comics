<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
->name('home');

Route::get('/person/show/{person}', [MainController::class, 'showPerson'])
->name('person.show');

Route::get('/person/create', [MainController::class, 'createPerson'])
->name('person.create');

Route::post('/person/save', [MainController::class, 'savePerson'])
->name('person.save');

Route::get('/person/delete/{person}', [MainController::class, 'deletePerson'])
->name('person.delete');

Route::get('/person/edit/{person}', [MainController::class, 'editPerson'])
->name('person.edit');

Route::post('/person/change/{person}', [MainController::class, 'changePerson'])
->name('person.change');