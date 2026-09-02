<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index(){
        $styles = [
            ['name'=>'Low Fade','price'=>'₦3,000','img'=>'https://images.unsplash.com/photo-1503951914875-452162b0f3f1'],
            ['name'=>'Afro Cut','price'=>'₦2,500','img'=>'https://images.unsplash.com/photo-1621605815971-fbc98d665033'],
            ['name'=>'Dread Locks','price'=>'₦5,000','img'=>'https://images.unsplash.com/photo-1501927023255-87263be64cc7'],
            ['name'=>'Beard Trim','price'=>'₦1,500','img'=>'https://images.unsplash.com/photo-1622286342621-4bd786c2447c'],
            ['name'=>'Kids Cut','price'=>'₦2,000','img'=>'https://images.unsplash.com/photo-1599351431202-1e0f0137899a'],
            ['name'=>'Dyed Hair','price'=>'₦7,000','img'=>'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab'],
        ];
        return view('styles', compact('styles'));
    }
}