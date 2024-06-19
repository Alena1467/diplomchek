<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\DescriptionAvdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\OformlenieController;
use App\Http\Controllers\ImplantationController;
use App\Http\Controllers\DentalcareController;
use App\Http\Controllers\OralhygieneController;
use App\Http\Controllers\ToothextractionController;
use App\Http\Controllers\TeethwhiteningController;
use App\Http\Controllers\GumtreatmentController;
use App\Http\Controllers\BracesController;
use App\Http\Controllers\AnesthesiaController;
use App\Http\Controllers\VeneersController;
use App\Http\Controllers\ProstheticsController;
use App\Http\Controllers\DentalcarechildrenController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OurclinicsController;
use App\Http\Controllers\Rdcoms80Controller;
use App\Http\Controllers\DescayvController;
use App\Http\Controllers\DescalekController;
use App\Http\Controllers\DescaleksController;
use App\Http\Controllers\DescaleshController;
use App\Http\Controllers\DescanikController;
use App\Http\Controllers\DescatamController;
use App\Http\Controllers\DescakhController;
use App\Http\Controllers\DescbazarController;
use App\Http\Controllers\DescbaryshController;
use App\Http\Controllers\DescbakhController;
use App\Http\Controllers\DescbeinController;
use App\Http\Controllers\DescberejController;
use App\Http\Controllers\DescbobController;
use App\Http\Controllers\DescbredController;
use App\Http\Controllers\DescbuimController;
use App\Http\Controllers\SitemapController;


Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/blog',[BlogController::class, 'index'])->name('blog');

Route::get('/specialists',[SpecialistsController::class, 'index'])->name('specialists');

Route::match(['get', 'post', 'delete'], '/descriptionavd', [DescriptionAvdController::class, 'showReview'])->name('descriptionavd');

Route::post('/submit-record1', [DescriptionAvdController::class, 'submitRecord'])->name('submit-record1');

Route::get('/contacts',[ContactController::class, 'index'])->name('contacts');

Route::get('/cons',[ConsController::class, 'index'])->name('cons');

Route::get('/record',[RecordController::class, 'index'])->name('record');

Route::get('/oformlenie', [OformlenieController::class, 'index'])->name('oformlenie');

Route::post('/submit-feedback', [OformlenieController::class, 'submitRecordpriem']);

Route::get('/implantation',[ImplantationController::class, 'index'])->name('implantation');

Route::get('/dentalcare',[DentalcareController::class, 'index'])->name('dentalcare');

Route::get('/oralhygiene',[OralhygieneController::class, 'index'])->name('oralhygiene');

Route::get('/toothextraction',[ToothextractionController::class, 'index'])->name('toothextraction');

Route::get('/teethwhitening',[TeethwhiteningController::class, 'index'])->name('teethwhitening');

Route::get('/gumtreatment',[GumtreatmentController::class, 'index'])->name('gumtreatment');

Route::get('/braces',[BracesController::class, 'index'])->name('braces');

Route::get('/anesthesia',[AnesthesiaController::class, 'index'])->name('anesthesia');

Route::get('/veneers',[VeneersController::class, 'index'])->name('veneers');

Route::get('/prosthetics',[ProstheticsController::class, 'index'])->name('prosthetics');

Route::get('/dentalcarechildren',[DentalcarechildrenController::class, 'index'])->name('dentalcarechildren');

Route::get('/services',[ServicesController::class, 'index'])->name('services');

Route::get('/ourclinics',[OurclinicsController::class, 'index'])->name('ourclinics');

Route::get('/rdcoms80',[Rdcoms80Controller::class, 'index'])->name('rdcoms80');

// айвазова

Route::match(['get', 'post', 'delete'], '/descayv', [DescayvController::class, 'showReview'])->name('descayv');

Route::post('/submit-record2', [DescayvController::class, 'submitRecord'])->name('submit-record2');

// алексеева

Route::match(['get', 'post', 'delete'], '/descalek', [DescalekController::class, 'showReview'])->name('descalek');

Route::post('/submit-record3', [DescalekController::class, 'submitRecord'])->name('submit-record3');

// алексеева2

Route::match(['get', 'post', 'delete'], '/descaleks', [DescaleksController::class, 'showReview'])->name('descaleks');

Route::post('/submit-record4', [DescaleksController::class, 'submitRecord'])->name('submit-record4');

// алешкин

Route::match(['get', 'post', 'delete'], '/descalesh', [DescaleshController::class, 'showReview'])->name('descalesh');

Route::post('/submit-record5', [DescaleshController::class, 'submitRecord'])->name('submit-record5');

// аникина

Route::match(['get', 'post', 'delete'], '/descanik', [DescanikController::class, 'showReview'])->name('descanik');

Route::post('/submit-record6', [DescanikController::class, 'submitRecord'])->name('submit-record6');

// атамнчук

Route::match(['get', 'post', 'delete'], '/descatam', [DescatamController::class, 'showReview'])->name('descatam');

Route::post('/submit-record7', [DescatamController::class, 'submitRecord'])->name('submit-record7');

// ахмедж

Route::match(['get', 'post', 'delete'], '/descakh', [DescakhController::class, 'showReview'])->name('descakh');

Route::post('/submit-record8', [DescakhController::class, 'submitRecord'])->name('submit-record8');

// базарова

Route::match(['get', 'post', 'delete'], '/descbazar', [DescbazarController::class, 'showReview'])->name('descbazar');

Route::post('/submit-record9', [DescbazarController::class, 'submitRecord'])->name('submit-record9');

// барышников

Route::match(['get', 'post', 'delete'], '/descbarysh', [DescbaryshController::class, 'showReview'])->name('descbarysh');

Route::post('/submit-record10', [DescbaryshController::class, 'submitRecord'])->name('submit-record10');

// бахаев

Route::match(['get', 'post', 'delete'], '/descbakh', [DescbakhController::class, 'showReview'])->name('descbakh');

Route::post('/submit-record11', [DescbakhController::class, 'submitRecord'])->name('submit-record11');

// бейнарович

Route::match(['get', 'post', 'delete'], '/descbein', [DescbeinController::class, 'showReview'])->name('descbein');

Route::post('/submit-record12', [DescbeinController::class, 'submitRecord'])->name('submit-record12');

// брежная

Route::match(['get', 'post', 'delete'], '/descberej', [DescberejController::class, 'showReview'])->name('descberej');

Route::post('/submit-record13', [DescberejController::class, 'submitRecord'])->name('submit-record13');

// бобылев

Route::match(['get', 'post', 'delete'], '/descbob', [DescbobController::class, 'showReview'])->name('descbob');

Route::post('/submit-record14', [DescbobController::class, 'submitRecord'])->name('submit-record14');

// бреднева

Route::match(['get', 'post', 'delete'], '/descbred', [DescbredController::class, 'showReview'])->name('descbred');

Route::post('/submit-record15', [DescbredController::class, 'submitRecord'])->name('submit-record15');

// буим

Route::match(['get', 'post', 'delete'], '/descbuim', [DescbuimController::class, 'showReview'])->name('descbuim');

Route::post('/submit-record16', [DescbuimController::class, 'submitRecord'])->name('submit-record16');

Route::get('/sitemap',[SitemapController::class, 'index'])->name('sitemap');
