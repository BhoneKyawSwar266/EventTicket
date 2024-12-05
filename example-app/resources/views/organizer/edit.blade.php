<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bootstrap Card for Event Upload Form -->
            <div class="card bg-dark text-light shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Edit Event</h5>
                    <p class="card-text">Update the details for your event, including uploading a new event image if needed.</p>

                    <!-- Event Form -->
                    <form method="POST" action="{{url('organizer/dashboard/'.$event->id.'/edit')}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Enter event name" required value="{{ $event->event_name }}">
                        </div>

                        <!-- Category Dropdown -->
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="" disabled {{ !$event->category ? 'selected' : '' }}>Select a category</option>
                                <option value="Entertainment" {{ $event->category == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                                <option value="Business and Professional" {{ $event->category == 'Business and Professional' ? 'selected' : '' }}>Business and Professional</option>
                                <option value="Community and Culture" {{ $event->category == 'Community and Culture' ? 'selected' : '' }}>Community and Culture</option>
                                <option value="Technology" {{ $event->category == 'Technology' ? 'selected' : '' }}>Technology</option>
                                <option value="Education" {{ $event->category == 'Education' ? 'selected' : '' }}>Education</option>
                                <option value="Health and Wellness" {{ $event->category == 'Health and Wellness' ? 'selected' : '' }}>Health and Wellness</option>
                                <option value="Others" {{ $event->category == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input type="date" name="event_date" id="event_date" class="form-control" required value="{{ $event->event_date }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Event description" rows="4" required>{{ $event->description }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="location" class="form-label">Location</label>
                            <textarea name="location" id="location" class="form-control" placeholder="Location" rows="2" required>{{ $event->location }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="ticket_price" class="form-label">Ticket Price</label>
                            <input type="number" name="ticket_price" id="ticket_price" class="form-control" placeholder="Enter ticket price" step="0.01" required value="{{ $event->ticket_price }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="total_tickets" class="form-label">Total Tickets</label>
                            <input type="number" name="total_tickets" id="total_tickets" class="form-control" placeholder="Enter total tickets available" required value="{{ $event->total_tickets }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_image" class="form-label">Event Image</label>
                            <input type="file" name="event_image" id="event_image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <img src="{{ asset('uploads/category/' . $event->event_image) }}" alt="{{ $event->event_name }}" style="width: 100px; height: auto;">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Update Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
