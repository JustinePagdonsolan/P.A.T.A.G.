<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/register/role', 'auth.register-role')->name('register.role');
Route::view('/register/citizen', 'auth.register-role-citizen')->name('register.citizen');
Route::view('/register/researcher', 'auth.register-role-researcher')->name('register.researcher');
Route::view('/register/journalist', 'auth.register-role-journalist')->name('register.journalist');
Route::view('/officials', 'officials.index')->name('officials.index');
Route::view('/officials/1', 'officials.show')->name('officials.show');
Route::view('/bills', 'bills.index')->name('bills.index');
Route::view('/bills/1', 'bills.show')->name('bills.show');
