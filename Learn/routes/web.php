     <?php
     use Illuminate\Support\Facades\Input;
     use Laravel_Learn\Pessoa_perdida;

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


Route::get('/primeiro', function () {
    return 'Meu primeiro route';
});

//Route::get('/localizacao',function (){
//    return \Laravel_Learn\Localizacao::all();
//});
Route::resource('pessoa_perdida','pessoaPerdidaController');

Route::resource('pessoa_ajuda','pessoaAjudaController');

Route::resource('centro_acolhimento','centroAcolhimentoController');
//Route::resource('localizacao','LocalizacaoController');

Route::resource('user','userController');
Route::post('/search', 'pessoaPerdidaController@pesquisar');
Route::get('/localizacao','LocalizacaoController2@index');
     Route::post('/search1', 'pessoaPerdidaController@pesquisar2');


Route::resource('centro','centroAcolhimentoController');

Route::resource('responsavel','responsavelCentroController');




