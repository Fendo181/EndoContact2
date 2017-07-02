<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;

use App\Link;


class LinkController extends Controller
{
    public function submit(LinkRequest $request){
        $link = new Link;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();
        return redirect('/link');
    }
}
