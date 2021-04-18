<?php

namespace App\Http\Controllers;

use App\Models\StaticPages;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function page($slug)
    {
        $pageContent = StaticPages::where('slug', $slug)->where('status', 1)->first();
        if($pageContent){
            return view('static_page')->with('data',$pageContent);
        }else{
            return abort(404);
        }
    }
}
