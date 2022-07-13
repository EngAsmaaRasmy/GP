
<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, "index"])->name("home");
Route::post("make-an-appointment", [HomeController::class, "store"])->name("makeAnAppointment");
Route::post('/fetch-doctors', [HomeController::class, 'fetchDoctors']);
Route::post('/fetch-schedule', [HomeController::class, 'fetchSchedule']);



//------------------- upload image for doctor ----------------------
Route::get("edit/{id}", [DoctorController::class, "edit"])->name("edit");
Route::post("update/{id}", [DoctorController::class, "update"])->name("update");

//------------------- route for doctors ------------------
Route::group(["prefix" => "/doctors"], function () {
    Route::get("/login", [DoctorController::class, "getLogin"])->name("doctors.getLogin");
    Route::post("/login", [DoctorController::class, "login"])->name("doctors.login");
    Route::post("/register", [DoctorController::class, "store"])->name("doctors.register");
    
    Route::group(
        ['middleware' => ['doctor_auth']],
        function () {
            Route::get('/', [DoctorController::class, 'dashboard'])->name('dashboard');
            Route::get('/logout', [DoctorController::class, 'logout'])->name('doctors.logout');
            Route::get("/profile/{id}", [DoctorController::class, "editProfile"])->name("doctors.editProfile");
            Route::post("/profile/{id}", [DoctorController::class, "updateProfile"])->name("doctors.updateProfile");
        }
    );
});