<?php namespace App\Modules\Fatura;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

  class FaturaController extends Controller{

  public function __construct(private FaturaService $faturaService){
  }
  public function findAll(Request $req){
  return $this->faturaService->findAll($req);
  }
}