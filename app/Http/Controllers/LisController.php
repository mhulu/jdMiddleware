<?php

namespace App\Http\Controllers;

use App\Report;

class LisController extends Controller {
	public function index() {
		$report = Report::all();
		return $report;
	}
}
