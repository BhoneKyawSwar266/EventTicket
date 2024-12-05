<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bootstrap Card with Modern Design -->
            <div class="card shadow-sm mb-4">
                <div class="card-body bg-dark text-light">
                    <p class="mb-4">
                        Use the button below to create a new event and manage your inventory effectively.
                    </p>
                    <a href="{{ url('/organizer/dashboard/create') }}" class="btn btn-primary btn-lg">
                        Create Event
                    </a>
                </div>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Events Table -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-light">
                    <h5 class="mb-0">Event List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Event Name</th>
                                <th>Category</th>
                                <th>Event Date</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Ticket Price (MMK)</th>
                                <th>Total Tickets</th>
                                <th>Event Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->event_name }}</td>
                                    <td>{{ $event->category}}</td>
                                    <td>{{ $event->event_date }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{($event->ticket_price) }}</td>
                                    <td>{{ $event->total_tickets }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/category/' . $event->event_image) }}" 
                                             alt="{{ $event->event_name }}" 
                                             class="img-thumbnail" 
                                             style="width: 100px; height: auto;">
                                    </td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ url('organizer/dashboard/' . $event->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{  url('organizer/dashboard/' . $event->id . '/delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
