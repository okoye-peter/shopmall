<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File as Image;

class FileController extends Controller
{
    protected $ids = [];

    public function storeMultipleFiles(Request $request)
    {
        collect($request->file('files'))->each(function ($file){
            $file->move('images/uploads/products', $file->getClientOriginalName());
            $row = Image::create([
                'url' => 'images/uploads/products/'. $file->getClientOriginalName()
            ]);
            array_push($this->ids,$row->id);
        });
        
        return $this->ids;
    }

    public function storeSingleFile(Request $request)
    {
        return response($request->all());
    }
    public function deleteFiles(Request $request)
    {
        if(file_exists(public_path('/images/uploads/products/' . $request->filename))){
            $file = Image::where('url', 'images/uploads/products/' . $request->filename)->first();
            $id = $file->id;
            if($file->delete()){
                unlink('images/uploads/products/' . $request->filename);
                return $id;
            }
        }

    }
}
