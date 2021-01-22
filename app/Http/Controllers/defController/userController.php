<?php

namespace App\Http\Controllers\defController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class userController extends Controller
{
    public function show($id)
    {
        $data=[];
        $data['story_title']=__('site.story_title');
        $data['story_content']=__('site.story_content');
        return view('index',compact('data'));
    }
}
