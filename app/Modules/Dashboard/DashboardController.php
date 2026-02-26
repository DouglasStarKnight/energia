<?php
namespace App\Modules\Dashboard;

use App\Http\Controllers\Controller;
use App\Modules\Dashboard\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller{
  
  public function __construct(private DashboardService $dashboardService){

  }

  public function findAll(Request $req){
  return $this->dashboardService->findAll($req);
  }
}

