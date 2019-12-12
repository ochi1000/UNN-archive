<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><b>ECE Archive</b></a>
        </div>

        {{-- Desktop navbar --}}
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="mx-auto hide-for-small" style="width:50rem;">
                <form action="/search" method="GET" class="search-tab" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="text" value="" name="search" id="search" class="form-control search-buttons" placeholder='Search "Automation"' aria-label="Search for...">
                        <div class="input-group-append">
                          <button class="btn btn-primary search-button" type="submit"><i class="fa fa-search "></i></button>
                        </div>
                    </div>
                </form>
            </div>

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
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/login">{{Auth::user()->name}}</a>
                </li> --}}
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

        {{-- Mobile navbar --}}
        <div class="show-for-small">
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/login">{{Auth::user()->name}}</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/register">Join us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Log in</a>
                </li>
                @endguest

            </ul>
        </div>
    </div>
  </nav>

  <script type="text/javascript">
    // Autocomplete Search Tab
    var route = "{{ url('autocomplete') }}";
    $('#search').typeahead({
        source: function(term, process){
            return $.get(route, {term: term}, function(data) {
                return process(data);
            });
        }
    });
</script>
