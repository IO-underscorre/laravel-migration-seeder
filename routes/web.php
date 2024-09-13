<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'Welcome!';

    $main_sections = [
        [
            'section_title' => 'Section',
            'section_text' => 'Code ipsum variable loop sit amet, null pointer exception semicolon error integer. Debugging stack overflow binary, function void recursive syntax spaghetti. Console log array overflow bracket callback return undefined. Null object keyframe refactor snippet pseudocode regex div flexbox float overflow hidden. Semicolon compile iterate breakpoint, inline const bug bash. Merge conflict for loop await async, deploy fetch API.',
        ]
    ];

    return view('home', compact('title', 'main_sections'));
})->name('home');
