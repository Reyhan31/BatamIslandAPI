<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['getFile']]);
    // }
    
    public function store(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust maximum file size as needed
        // ]);

        $file = $request->file('file');
        
        // Store the file in the storage/app/public directory
        $filePath = $file->store('public');

        // Create a record in the database for the stored file
        $newFile = new File();
        $newFile->filename = basename($filePath);
        $newFile->mime_type = $file->getClientMimeType();
        $newFile->save();

        return response()->json(['message' => 'File uploaded successfully','id' => $newFile->id]);
    }

    public function getFile($id)
    {
        $file = File::findOrFail($id);

        // Retrieve the file from storage
        $filePath = Storage::disk('public')->path($file->filename);

        // Return the file as a blob
        return response()->file($filePath);
    }
}
