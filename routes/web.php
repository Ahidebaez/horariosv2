<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/home', function () {
    return view('home');
})->middleware("auth")->name('home');


// Rutas para el menú no autenticado

Route::get('/acerca', function () {return view('acerca');})->middleware("auth")->name('acerca');

Route::get('/contacto', function () {
    return view('contacto');
})->middleware("auth")->name('contacto');

Route::get('/ayuda', function () {
    return view('ayuda');
})->middleware("auth")->name('ayuda');


Route::get('/acerca', function () {return view('acerca');})->middleware("auth")->name('acerca');

Route::get('/catalogos', function () {
    return view('catalogos');
})->middleware("auth")->name('catalogos');

Route::get('/alumnos', function () {return view('alumnos');})->middleware("auth")->name('alumnos');
Route::get('/carreras', function () {return view('carreras');})->middleware("auth")->name('carreras');
Route::get('/deptos', function () {return view('deptos');})->middleware("auth")->name('deptos');
Route::get('/materias', function () {return view('materias');})->middleware("auth")->name('materias');
Route::get('/periodo', function () {return view('periodo');})->middleware("auth")->name('periodo');
Route::get('/personal', function () {return view('personal');})->middleware("auth")->name('personal');
Route::get('/plazas', function () {return view('plazas');})->middleware("auth")->name('plazas');
Route::get('/puestos', function () {return view('puestos');})->middleware("auth")->name('puestos');
Route::get('/reticulas', function () {return view('reticulas');})->middleware("auth")->name('reticulas');
Route::get('/docentes', function () {return view('docentes');})->middleware("auth")->name('docentes');
Route::get('/capacitacion', function () {return view('capacitacion');})->middleware("auth")->name('capacitacion');
Route::get('/material', function () {return view('material');})->middleware("auth")->name('material');
Route::get('/docencia', function () {return view('docencia');})->middleware("auth")->name('docencia');
Route::get('/asesoria', function () {return view('asesoria');})->middleware("auth")->name('asesoria');
Route::get('/asesoriapro', function () {return view('asesoriapro');})->middleware("auth")->name('asesoriapro');
Route::get('/asesorias', function () {return view('asesorias');})->middleware("auth")->name('asesorias');


Route::get('/horarios', function () {
    return view('horarios');
})->middleware("auth")->name('horarios');

Route::get('/proyectos', function () {return view('proyectos');})->middleware("auth")->name('proyectos');

Route::get('/instrumentacion', function () {
    return view('instrumentacion');
})->middleware("auth")->name('instrumentacion');

Route::get('/tutorias', function () {
    return view('tutorias');
})->middleware("auth")->name('tutorias');




// Route::get('/biblioteca', function () {
//     return view('biblioteca');
// })->middleware("auth")->name('biblioteca');

// Route::get('/encargados2', function () {
//     return view('encargados2');
// })->middleware("auth")->name('encargados2');


// Route::get('/departamentos', function () {
//     return view('departamentos');
// })->middleware("auth")->name('departamentos');

// Route::get('/edificio', function () {
//     return view('edificio');
// })->middleware("auth")->name('edificio');

// Route::get('/encargados', function () {
//     return view('encargados');
// })->middleware("auth")->name('encargados');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
