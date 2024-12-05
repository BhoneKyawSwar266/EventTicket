<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $events = EventModel::get();
        return view("welcome" , compact("events"));
    }

    public function events()
    {
    $events = EventModel::paginate(6);
    return view("events", compact("events"));
    }

    public function events_detail(int $id, Request $request) {
        $events = EventModel::find($id);
        $related = EventModel::inRandomOrder()->limit(3)->get();
        return view('evennts_detail', compact('events', 'related'));
    }
    


}
