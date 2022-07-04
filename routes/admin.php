<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/')->name('admin.')->group(function(){ 
    Route::get('posts',function(){return 'posts';})->name('osts');
    Route::get('news',function(){return 'news';})->name('ews');
    Route::get('comments',function(){return 'cimments';})->name('omments');
    Route::get('blog',function(){return 'blog';})->name('log');
    Route::get('users',function(){return 'users';})->name('sers');
    Route::get('videos',function(){return 'videos';})->name('ideos');
    });
    