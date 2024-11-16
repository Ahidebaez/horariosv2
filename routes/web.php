<?php

use App\Models\Alumno;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HoraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\PersonalPlazaController;


Route::get('/', function () {
    return view('inicio');
});


Route::get('/materiasabiertas', function () {
    return view('materiasabiertas');
});


// Route::get('/unidad1', function () {
//     return view('unidad1');
// });

Route::get('/home', function () {
    return view('home');
})->middleware("auth")->name('home');

Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

// Route::resource("alumnos",AlumnoController::class);

Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

// Route::resource("puestos",PuestoController::class);

Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
Route::get('/plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
Route::post('/plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');
Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');
Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');

// Route::resource("plazas",PlazaController::class);


// Rutas para Depto
Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
Route::post('/deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');
Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
Route::post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');
Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');

// Rutas para Carrera
Route::get('/carreras.index', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras.create', [CarreraController::class, 'create'])->name('carreras.create');
Route::get('/carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('carreras.edit');
Route::post('/carreras.destroy/{carrera}', [CarreraController::class, 'destroy'])->name('carreras.destroy');
Route::get('/carreras.show/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');
Route::post('/carreras.store', [CarreraController::class, 'store'])->name('carreras.store');
Route::post('/carreras.update/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');

// Rutas para Retícula
Route::get('/reticulas.index', [ReticulaController::class, 'index'])->name('reticulas.index');
Route::get('/reticulas.create', [ReticulaController::class, 'create'])->name('reticulas.create');
Route::get('/reticulas.edit/{reticula}', [ReticulaController::class, 'edit'])->name('reticulas.edit');
Route::post('/reticulas.destroy/{reticula}', [ReticulaController::class, 'destroy'])->name('reticulas.destroy');
Route::get('/reticulas.show/{reticula}', [ReticulaController::class, 'show'])->name('reticulas.show');
Route::post('/reticulas.store', [ReticulaController::class, 'store'])->name('reticulas.store');
Route::post('/reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('reticulas.update');

// Rutas para Materia
Route::get('/materias.index', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias.create', [MateriaController::class, 'create'])->name('materias.create');
Route::get('/materias.edit/{materia}', [MateriaController::class, 'edit'])->name('materias.edit');
Route::post('/materias.destroy/{materia}', [MateriaController::class, 'destroy'])->name('materias.destroy');
Route::get('/materias.show/{materia}', [MateriaController::class, 'show'])->name('materias.show');
Route::post('/materias.store', [MateriaController::class, 'store'])->name('materias.store');
Route::post('/materias.update/{materia}', [MateriaController::class, 'update'])->name('materias.update');

// Rutas para Periodo
Route::get('/periodos.index', [PeriodoController::class, 'index'])->name('periodos.index');
Route::get('/periodos.create', [PeriodoController::class, 'create'])->name('periodos.create');
Route::get('/periodos.edit/{periodo}', [PeriodoController::class, 'edit'])->name('periodos.edit');
Route::post('/periodos.destroy/{periodo}', [PeriodoController::class, 'destroy'])->name('periodos.destroy');
Route::get('/periodos.show/{periodo}', [PeriodoController::class, 'show'])->name('periodos.show');
Route::post('/periodos.store', [PeriodoController::class, 'store'])->name('periodos.store');
Route::post('/periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('periodos.update');


Route::resource('horas', HoraController::class);
// Route::resource('edificios', EdificioController::class);
// Route::resource('lugares', LugarController::class);

// Route::get('/horas', [HoraController::class, 'index'])->name('horas.index');
// Route::post('/horas', [HoraController::class, 'store'])->name('horas.store');
// Route::put('/horas/{id}', [HoraController::class, 'update'])->name('horas.update');
// Route::delete('/horas/{id}', [HoraController::class, 'destroy'])->name('horas.destroy');

// Rutas para edificios
Route::get('/edificios', [EdificioController::class, 'index'])->name('edificios.index'); // Mostrar todos los edificios
Route::post('/edificios', [EdificioController::class, 'store'])->name('edificios.store'); // Crear un nuevo edificio
Route::put('/edificios/{edificio}', [EdificioController::class, 'update'])->name('edificios.update'); // Actualizar un edificio
Route::delete('/edificios/{edificio}', [EdificioController::class, 'destroy'])->name('edificios.destroy'); // Eliminar un edificio
Route::get('/edificios/{edificio}', [EdificioController::class, 'show'])->name('edificios.show'); // Ver detalles de un edificio

// Rutas para lugares
Route::get('/lugares', [LugarController::class, 'index'])->name('lugares.index'); // Mostrar todos los lugares
Route::post('/lugares', [LugarController::class, 'store'])->name('lugares.store'); // Crear un nuevo lugar
Route::put('/lugares/{lugar}', [LugarController::class, 'update'])->name('lugares.update'); // Actualizar un lugar
Route::delete('/lugares/{lugar}', [LugarController::class, 'destroy'])->name('lugares.destroy'); // Eliminar un lugar

Route::get('personals', [PersonalController::class, 'index'])->name('personals.index');

Route::get('/personalplazas', [PersonalPlazaController::class, 'index'])->name('personalplazas.index');

// Rutas resource para Depto
// Route::resource('deptos', DeptoController::class);

// // Rutas resource para Carrera
// Route::resource('carreras', CarreraController::class);

// // Rutas resource para Retícula
// Route::resource('reticulas', ReticulaController::class);

// // Rutas resource para Materia
// Route::resource('materias', MateriaController::class);

// // Rutas resource para Periodo
// Route::resource('periodos', PeriodoController::class);




// Route::resource('alumnos', AlumnoController::class);
// Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

// Route::get('/', [AlumnoController::class, 'index'])->name('home');

// Ruta para la vista de índice de puestos
// Route::get('/puestos', [PuestoController::class, 'index'])->name('puestos.index');

// Ruta para la vista de índice de plazas
// Route::get('/plazas', [PlazaController::class, 'index'])->name('plazas.index');







Route::get('/horarios', function () {
    return view('horarios');
})->middleware("auth")->name('horarios');



Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');



// Rutas para el menú no autenticado

Route::get('/acerca', function () {return view('acerca');})->middleware("auth")->name('acerca');

Route::get('/contacto', function () {
    return view('contacto');
})->middleware("auth")->name('contacto');

Route::get('/ayuda', function () {
    return view('ayuda');
})->middleware("auth")->name('ayuda');



Route::get('/catalogos', function () {
    return view('catalogos');
})->middleware("auth")->name('catalogos');





// Route::get('/alumnos', function () {return view('alumnos');})->middleware("auth")->name('alumnos');
// Route::get('/carreras', function () {return view('carreras');})->middleware("auth")->name('carreras');
// Route::get('/deptos', function () {return view('deptos');})->middleware("auth")->name('deptos');
// Route::get('/materias', function () {return view('materias');})->middleware("auth")->name('materias');
// Route::get('/periodo', function () {return view('periodo');})->middleware("auth")->name('periodo');
// Route::get('/personal', function () {return view('personal');})->middleware("auth")->name('personal');
// Route::get('/plazas', function () {return view('plazas');})->middleware("auth")->name('plazas');
// Route::get('/puestos', function () {return view('puestos');})->middleware("auth")->name('puestos');
// Route::get('/reticulas', function () {return view('reticulas');})->middleware("auth")->name('reticulas');
Route::get('/docentes', function () {return view('docentes');})->middleware("auth")->name('docentes');
Route::get('/capacitacion', function () {return view('capacitacion');})->middleware("auth")->name('capacitacion');
Route::get('/material', function () {return view('material');})->middleware("auth")->name('material');
Route::get('/docencia', function () {return view('docencia');})->middleware("auth")->name('docencia');
Route::get('/asesoria', function () {return view('asesoria');})->middleware("auth")->name('asesoria');
Route::get('/asesoriapro', function () {return view('asesoriapro');})->middleware("auth")->name('asesoriapro');
Route::get('/asesorias', function () {return view('asesorias');})->middleware("auth")->name('asesorias');




Route::get('/proyectos', function () {return view('proyectos');})->middleware("auth")->name('proyectos');

Route::get('/instrumentacion', function () {
    return view('instrumentacion');
})->middleware("auth")->name('instrumentacion');

// Route::get('/tutorias', function () {
//     return view('tutorias');
// })->middleware("auth")->name('tutorias');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
