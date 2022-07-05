<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\Report;

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

Auth::routes();
Route::get('/approval', [App\Http\Controllers\RoleController::class,'approval'])->name('approval');

Route::middleware(['auth','approved'])->group(function () {
    Route::middleware(['client'])->group(function () {
        Route::get('/client', [App\Http\Controllers\RoleController::class,'client'])->name('client');
        Route::get('/client/completed/{id}', [TransportController::class,'clientReqCompleted'])->name('client.completed');
        Route::get('/client/feedback', [TransportController::class,'feedback'])->name('client.feedback');
        Route::post('/client/feedback', [TransportController::class,'feedbackpost'])->name('client.feedback.post');
        
        Route::get('/client/TransportReq',[TransportController::class,'transportreq'])->name('TransportReq');
        Route::post('/client/TransportReq',[TransportController::class,'transportreqPost'])->name('TransportReqPost');
    });
    Route::middleware(['Leader'])->group(function () {
        Route::get('/Leader', [RoleController::class,'Leader'])->name('Leader');
        Route::get('/Leader/TransportAuth',[TransportController::class,'transportAuth'])->name('TransportAuth');
        Route::get('/TransportAuth/{id}/Approve',[TransportController::class,'Approve']);
        Route::put('/TransportAuth/{id}',[TransportController::class,'update']);
        Route::put('/TransportAuth/{id}/deny',[TransportController::class,'deny'])->name('tranreq.deny');
        Route::put('/TransportAuth/{id}/complete',[TransportController::class,'TransportCompleted'])->name('tranreq.completed');
        Route::get('/Leader/Feedback',[TransportController::class,'feedbackView'])->name('Leader.feedback');
        Route::resource('/vehicleList', CarsController::class);
        Route::resource('/driverList', driverController::class);
        
        Route::get('/Leader/MaintenanceAuth',[MaintenanceController::class,'AuthtMaintenance'])->name('maintenanceAuth');
        Route::put('/MaintenanceAuth/{id}/Approve',[MaintenanceController::class,'MaintApprove'])->name('Mainten.approve');
        Route::put('/MaintenanceAuth/{id}',[MaintenanceController::class,'MaintUpdate'])->name('Mainten.update');
        Route::put('/MaintenanceAuth/{id}/deny',[MaintenanceController::class,'MaintDeny'])->name('Mainten.deny');
        Route::put('/MaintenanceAuth/{id}/complete',[MaintenanceController::class,'maintenancecomplete'])->name('Mainten.completed');
       
        Route::get('/Leader/Completed',[Report::class,'Completed'])->name('Leader.completed'); 
        Route::put('/month',[Report::class,'month'])->name('Leader.month');
        Route::get('/Leader/Report',[Report::class,'Report'])->name('Leader.Report');
    });
    Route::middleware(['driver'])->group(function () {
        Route::get('/driver', [App\Http\Controllers\RoleController::class,'driver'])->name('driver');
        Route::get('/driver/{id}/edit_Reading',[TransportController::class,'editKIlometer'])->name('driver.reading');
        Route::put('/driver/{id}',[TransportController::class,'KIlometerUpdate'])->name('driver.reading.update');
        Route::get('/driver/completed/{id}', [TransportController::class,'driverReqCompleted'])->name('driver.completed');
       // Mintenance request
        Route::get('/driver/maintenanceReq/{id}',[MaintenanceController::class,'RequestMaintenance'])->name('driver.maintenance.req');
        Route::post('/driver/maintenanceReqpost/{id}',[MaintenanceController::class,'RequestMaintenancePost'])->name('driver.maintenance.post');
    });
    Route::middleware(['maintenanceHead'])->group(function () {
        Route::get('/maintenanceHead', [RoleController::class,'maintenHead'])->name('maintenanceHead');
      
        Route::get('/MaintenanceAuth/{id}/Assign',[MaintenanceController::class,'MaintAssign'])->name('Mainten.assign');
        Route::put('/MaintenanceAuth/{id}',[MaintenanceController::class,'MaintUpdate'])->name('Mainten.update');

        Route::get('/maintenanceHead/completed/{id}', [MaintenanceController::class,'MechReqCompleted'])->name('mech.completed');

    });
    
});
Route::middleware(['admin'])->group(function () {
    // Route::get('/admin', [RoleController::class,'admin'])->name('admin');
    Route::get('/admin', [RoleController::class,'unapprovedList'])->name('admin.users');
    Route::get('/users/{user_id}/approve', [RoleController::class,'approve'])->name('admin.user.approve');
});
