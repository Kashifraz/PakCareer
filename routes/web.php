<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\MetaAnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SkillController;
use App\Models\Question;
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
    return view('welcome');
});
//admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

//counselor Dashboard
Route::get('/counselor/dashboard', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('counselor.dashboard');

//student dashboard
Route::get('student/dashboard', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('student.dashboard');

//Account settings 
Route::middleware('auth')->group(function () {
    Route::get('/setting', [SettingController::class, 'edit'])->name('setting.edit');
    Route::patch('/setting', [SettingController::class, 'update'])->name('setting.update');
    Route::delete('/setting', [SettingController::class, 'destroy'])->name('setting.destroy');
});

// Profile Routes
Route::resource('profile', ProfileController::class, [
    'only' => ['index', 'update', 'show', 'create']
]);

Route::get('counselors', [ProfileController::class, 'create'])->name('counselors.show');
Route::post('counselors', [ProfileController::class, 'create'])->name('counselors.show');

//Experiences Routes
Route::resource('experience', ExperienceController::class, [
    'only' => ['store', 'update', 'destroy']
]);

//Education Routes
Route::resource('education', EducationController::class, [
    'only' => ['store', 'update', 'destroy']
]);

//Education Routes
Route::resource('skill', SkillController::class, [
    'only' => ['store', 'update', 'destroy']
]);

//Discussion Forum
Route::middleware('auth')->group(function () {
    Route::post('/askquestion', [QuestionController::class, 'store'])->name('ask.question');
    Route::post('/postanswer', [AnswerController::class, 'store'])->name('post.answer');
    Route::get('/showquestion/{question}', [QuestionController::class, 'show'])->name('show.question');
    Route::get('/deletequestion/{question}', [QuestionController::class, 'destroy'])->name('question.destroy');
    Route::get('/countupvote/{answer}/{user}', [MetaAnswerController::class, 'countUpVote'])->name('count.upvote');
    Route::get('/countdownvote/{answer}/{user}', [MetaAnswerController::class, 'countDownVote'])->name('count.downvote');
});

require __DIR__ . '/auth.php';
