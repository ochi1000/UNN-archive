<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><b>ECE Archive</b></a>
        </div>
    
        <div>
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/logout">logout</a>
                    </div>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/register">Join</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Log in</a>
                </li> 
                @endguest
        
            </ul>
        </div>
    </div>
  </nav>
