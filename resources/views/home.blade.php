@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="preloader px-auto py-auto">
        <div class="unn-image">
            <img src="/images/design/unn_logo.jpg">
        </div>
    </div>
     <section class="cover">
        <div class='cover-text'>
            <h3 class="cover-head">Academic<br>Search Engine</h3>
            <div class="d-flex justify-content-center">
                <form action="/search" method="GET" class="search-tab" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control search-buttons" placeholder="Search 'Automation' projects" aria-label="Search for...">
                        <div class="input-group-append">
                          <button class="btn btn-primary search-button" type="submit"><i class="fa fa-search "></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

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
@stop

