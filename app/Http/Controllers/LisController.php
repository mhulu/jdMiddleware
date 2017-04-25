<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class LisController extends Controller {
	public function index() {
		$report = DB::select('select repo_no, name from as_report where (name REGEXP "\d+" )');
		return $report;
	}
}
