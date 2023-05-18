<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use \App\Http\Controllers\MeetingScheduleController;
use \App\Http\Controllers\ReceptController;

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
    return view('home-page');
});

Route::get('/medicines-dashboard', [MedicineController::class, 'showAllMedicines']);
Route::get('/medicines/delete-process/{id}', [MedicineController::class, 'deleteMedicine']);
Route::get('/medicines/add-medicine-form', [MedicineController::class, 'showAddMedicine']);
Route::post('/medicines/add-medicine-process', [MedicineController::class, 'addMedicineProcess'])->name('form.submit');
Route::get('/medicines-update-medicine-form/{id}', [MedicineController::class, 'showUpdateMedicine']);
Route::post('/medicines/update-medicine-process/{id}', [MedicineController::class, 'updateMedicineProcess']);

Route::get('/meeting-schedule-dashboard', [MeetingScheduleController::class, 'showAllMeetingSchedule']);
Route::get('/add-meeting-schedule', [MeetingScheduleController::class, 'showAddScheduleForm']);
Route::post('/add-meeting-schedule-process', [MeetingScheduleController::class, 'addScheduleProcess'])->name('schedule.post');
Route::get('/delete-meeting-process/{id}', [MeetingScheduleController::class, 'deleteSchedule']);
Route::get('/update-meeting-schedule-form/{id}', [MeetingScheduleController::class, 'showUpdateSchedule']);
Route::post('/update-meeting-schedule-process/{id}', [MeetingScheduleController::class, 'updateScheduleProcess']);

// Route::get('/recept-dashboard', [ReceptController::class, 'showDashboard']);

