<?php
namespace App\Http\Controllers;

class StyleController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $styles = [
            ['name'=>'Low Fade','price'=>'₦3,000','img'=>'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=500&q=80'],
            ['name'=>'Afro Cut','price'=>'₦2,500','img'=>'https://images.unsplash.com/photo-1621605815971-fbc98d665033?w=500&q=80'],
            ['name'=>'Dread Locks','price'=>'₦5,000','img'=>'https://images.unsplash.com/photo-1599351431202-1e0f0137899a?w=500&q=80'],
            ['name'=>'Beard Trim','price'=>'₦1,500','img'=>'https://images.unsplash.com/photo-1622286342621-4bd786c2447c?w=500&q=80'],
            ['name'=>'Kids Cut','price'=>'₦2,000','img'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80'],
            ['name'=>'Dyed Hair','price'=>'₦7,000','img'=>'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&q=80'],
        ];
        return view('styles', compact('styles'));
    }
}