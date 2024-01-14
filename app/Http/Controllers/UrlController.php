<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function shorten(Request $request)
    {
        // $request->validate([
        //     'original_url' => 'required|url',
        // ]);

        $url = new Url();
        $url->original_url = $request->input('url');
        $url->short_url = Str::random(5);

        // $short_url = url("/$url->short_url");

        $url->save();
        return view('shorten');
    }

    public function redirect($short_url)
    {
        $url = Url::where('short_url', $short_url)->first();
        // dd($url);

        if ($url) {
            return redirect($url->original_url);
        } else {
            abort(404); // Shortened URL not found
        }
    }
}
