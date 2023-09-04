<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPhotoPropertyRequest;
use App\Models\PhotoProperty;
use App\Models\Property;
use Illuminate\Http\Request;

class PhotoPropertyController extends Controller
{
    public function index(Property $property)
    {

        // PhotoProperty::create([
        //     'image' => 'image.png',
        //     'properties_id' => 1
        // ]);

        return view('admin.properties_photo.form', [
            'property' => $property
        ]);
    }

    public function store(AddPhotoPropertyRequest $request)
    {
        dd($request->validated());
    }


}
