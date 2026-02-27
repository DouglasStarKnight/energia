<?php namespace App\Modules\Relatorio;

use App\Http\Controllers\Controller;
use App\Modules\Relatorio\RelatorioService;
use Illuminate\Http\Request;

class RelatorioController extends Controller {

public function __construct(private RelatorioService $relatorioService){
}

public function findAll(Request $req){
  return $this->relatorioService->findAll($req);
}
}