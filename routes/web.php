<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\User\DashboardComponent as UserDash;
use App\Livewire\Admin\AnneeComponent;
use App\Livewire\Admin\NiveauComponent;
use App\Livewire\Admin\DocumentComponent;
use App\Livewire\Admin\FormationComponent;
use App\Livewire\Admin\AddFormationComponent;
use App\Livewire\Admin\ClasseComponent;
use App\Livewire\Admin\ClasseDetailComponent;
use \App\Livewire\User\DossierComponent;
use \App\Livewire\Admin\AdmissionComponent;
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
    return view('front.welcome');
});

Route::get('/inscription', function () {
    return view('front.inscription');
});

Auth::routes(['verify' => true]);

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

   
    Route::get('/admin/home', DashboardComponent::class)->name('admin.home');
    Route::get('/admin/annee', AnneeComponent::class)->name('admin.annee');
    Route::get('/admin/niveau', NiveauComponent::class)->name('admin.niveau');
    Route::get('/admin/document', DocumentComponent::class)->name('admin.document');
    Route::get('/admin/formations', FormationComponent::class)->name('admin.formation');
    Route::get('/admin/formation/{id?}', AddFormationComponent::class)->name('admin.addformation');
    Route::get('/admin/classes', ClasseComponent::class)->name('admin.classe');
    Route::get('/admin/classe/{classe}', ClasseDetailComponent::class)->name('admin.classes');
    Route::get('/admin/admission/{etat?}', AdmissionComponent::class)->name('admin.admission');
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user','verified'])->group(function () {

    Route::get('/home', UserDash::class)->name('home');
    Route::get('/dossier/{numero}', DossierComponent::class)->name('dossier');
});

/*------------------------------------------
--------------------------------------------
All professeur Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:professeur'])->group(function () {

    Route::get('/professeur/home', [HomeController::class, 'professeurHome'])->name('professeur.home');
});
