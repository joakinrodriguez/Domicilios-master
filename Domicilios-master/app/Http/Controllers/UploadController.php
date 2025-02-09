<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('assets/media/fotos'), $filename);

            return response()->json(['status' => 'success', 'path' => $path]);
        }

        return response()->json(['status' => 'error', 'message' => 'No file uploaded.'], 400);
    }
}

