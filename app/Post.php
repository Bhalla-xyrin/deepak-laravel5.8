<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'category',
    ];


    public static function store($request)
    {
        //save post
        $admin = Auth::guard('admin')->user();

        if(is_null($admin)){
            $admin = Auth::guard('author')->user();
        }
        $record = new Post();
        $record->created_by = $admin->id;
        $record->type = $admin->type;
        $record->fill($request->all());

        //Image logic
        $cover = $request->file('image');
        if(!is_null($cover)){
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $record->mime = $cover->getClientMimeType();
            $record->original_filename = $cover->getClientOriginalName();
            $record->filename = $cover->getFilename().'.'.$extension;
        }
        $record->save();
    }
}
