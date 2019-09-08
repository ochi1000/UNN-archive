@extends('admin.layouts.base')
@section('title', 'Create File')

    @section('content')
        <section>
            <div class="row">
                    <div class=" col-md-6 ">
                        @include('includes.alerts')
                    </div>
            </div>
       </section>
       
        <section>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="/admin/files/create" method="POST" enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group">
                            <label for="name">Name of File</label>
                        <input id="name" name="name" value="{{$request->old('name')}}" class="form-control" aria-label="Name of file">
                        </div>
                        <div class="form-group">
                            <label for="author">Author(s)</label>
                            <input id="author" name="author" value="{{$request->old('author')}}" class="form-control" aria-label="Author(s)" placeholder="Eg: Engr. O.C. Jideofor, Dr. D. Oyeka, ...">
                        </div>

                        <div class="form-group">
                            <label for="file-category">File Category</label>
                            @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="category" value="{{$category->name}}" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$category->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="description">Description (Abstract)</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{$request->old('description')}}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="file" name="fileProduct">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div style="border: #f0f0f0 2px dashed; height:450px;">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection