<?php


use App\Http\Controllers\LessonController;
use App\Http\Controllers\ParticipantController;
use App\http\controllers\testController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use App\Models\lesson;
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('register',function(){
    return view('auth.register');
});


//Routes for comont controller
Route::get('/dashboard', function () {
    // return view('teacher.teacherDashboard');
    if (Auth::user()->status=="teacher") {
        return view('teacher.teacherDashboard');
    }else{
        // die(Auth::user()->status);
        return view('student.studentDashboard');
    }
})->middleware(['auth'])->name('dashboard');

Route::get('welcome',function(){
    $students = User::all();
    return view('welcome',['students'=>$students]);
})->name('welcome');

Route::middleware('auth')->group(function(){

});
//teacher routes
Route::middleware('teacherMiddleware')->group(function(){

    Route::get('teacherDashboard',function(){
        return view('teacher.teacherDashboard');
    })->name('teacherDashboard');

    Route::get('createLesson',[LessonController::class,'create'])->name('createLesson');
    Route::post('createLesson',[LessonController::class,'store'])->name('createLesson');

    //there are a list of route about the student and teacher
    Route::get('studentlist',[studentController::class,'show'])->name('studentlist');

    //listof route on lesson
    Route::get('lessonInfo',[LessonController::class,'lessonInfo'])->name('lessonInfo');
    //see all lessons
    Route::get('lessonShow',[LessonController::class,'show'])->name('lessonShow');
    Route::get('deleteLesson',[LessonController::class,'destroy'])->name('deleteLesson');

    Route::get('updateLesson',function(){
        $lesson = lesson::where('id',$_GET['id'])->get();
        return view('teacher.lesson.update',compact('lesson'));
    })->name('updateLesson');

    Route::post('updateLesson',[LessonController::class,'update'])->name('updateLesson');
    Route::get('startLesson',[LessonController::class,'startLesson'])->name('startLesson');
    Route::get('stopLesson',[LessonController::class,'stopLesson'])->name('stopLesson');

    //route concernig the teacher and the acceess
    Route::get('createTeacher',[teacherController::class,'createTeacher'])->name('createTeacher');
    Route::get('deleteTeaceher',[teacherController::class,'deleteTeaceher'])->name('deleteTeaceher');
    Route::get('deleteStudent',[teacherController::class,'deleteStudent'])->name('deleteStudent');
    Route::get('upcomi  ngLesson',[LessonController::class,'upcomingLesson'])->name('upcomingLesson');

});


//student route
Route::middleware('studentMiddleware')->group(function(){
    Route::get('studentDashboard',function(){
        return view('student.studentDashboard');
    })->name('studentDashboard');

    Route::get('joinCourse',[LessonController::class,'join'])->name('newCourse');
    Route::get('allLesson',[LessonController::class,'allLesson'])->name('allLesson');
    Route::get('suscribe',[ParticipantController::class,'store'])->name('suscribe');
    Route::get('unSuscribe',[ParticipantController::class,'destroy'])->name('unSuscribe');
    Route::get('studentCourseList',[LessonController::class,'studentCourseList'])->name('studentCourseList');
    Route::get('showOneLessonStudent',[LessonController::class,'showOneLessonStudent'])->name('showOneLessonStudent');
});



Route::get('/freeTeacher',[teacherController::class,'freeTeacher']);
require __DIR__.'/auth.php';




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
