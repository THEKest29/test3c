<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\AnswersController;

Route::get('/quests', [QuestController::class, 'index']);
Route::post('/quests', [QuestController::class, 'show'])->name('quest.show');
Route::get('/quests/{id}', [QuestController::class, 'share']);
Route::get('/quests/{id}/answers', [AnswersController::class, 'vie']);
Route::post('/quests/{id}/answers', [AnswersController::class, 'learn'])->name('answers.learn');
