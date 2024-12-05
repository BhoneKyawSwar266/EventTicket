<?php

namespace App\Http\Controllers;

use App\Models\Event as ModelsEvent;

use App\Models\EventModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
    $events = EventModel::where('user_id', Auth::id())->paginate(4);
    return view("organizer.dashboard", compact("events"));
    }

    
    public function create(){
        return view("organizer.create");
    }

    public function store(Request $request){
        $request->validate([
        'event_name' => 'required|string|max:255',
        'category' => 'required',
        'event_date' => 'required|date',
        'description' => 'required|string',
        'location' => 'required|string',
        'ticket_price' => 'required|numeric',
        'total_tickets' => 'required|integer',
        'event_image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        if($request->has('event_image')){
            $file = $request->file('event_image');
            $extension = $file->getClientOriginalExtension();
            $imgfilename = time().'.'.$extension;
            $file->move('uploads/category',$imgfilename);
        }

        $event = new EventModel();
        $event->event_name = $request->event_name;
        $event->event_date = $request->event_date;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->ticket_price = $request->ticket_price;
        $event->total_tickets = $request->total_tickets;
        $event->category = $request->category;
    
        // Handle file upload for event image
        $event->event_image = $imgfilename;
    
        // Automatically assign the authenticated user's ID to the event
        $event->user_id = Auth::id(); // The current logged-in user's ID
    
        // Save the event
        $event->save();
        return redirect()->route('organizer.dashboard')->with('success', 'Event created successfully!');
    }

    public function edit(int $id){
        $event = EventModel::find($id);
        return view('organizer.edit' , compact('event'));
    }

    public function put(Request $request, int $id)
    {
        // Validate the input
        $request->validate([
            'event_name' => 'required|string|max:255',
            'category' => 'required',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'location' => 'required|string',
            'ticket_price' => 'required|numeric',
            'total_tickets' => 'required|integer',
            'event_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Find the existing event by ID
        $event = EventModel::findOrFail($id);

        // Update the event details
        $event->event_name = $request->event_name;
        $event->event_date = $request->event_date;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->ticket_price = $request->ticket_price;
        $event->total_tickets = $request->total_tickets;
        $event->category = $request->category;

        // Handle file upload for event image if a new image is provided
        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            $extension = $file->getClientOriginalExtension();
            $imgfilename = time() . '.' . $extension;
            $file->move('uploads/category', $imgfilename);

            // Update the event image filename
            $event->event_image = $imgfilename;
        }

        // Save the updated event
        $event->save();

        // Redirect back to the dashboard with a success message
        return redirect()->route('organizer.dashboard')->with('success', 'Event updated successfully!');
    }

    public function delete(Request $request, int $id){
        $event = EventModel::findOrFail($id);
        $event->delete();
        return redirect()->route('organizer.dashboard')->with('success', 'Event Deleted successfully!');
    }

}
