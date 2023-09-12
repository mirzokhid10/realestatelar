<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('main');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function propertyAgent() {
        return view('property-agent');
    }

    public function propertyList() {
        return view('property-list');
    }

    public function propertyType() {
        return view('property-type');
    }

    public function terminal() {
        return view('terminal');
    }
}
