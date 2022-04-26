<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Event Backend</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="events/index.html">Project Flores, Garcia, Sorveto</a>
    <span class="navbar-organizer w-100 text-white text-center"> Web Services</span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <form action="http://127.0.0.1:8000/api/logout" method="POST">
                <input type="hidden" name="token" value="{{ Session::get('token') }}">
                <input type="submit" value="Sign Out"></input>
            </form>
        </li>
    </ul>
</nav>
<style>
    nav{
        background-color: rgb(211, 90, 46);
    }
    .cards{
        border-radius:5px;
        background-color: coral;

    }
    .cards h5,.cards p{
        color: white;
    }
    .cards:hover {
        box-shadow: 3px 5px 10px rgb(0, 0, 0, 0.5);
        background-color: rgb(248, 113, 64);
    }
</style>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="events/index.html">All Events</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-12 ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
                <h1 class="h2">All Events</h1>
            </div>

            <div class="row events">
            @foreach($events as $event)
                <div class="event col-md-4">
                    <div class="cards mb-4 shadow-sm">
                        <a href="{{ url('api/v1/events', ['id' => $event->id]) }}" class="btn text-left event col-12">
                            <div class="card-body col-12">
                                <h5 class="card-title">{{ $event-> name }}</h5>
                                <p class="card-subtitle">{{ $event-> date }}</p>
                                <hr>
                                <p class="card-text text-center"><< click to view  >></p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </main>
    </div>
</div>

</body>
</html>
