<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCalenderController extends Controller
{

    public function index()
    {
        return view('admin::index');
    }

}
