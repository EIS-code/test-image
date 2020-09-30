<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function getImages(Request $request)
    {
        $count = $request->get('count', 50);

        return Image::limit($count)->get();
    }
}
