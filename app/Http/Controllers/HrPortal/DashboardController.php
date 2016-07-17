<?php
/**
 * Dashboard and its related AJAX requests
 */

namespace App\Http\Controllers\HrPortal;

use App\Http\Controllers\Controller;

/**
 * Contains Dashboard controller (index) and its related AJAX requests.
 *
 * Class DashboardController
 * @package App\Http\Controllers\HrPortal
 */
class DashboardController extends Controller
{
    /**
     * Home page of HR Portal.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('HrPortal.Dashboard.index', []);
    }
}