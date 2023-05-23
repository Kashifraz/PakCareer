<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\MessageController;
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
    return view('index');
})->name('index')->middleware('guest');
//admin Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('/admin/students', [AdminController::class, 'showStudents'])->middleware(['auth', 'verified'])->name('admin.students');
Route::post('/admin/students', [AdminController::class, 'showStudents'])->middleware(['auth', 'verified'])->name('admin.students');
Route::get('/admin/students/delete/{user}', [AdminController::class, 'deleteStudent'])->middleware(['auth', 'verified'])->name('delete.students');
Route::get('/admin/counselors', [AdminController::class, 'showCounselors'])->middleware(['auth', 'verified'])->name('admin.counselors');
Route::post('/admin/counselors', [AdminController::class, 'showCounselors'])->middleware(['auth', 'verified'])->name('admin.counselors');
Route::get('/admin/counselors/delete/{user}', [AdminController::class, 'deleteCounselor'])->middleware(['auth', 'verified'])->name('delete.counselors');
Route::get('/admin/counselors/verify/{user}', [AdminController::class, 'verifyCounselor'])->middleware(['auth', 'verified'])->name('verify.counselors');

//counselor Dashboard
Route::get('/counselor/discussion', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('counselor.discussion');

//student dashboard
Route::get('student/discussion', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('student.discussion');

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

Route::resource('message', MessageController::class, [
    'only' => ['index', 'update', 'show', 'create']
]);

Route::middleware('auth')->group(function () {
    Route::get('/message/{student_id}/{counselor_id}', [MessageController::class, 'index'])->name('message');
    Route::post('/post_message', [MessageController::class, 'store'])->name('message.post');
    Route::get('/message_alerts', [MessageController::class, 'showalerts'])->name('message.alerts');
});

Route::get('counselors', [ProfileController::class, 'create'])->name('counselors.show')->middleware('auth');
Route::post('counselors', [ProfileController::class, 'create'])->name('counselors.show')->middleware('auth');

//Experiences Routes
Route::resource('experience', ExperienceController::class, [
    'only' => ['store', 'update', 'destroy']
])->middleware('auth');

//Education Routes
Route::resource('education', EducationController::class, [
    'only' => ['store', 'update', 'destroy']
])->middleware('auth');

//skill Routes
Route::resource('skill', SkillController::class, [
    'only' => ['store', 'update', 'destroy']
])->middleware('auth');

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
