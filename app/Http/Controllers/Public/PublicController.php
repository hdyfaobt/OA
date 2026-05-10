<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
public function home()
{
    return view('public.home');
}
public function team()
{
    return view('public.team');
}
public function calendar()
{
    return view('public.calendar');
}
public function contact()
{
    return view('public.contact');
}
public function results()
{
    return view('public.results');
}   
public function about()
{
    return view('public.about');
}



}   