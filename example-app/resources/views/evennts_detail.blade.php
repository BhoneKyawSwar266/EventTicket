<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Details</title>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .event-image {
            width: 100%; 
            height: auto; 
            border-radius: 10px;
            object-fit: cover;
        }
        .event-content {
            padding: 20px;
        }

        html, body {
        height: 100%; /* Ensure the height of the page is 100% */
        margin: 0; /* Remove default margin */
        display: flex;
        flex-direction: column; /* Arrange content vertically */
        }

        .container {
            flex: 1; /* Allow the container to grow and take available space */
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .navbar-nav-center {
            margin: 0 auto; 
        }

                .event-img {
            height: 200px;
            object-fit: cover; 
            width: 100%; 
        }

        .text-truncate-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3; 
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

    </style>
</head>
<body class="">
    @include('layouts.homenav')

    <div class="container py-5">
        <div class="row align-items-center">

            
            <!-- Event Image -->
            <div class="col-md-6">
                <img src="{{ asset('uploads/category/' . $events->event_image) }}" alt="{{ $events->event_name }}" class="event-image">
            </div>
            <!-- Event Details -->
            <div class="col-md-6 event-content">
                <h1 class="display-5">{{ $events->event_name }}</h1>
                <p class="text-muted">{{ $events->description }}</p>
                <p><strong>Date:</strong> {{ $events->event_date }}</p>
                <p><strong>Location:</strong> {{ $events->location }}</p>
                <p><strong>Ticket Price:</strong> {{ $events->ticket_price }} MMK</p>
                <p><strong>Total Tickets:</strong> {{ $events->total_tickets }}</p>
                <button class="btn btn-primary">Buy Tickets</button>
            </div>

        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center p-5">Related Events</h2>
        <div class="row g-4 ">
            @foreach($related as $event)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card h-100" style="width: 100%;">
                    <img src="{{ asset('uploads/category/' . $event->event_image) }}" class="card-img-top event-img" alt="{{ $event->event_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->event_name }}</h5>
                        <p class="card-text text-truncate-lines">{{ $event->description }}</p>
                        <p><strong>Date:</strong> {{ $event->event_date }}</p>
                        <p><strong>Location:</strong> {{ $event->location }}</p>
                        <p><strong>Price:</strong> {{ $event->ticket_price }} MMK</p>
                        <p><strong>Category:</strong> {{ $event->category }} </p>
                        <a href="{{url('/events/details/'.$event->id)}}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Rights Reserved @Website</p>
        </div>
    </footer>
</body>
</html>
