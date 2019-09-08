@extends('layouts.shop_app')
@section('title', 'Search Results')

@section('content')   

{{-- Larger Screen View --}}
@if(count($search_results))
<section class="hide-for-small" style="margin-top:2rem; padding-top:2.5rem; padding-left:5rem; height:100%; ">
    <div class="row">
        <div class="col-md-7">
            @if($numOfResults = $search_results->total())
                <p class="about" style="font-style:italic;">About {{$numOfResults}} Results</p>
            @endif             
            @foreach($search_results as $search_result)  
                <div class="list bg-white rounded" >       
                    <a href="/papers/{{$search_result->id}}">
                        <p class="list-header">{{\Illuminate\Support\Str::words($search_result->name, 5, '...')}}</p>
                        <p>{{ \Illuminate\Support\Str::words($search_result->description, 50, '... more')}}</p>
                        <div class="d-block author-date">
                            <div class="d-inline-block">
                                Authors: {{ \Illuminate\Support\Str::words($search_result->author, 4, '...')}}
                            </div>
                            <div class="d-inline-block float-right">
                                {{$search_result->created_at->toFormattedDateString()}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach            
            <div class="d-flex justify-content-center">
                {{$search_results->appends(Request::except('page'))->links() }}
            </div>
        </div>
    </div>
</section>
@else       
<div class="d-flex justify-content-center" style="margin-top:2.5rem; padding-top:2.5rem; height:100%">
    <h3>No results found on "{{$search}}"</h3>
</div>
@endif 

{{-- Mobile View --}}
<section class="show-for-small mt-5 px-3" >
    @if(count($search_results))
        @if($numOfResults = $search_results->total())
        <p class="about" style="font-style:italic;">About {{$numOfResults}} Results</p>
        @endif             
        @foreach($search_results as $search_result)          
            <div class="list bg-white rounded">
                <a href="/papers/{{$search_result->id}}">
                    <p class="list-header">{{\Illuminate\Support\Str::words($search_result->name, 5, '...')}}</p>
                    <p>{{ \Illuminate\Support\Str::words($search_result->description, 29, '... more')}}</p>
                    <div class="d-block author-date">
                        <div class="d-inline-block">
                            Authors: {{ \Illuminate\Support\Str::words($search_result->author, 4, '...')}}
                        </div>
                        <div class="d-inline-block float-right">
                            {{$search_result->created_at->toFormattedDateString()}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        @endif
        <div class="d-flex justify-content-center">
            {{$search_results->appends(Request::except('page'))->links() }}
        </div>
        
</section>

@stop