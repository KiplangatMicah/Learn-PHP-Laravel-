<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
{
    // Validate the file (optional)
    $request->validate([
        'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Store the file in the 'public' directory
    $path = $request->file("file")->store("public");

    // Extract the file name from the full path
    $fileName = basename($path);

    // Pass the file name to the view
    return view("display", ["path" => $fileName]);
}


}
