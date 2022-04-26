<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Event Details</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <h1 class="navbar-brand col-sm-3 col-md-2 mr-0" >Project Flores, Garcia, Sorveto</h1>
    <span class="navbar-organizer w-100">{insert organization name}</span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" id="logout" href="http://127.0.0.1:8000/api/logout">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12 ml-sm-auto px-4  mt-5">
            <div class="border-bottom mb-3 pt-3 pb-2 event-title">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">@foreach($events as $event) {{ $event->name }} @endforeach</h1>
                    <!-- <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="events/edit.html" class="btn btn-sm btn-outline-secondary">Edit event</a>
                        </div>
                    </div> -->
                </div>
                <span class="h6">@foreach($events as $event) {{ $event->date }} @endforeach</span>
            </div>

            <!-- Tickets -->
            <div id="tickets" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Tickets</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                    </div>
                </div>
            </div>

            <div class="row tickets">
            @foreach($events as $et)
                @foreach($et -> event_tickets as $event_ticket)
                        <div class="col-md-4">
                            
                            <a href="{{ url('api/v1/events', ['id' => $event_ticket->id], ['token' => $event_ticket->id]) }}">
                            <div class="card mb-4 shadow-sm" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event_ticket -> name }}</h5>
                                    <p class="card-text">cost: {{ $event_ticket -> cost }}</p>
                                    @if ($event_ticket -> special_validity != NULL)
                                        @foreach(json_decode($event_ticket->special_validity, true) as $sv)
                                        {{ $sv }}
                                        
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            </a>
                        </div>
                @endforeach
            @endforeach
            </div>

            <!-- Sessions -->
            <div id="sessions" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Sessions</h2>
                </div>
            </div>

            <div class="table-responsive sessions">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Type</th>
                        <th class="w-100">Title</th>
                        <th>Speaker</th>
                        <th>Channel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $sessions)
                        @foreach($sessions-> session as $ss)
                        <tr>
                            <td class="text-nowrap">{{ $ss->start }}{{ $ss->end }}</td>
                            <td>{{ $ss->type }}</td>
                            <td><a href="sessions/edit.html"> {{ $ss->title }} </a></td>
                            <td class="text-nowrap">{{ $ss->speaker }}</td>
                            <td class="text-nowrap">Main / Room A</td>
                        </tr>
                        @endforeach
                    @endforeach

        
                    </tbody>
                </table>
            </div>

            <!-- Channels -->
            <div id="channels" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Channels</h2>
                </div>
            </div>

            <div class="row channels">
            @foreach($events as $channels)
                @foreach($channels-> channels as $channel)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">3 sessions, 1 room</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
            </div>

            <!-- Rooms -->
            <div id="rooms" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Rooms</h2>
                </div>
            </div>

            <div class="table-responsive rooms">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Capacity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $rooms)
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</body>
</html>
