@extends('admin.layouts.base')
@section('title', 'File Inventory')


    @section('content')
        
        <section>
            <form action="/admin/files/create" method="GET">
                @csrf
                <input class="btn btn-primary" type="submit" value="Add new file">
            </form>
        </section>
       <br>
        <section>
            <div class="row">
                    <div class=" col-md-6 ">
                        @include('includes.alerts')
                    </div>
            </div>
       </section>

        <section>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                {{-- <th>#</th> --}}
                                <th>Image</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="hover">
                            @if(count($files))                              
                                @foreach($files as $file)
                                    <tr>          
                                        <td><img src="/{{$file->file_path}}" alt="{{$file->name}}" height="40" width="40">
                                        </td>
                                        <td>{{$file->name}}</td>
                                        <td>{{$file->author}}</td>
                                        <td>{{$file->category}}</td>
                                        <td>{{$file->created_at->toFormattedDateString()}}</td>
                                        <td><a href="#" class="active">edit</a></td>
                                    </tr>
                                 @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection