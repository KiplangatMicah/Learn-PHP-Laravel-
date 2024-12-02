<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{

    function upload(Request $request){
        $path = $request->file("file")->store("public");
        $pathArray=explode("/",$path);
        $imgpath=$pathArray[1];
        $image=new Image();
        $image->path=$imgpath;

        if( $image->save() ){
            return 'image saved';
        }
    }
    function list(){
        $imageData=Image::all();
        return view('display',['imageData'=>$imageData]);
    }
}
