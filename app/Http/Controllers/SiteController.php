<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexAction()
    {
        return view('site.index');
    }

    public function testAction()
    {
        return ['test'];
    }
}
