<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bootstrap Card for Event Upload Form -->
            <div class="card bg-dark text-light shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Create a New Event</h5>
                    <p class="card-text">Fill out the details for your event, including uploading an event image.</p>

                    <!-- Event Form -->
                    <form method="POST" action="{{ url('/organizer/dashboard/create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Enter event name" required>
                        </div>

                         <!-- Category Dropdown -->
                         <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Business and Professional">Business and Professional</option>
                                <option value="Community and Culture">Community and Culture</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                                <option value="Health and Wellness">Health and Wellness</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input type="date" name="event_date" id="event_date" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Event description" rows="4" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="location" class="form-label">Location</label>
                            <textarea name="location" id="location" class="form-control" placeholder="Location" rows="2" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="ticket_price" class="form-label">Ticket Price</label>
                            <input type="number" name="ticket_price" id="ticket_price" class="form-control" placeholder="Enter ticket price" step="0.01" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="total_tickets" class="form-label">Total Tickets</label>
                            <input type="number" name="total_tickets" id="total_tickets" class="form-control" placeholder="Enter total tickets available" required>
                        </div>

                       

                        <div class="form-group mb-3">
                            <label for="event_image" class="form-label">Event Image</label>
                            <input type="file" name="event_image" id="event_image" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
