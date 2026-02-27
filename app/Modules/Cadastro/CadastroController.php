<?php namespace App\Modules\Cadastro;

use App\Http\Controllers\Controller;
use App\Modules\Cadastro\CadastroService;

class CadastroController extends Controller {

  public function __construct(private CadastroService $cadastroService)
  {
  }
  public function findAll(){
    return $this->cadastroService->findAll();
  }
}