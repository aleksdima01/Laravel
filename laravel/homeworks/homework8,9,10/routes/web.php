<?php

use App\Events\NewsHidden;
use App\Http\Controllers\LogController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logs', [LogController::class, 'showLogs']);

Route::get('/news/create', function () {
    $news = new News();
    $news->title = 'Test new title';
    $news->body = 'Test new body';
    $news->save();
    echo storage_path();
    return $news;
});

Route::get('/news/{id}/hide', function ($id) {
    $news = News::findOrFail($id);
    $news->hidden = true;
    $news->save();
    NewsHidden::dispatch($news);
    return "News" . ' ' . $id . ' ' . "hidden";
});
