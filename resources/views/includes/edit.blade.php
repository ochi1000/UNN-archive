 {{-- Edit Category Modal --}}
 <section>
    <!--Edit Category Modal -->
    <form action="/admin/products/categories/{{$category->id}}/edit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="edit-category-{{$category->name}}" tabindex="-1" role="dialog" aria-labelledby="edit-category" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Title">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                              
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Category Name" aria-label="Category Name" aria-describedby="basic-addon2" name="name">
                        </div>     
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Edit Category">
                    </div>
                </div>
            </div>
        </div>
    </form> 
</section>


{{-- Edit SubCategory Modal --}}
<section>
    <!--Edit SubCategory Modal -->
    <form action="/admin/products/subcategories/{{$subcategory->id}}/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="edit-subcategory-{{$subcategory->name}}" tabindex="-1" role="dialog" aria-labelledby="edit-subcategory" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Title">Edit Subcategory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                              
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subcategory Name" aria-label="Subcategory Name" aria-describedby="basic-addon2" name="name">
                        </div>   
                        <div class="form-group">
                            <select class="form-control" id="product-category" name="category">
                            <option name="category">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Edit Subcategory">
                    </div>
                </div>
            </div>
        </div>
    </form> 
</section>