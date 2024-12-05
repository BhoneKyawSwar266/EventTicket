<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function entertainment() {
        return $this->showCategory('entertainment'); 
    }

    public function business_and_professional() {
        return $this->showCategory('Business and Professional');
    }
    public function community_and_culture() {
        return $this->showCategory('Community and Culture');
    }
    public function education() {
        return $this->showCategory('education');
    }
    public function technology() {
        return $this->showCategory('technology');
    }
    public function health_and_wellness() {
        return $this->showCategory('Health and Wellness');
    }
    public function others() {
        return $this->showCategory('others');
    }




    // Reusable function to handle different categories
    private function showCategory($category) {
        $events = EventModel::where('category', $category)->paginate(6); 
        return view('category', compact('events', 'category'));
    }
    
    
}
