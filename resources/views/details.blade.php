@extends('layouts.shop_app')
@section('title'){{$file->name}} @endsection

@section('content')  

<section class="mx-auto col-md-7 small-screen">
    <div class="details">
        <h1>{{$file->name}}</h1>
        <p class="published"><span><i class="fa fa-copy"></i></span> Published on {{$file->created_at->toFormattedDateString()}} by {{$file->author}}</p>
        <p class="published"><span><i class="fa fa-user-o"></i></span> Published by {{$file->author}}</p>
        <hr>
        <div>
            <form method="GET" action="/download/{{$file->id}}">
                <button type="submit" class="btn btn-primary"><span><i class="fa fa-download"></i></span> Download file</button>
                <button class="btn btn-light"><span><i class="fa fa-quote-left"></i></span> Cite</button>   
            </form>
        </div>
        <hr>
        <h4>Abstract</h4>
        <p>{{$file->description}}</p>
    </div>
    
</section>

<section class="details-image ">
    <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=http%3A%2F%2Fieee802%2Eorg%3A80%2Fsecmail%2FdocIZSEwEqHFr%2Edoc' width='100%' height='100%' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
</section>

<section class="mx-auto col-md-7 mt-3 small-screen">
    <div>
        <h3 class="similar">Similar Papers</h3>
        @foreach($similar_files as $similar_file)          
            <div class="list bg-white rounded">
                <a href="/papers/{{$similar_file->id}}">
                    <p class="list-header">{{\Illuminate\Support\Str::words($similar_file->name, 5, '...')}}</p>
                    <p>{{ \Illuminate\Support\Str::words($similar_file->description, 29, '... more')}}</p>
                    <div class="d-block author-date">
                        <div class="d-inline-block">
                            Authors: {{ \Illuminate\Support\Str::words($similar_file->author, 4, '...')}}
                        </div>
                        <div class="d-inline-block float-right">
                            {{$similar_file->created_at->toFormattedDateString()}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$similar_files->appends(Request::except('page'))->links() }}
    </div>
    
</section>

@endsection