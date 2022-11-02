<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends BaseController
{
    public function index()
    {
        return view('layouts.index');
    }
    public function service()
    {
        return view('layouts.page.service');
    }
    public function taxadvisory()
    {
        return view('layouts.page.taxadvisory');
    }
    public function accounting()
    {
        return view('layouts.page.accounting');
    }
    public function hra()
    {
        return view('layouts.page.hra');
    }
    public function payroll()
    {
        return view('layouts.page.payrollservice');
    }
    public function tax()
    {
        return view('layouts.page.taxreturn');
    }
    public function smsf()
    {
        return view('layouts.page.smsf');
    }
    public function consulting()
    {
        return view('layouts.page.consulting');
    }
    public function aboutus()
    {
        return view('layouts.page.aboutus');
    }
    public function testimonials()
    {
        return view('layouts.page.testimonials');
    }
}
