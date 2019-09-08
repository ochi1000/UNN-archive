@extends('admin.layouts.base')
@section('title', 'Categories')


    @section('content')
        <section>
            <div class="row">
                    <div class=" col-md-6 ">
                        @include('includes.alerts')
                    </div>
            </div>
       </section>
        <section>
            <form action="/admin/files/categories" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="input-group col-md-6">
                        <input type="text" class="form-control" placeholder="Category Name" aria-label="Category Name" aria-describedby="basic-addon2" name="name">
                        <div class="input-group-append">
                            <input class="btn btn-primary" type="submit" value="Create Category">
                        </div>
                    </div>
            </form>
            <br>
        </section>
       
        <section>
            <div class="row">
                <div class="col-lg-9 col-md-10 col-sm-12">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="hover">
                            @if(count($categories))                              
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category['name']}}</td>
                                        <td>{{$category['created_at']->toFormattedDateString()}}</td>
                                        <td><a href="#" style="color:blue; font-style:italic;">Edit</a></td>
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