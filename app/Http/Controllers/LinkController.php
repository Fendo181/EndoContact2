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

    public function edit($id){
           $link = Link::findOrFail($id);
           return view('linklist.edit')->with('link',$link);
    }

    public function update(LinkRequest $request,$id)
    {
        $link = link::findOrFail($id);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();
        return redirect('/link');
    }

    public function destroy($id)
       {
           $link = Link::findOrFail($id);
           $link -> delete();
           return redirect('/link');
      }
}
