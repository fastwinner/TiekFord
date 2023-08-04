<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\ReservationController;

use App\Models\Panier;
use App\Models\Plat;
use App\Models\Reservation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



//presentation
Route::get('/', [PresentationController::class, 'Presentation']);

//information
Route::get('/about', function(){
    return view('demo/about');
});

//contact
Route::get('/contact', function(){
    return view('demo/contact');
});

//connexion & deconnexion
Route::get('/connexion', [AuthController::class, 'login'])->name('auth.login');
Route::post('/connexion', [AuthController::class, 'dologin']);
Route::get('index', [AuthController::class, 'redirect'])->name('Accueil');
Route::delete('/index', [AuthController::class, 'Logout']);
Route::get('/dashboard', function () {
    return view('admin/index');
});

//inscription
Route::get('/inscription', [InscriptionController::class, 'register']);
Route::post('/inscription',[InscriptionController::class, 'doregister']);


//inscription responsable
Route::get('/responsable', [PresentationController::class, 'responsable'])->name('auth.login');
Route::post('/responsable', [PresentationController::class, 'doregister']);

//menu
Route::get('/menu', function () {
    $donnees = App\Models\Plat::all();
    
    return view('demo/menu', ['donnees' => $donnees]);
});
Route::delete('/menu', [AuthController::class, 'Logout']);

//panier
Route::get('/panier',[PanierController::class, 'panier'])->name('RoadPanier');
Route::post('/panier', [AuthController::class, 'dologin']);
route::get('/panier-{id}', function(){
    return view("demo/panier");
});

//affichage individuel des plats
Route::get('/plat-{id}', [PanierController::class, 'AffichagePlat']);
Route::post('/plat-{id}', [PanierController::class, 'ajoutpanier']);
Route::delete('/{id}', [AuthController::class, 'Logout']);

//valider panier
Route::get('/validation', function(){
    return view('demo/validation');
});
Route::post('/validation', [ValidateController::class, 'validation']);

//reservation
Route::get('/service', function(){
    return view('demo/booking');
});
Route::post('/service', [ReservationController::class, 'CreeReservation']);
Route::get('/supprimer-{id}', function(string $id){
    Reservation::where('id_reservation',$id)->delete();
    $user=Auth::user();
    $panier = Panier::where('id', $user->id)->where('statut', 0)->get();
    return view("demo/panier", ["panier"=>$panier]);
});
Route::get('/modifReservation-{id}', function( string $id){
    return view('demo/modifreservation', ['id'=>$id]);
});

Route::post('/modifReservation-{id}', [ReservationController::class, 'modifier']);

















/*
Route::get('/plat', function(){
    for($i=0;$i<10;$i++)
        {
            $prix=(int)mt_rand(1000, 5000);
            //dd($prix);
            
            Plat::create([
            'nom_plat'=>'plat '.$i,
            'prix_plat'=>$prix,
            'detail_plat'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ratione omnis inventore
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque officia ullam vitae magnam eos quis recusandae 
            fugiat similique, esse, veniam, ducimus necessitatibus. Deleniti ad optio neque eos dolorem nemo provident?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, ducimus ad quos aperiam omnis nobis, ab in, 
            similique corrupti id molestias doloribus quis maiores ex necessitatibus et consequatur nostrum. Veritatis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos id natus voluptatibus cum ducimus doloribus
            magni aliquam porro alias neque adipisci quia consectetur aliquid, magnam dolores voluptas eaque iste mollitia!lorem ipsum
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis perspiciatis maiores quasi asperiores deserunt reiciendis ad
            dicta ipsa recusandae eaque fugiat, facere voluptas fuga vero nobis beatae, ut sed modi?Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Reprehenderit, libero sapiente expedita at doloribus non voluptatibus atque magni itaque, ullam illum praesentium! 
            Aliquam numquam non illum mollitia delectus dignissimos unde!",
            'image'=>$i.".jpg",
            ]);
            
        }
        return "success";
});
*/




