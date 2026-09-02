<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index(){
        $styles = [
            'img'=>'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=500',
            'img'=>'https://images.unsplash.com/photo-1621605815971-fbc98d665033?w=500',
            'img'=>'https://images.unsplash.com/photo-1501927023255-87263be64cc7?w=500',
            'img'=>'https://images.unsplash.com/photo-1622286342621-4bd786c2447c?w=500',
            'img'=>'https://images.unsplash.com/photo-1599351431202-1e0f0137899a?w=500',
            'img'=>'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500',
        ];
        return view('styles', compact('styles'));
    }
}