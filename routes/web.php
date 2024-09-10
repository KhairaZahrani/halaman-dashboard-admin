    <?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

Route::resource('buku', BukuController::class);

route::get('/sesi', [SessionController::class, 'index']);
route::post('/sesi/login', [SessionController::class, 'login']);
route::get('/sesi/logout', [SessionController::class, 'logout']);

route::get('/sesi/register', [SessionController::class, 'register']);
route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/admin', function () {
    return view('admin.dashboard');
});
