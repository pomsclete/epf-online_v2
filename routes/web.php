<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\User\DashboardComponent as UserDash;
use App\Livewire\User\Profile;
use App\Livewire\User\Support;
use App\Livewire\PasswordUser;
use App\Livewire\Admin\AnneeComponent;
use App\Livewire\Admin\NiveauComponent;
use App\Livewire\Admin\DocumentComponent;
use App\Livewire\Admin\FormationComponent;
use App\Livewire\Admin\AddFormationComponent;
use App\Livewire\Admin\ClasseComponent;
use App\Livewire\Admin\ClasseDetailComponent;
use \App\Livewire\User\DossierComponent;
use \App\Livewire\Admin\DossierComponent as AdminDossier;
use \App\Livewire\Admin\AdmissionComponent;
use \App\Livewire\Admin\NouveauComponent;
use \App\Livewire\Admin\EnCoursComponent;
use \App\Livewire\Admin\DeliberationComponent;
use \App\Livewire\Admin\FinaliseComponent;
use \App\Livewire\Admin\RefuseComponent;
use App\Http\Controllers\LettreController;
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

   
    Route::get('/admin/home',AdmissionComponent::class)->name('admin.home');
    Route::get('/admin/annee', AnneeComponent::class)->name('admin.annee');
    Route::get('/admin/niveau', NiveauComponent::class)->name('admin.niveau');
    Route::get('/admin/document', DocumentComponent::class)->name('admin.document');
    Route::get('/admin/formations', FormationComponent::class)->name('admin.formation');
    Route::get('/admin/formation/{id?}', AddFormationComponent::class)->name('admin.addformation');
    Route::get('/admin/classes', ClasseComponent::class)->name('admin.classe');
    Route::get('/admin/classe/{classe}', ClasseDetailComponent::class)->name('admin.classes');
    Route::get('/admin/admission/nouveau', NouveauComponent::class)->name('admin.admission.new');
    Route::get('/admin/admission/en-cours', EnCoursComponent::class)->name('admin.admission.cours');
    Route::get('/admin/admission/deliberation', DeliberationComponent::class)->name('admin.admission.delib');
    Route::get('/admin/admission/finalise', FinaliseComponent::class)->name('admin.admission.final');
    Route::get('/admin/admission/refuse', RefuseComponent::class)->name('admin.admission.refuse');
    Route::get('/traitement/{numero}', AdminDossier::class)->name('traitement');
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user','verified'])->group(function () {

    Route::get('/home', UserDash::class)->name('home');
    Route::get('/dossier/{numero}', DossierComponent::class)->name('dossier');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/support', Support::class)->name('support');
    Route::get('/parametrage', PasswordUser::class)->name('parametrage');
    Route::get('/lettre-admission/{numero}', [LettreController::class, 'generatePDF'])->name('lettre-admission');
});

/*------------------------------------------
--------------------------------------------
All professeur Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:professeur'])->group(function () {

    Route::get('/professeur/home', [HomeController::class, 'professeurHome'])->name('professeur.home');
});
