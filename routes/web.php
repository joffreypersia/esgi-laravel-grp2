<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function() {
    $projects = [
        [
            'title' => 'Ma web app Laravel',
            'description' => 'App SPA codée avec Laravel',
            'technologies' => ['Laravel', 'TailwindCSS', 'AlpineJS']
        ],
        [
            'title' => 'Mon site e-commerce',
            'description' => 'Site e-commerce développé avec WooCommerce',
            'technologies' => ['WordPress', 'WooCommerce', 'PHP']
        ],
        [
            'title' => 'Portfolio React',
            'description' => 'Portfolio personnel réalisé en React',
            'technologies' => ['React', 'CSS Modules', 'Netlify']
        ]
    ];
    return view('projects.index', compact('projects'));
})->name('projects.index');

Route::get('/projects/{id}', function($id) {
    $projects = [
        0 => [
            'title' => 'Ma web app Laravel',
            'description' => 'App SPA codée avec Laravel',
            'technologies' => ['Laravel', 'TailwindCSS', 'AlpineJS']
        ],
        1 => [
            'title' => 'Mon site e-commerce',
            'description' => 'Site e-commerce développé avec WooCommerce',
            'technologies' => ['WordPress', 'WooCommerce', 'PHP']
        ],
        2 => [
            'title' => 'Portfolio React',
            'description' => 'Portfolio personnel réalisé en React',
            'technologies' => ['React', 'CSS Modules', 'Netlify']
        ]
    ];

    $project = Arr::get($projects, $id);

    return view('projects.show', compact('project'));
})->name('projects.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
