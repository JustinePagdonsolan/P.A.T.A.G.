<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/register/role', 'auth.register-role')->name('register.role');
Route::view('/register/citizen', 'auth.register-role-citizen')->name('register.citizen');
Route::view('/register/researcher', 'auth.register-role-researcher')->name('register.researcher');
Route::view('/register/journalist', 'auth.register-role-journalist')->name('register.journalist');

Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
Route::view('/news', 'pages.news')->name('news');
Route::view('/service', 'pages.service')->name('service');
Route::view('/contract', 'pages.contract')->name('contract');
Route::view('/about', 'pages.about')->name('about');
Route::view('/methodology', 'pages.methodology')->name('methodology');
Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/hub', 'hub.index')->name('hub.index');
Route::view('/hub/surveys', 'hub.surveys')->name('hub.surveys');
Route::view('/hub/representatives', 'hub.representatives')->name('hub.representatives');
Route::view('/hub/budget-tracker', 'hub.budget')->name('hub.budget');

Route::view('/profile', 'profile.index')->name('profile.index');
Route::view('/profile/settings', 'profile.settings')->name('profile.settings');
Route::view('/profile/privacy-security', 'profile.privacy')->name('profile.privacy');
Route::view('/profile/notifications', 'profile.notifications')->name('profile.notifications');
Route::view('/profile/activity', 'profile.activity')->name('profile.activity');

Route::view('/officials', 'officials.index')->name('officials.index');
Route::view('/officials/1', 'officials.show')->name('officials.show');
Route::view('/bills', 'bills.index')->name('bills.index');
Route::view('/bills/1', 'bills.show')->name('bills.show');
