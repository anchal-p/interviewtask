<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-collapse {
    flex-basis: 100%;
    flex-grow: 0;
    align-items: center;

}
.navbar-text{
    text-align: center
}

.alert.text-success {
    color: green;
}
    </style>
</head>
<body>
    @if(session()->has('message'))
    <div class="alert text-success">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('error'))
<div class="alert text-danger">
    {{ session()->get('error') }}
</div>
@endif
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="navbar-brand d-flex justify-content-center">
                <span>Task</span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
            <span class="navbar-text">
                Welcome, {{ auth()->user()->name }}
            </span>
            @endauth
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                  
                </ul>
             
            </div>
        </div>
    </nav>
    
   
    @yield('content')
</body>
</html>