<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "company" => "Tech Company"
            ],
            [
                "id" => 2,
                "title" => "Product Manager",
                "company" => "E-commerce Inc."
            ],
            [
                "id" => 3,
                "title" => "Data Analyst",
                "company" => "Analytics Firm"
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            "id" => 1,
            "title" => "Software Engineer",
            "company" => "Tech Company"
        ],
        [
            "id" => 2,
            "title" => "Product Manager",
            "company" => "E-commerce Inc."
        ],
        [
            "id" => 3,
            "title" => "Data Analyst",
            "company" => "Analytics Firm"
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job["id"] == $id);

    return view('job', ["job" => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
