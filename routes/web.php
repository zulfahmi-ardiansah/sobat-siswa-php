<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Application\{
    RegistrationController,
    LoginController,
    StGlobalController,
    StAttitudeController,
    StLearningController,
    GlobalController,
    MasterController,
    LearningController,
    AttitudeController
};

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

Route::middleware("auth.custom")->group(function () {
    Route::get("/dashboard", [GlobalController::class, 'dashboardPage']);
    Route::any("/changePassword", [GlobalController::class, 'changePasswordPage']);
    Route::prefix("/master")->group(function () {
        Route::any("/class", [MasterController::class, 'classPage']);
        Route::any("/classGroup", [MasterController::class, 'classGroupPage']);
        Route::any("/student", [MasterController::class, 'studentPage']);
        Route::any("/teacher", [MasterController::class, 'teacherPage']);
        Route::any("/alumn", [MasterController::class, 'alumnPage']);
        Route::any("/rule", [MasterController::class, 'rulePage']);
        Route::any("/school", [MasterController::class, 'schoolPage']);
    });  
    Route::prefix("/attitude")->group(function () {
        Route::any("/trophy", [AttitudeController::class, 'trophyPage']);
        Route::any("/trophy/{id}", [AttitudeController::class, 'trophyDetailPage']);
        Route::any("/violation", [AttitudeController::class, 'violationPage']);
        Route::any("/violation/{id}", [AttitudeController::class, 'violationDetailPage']);
        Route::any("/counseling", [AttitudeController::class, 'counselingPage']);
        Route::any("/counseling/{id}", [AttitudeController::class, 'counselingDetailPage']);
        Route::any("/studentSelector", [AttitudeController::class, 'studentSelectorPage']);
        Route::any("/violationStatistic", [AttitudeController::class, 'violationStatisticPage']);
    });
    Route::prefix("/learning")->group(function () {
        Route::any("/announcement", [LearningController::class, 'announcementPage']);
        Route::any("/announcement/{id}", [LearningController::class, 'announcementDetailPage']);
    });
});

Route::middleware("auth.student.custom")->group(function () {
    Route::get("/stdashboard", [StGlobalController::class, 'stdashboardPage']);
    Route::any("/stchangePassword", [StGlobalController::class, 'stChangePasswordPage']);
    Route::any("/stbiodata", [StGlobalController::class, 'stBiodataPage']);
    Route::prefix("/stattitude")->group(function () {
        Route::get("/", function () {
            return redirect(url('/stattitude/trophy'));
        });
        Route::any("/trophy", [StAttitudeController::class, 'stTrophyPage']);
        Route::any("/violation", [StAttitudeController::class, 'stViolationPage']);
        Route::any("/counseling", [StAttitudeController::class, 'stCounselingPage']);
    });
    Route::prefix("/stlearning")->group(function () {
        Route::any("/announcement", [StLearningController::class, 'stAnnouncementPage']);
        Route::any("/announcement/{id}", [StLearningController::class, 'stAnnouncementDetailPage']);
    });
});

Route::prefix("/registration")->group(function () {
    Route::any("/", [RegistrationController::class, 'rootPage']);
    Route::any("/step-1", [RegistrationController::class, 'step1Page'])->middleware("registration");
    Route::any("/step-2", [RegistrationController::class, 'step2Page'])->middleware("registration");
    Route::any("/final", [RegistrationController::class, 'finalPage'])->middleware("registration");
    Route::any("/finish", [RegistrationController::class, 'finishPage'])->middleware("registration");
});

Route::any("/", function () {
    return redirect(url('/login-student'));
});

Route::any("/login", function () {
    return redirect(url('/login-student'));
});

Route::any("/logout", [LoginController::class, 'logoutPage']);
Route::any("/login-student", [LoginController::class, 'studentPage']);
Route::any("/login-teacher", [LoginController::class, 'teacherPage']);