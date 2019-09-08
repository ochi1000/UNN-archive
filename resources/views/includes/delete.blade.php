{{-- Delete Category Modal --}}
<section>
    <!--Delete Category Modal -->
    <form action="/admin/products/categories/{{$category->id}}/delete" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="delete-category-{{$category->name}}" tabindex="-1" role="dialog" aria-labelledby="delete-category" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Title">Delete Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                              
                        <h6>Are you sure you want to delete?</h6>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-danger left" type="submit" value="Yes">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
</section>


{{-- Delete SubCategory Modal --}}
<section>
    <!--Delete SubCategory Modal -->
    <form action="/admin/products/subcategories/{{$subcategory->id}}/delete" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="delete-subcategory-{{$subcategory->name}}" tabindex="-1" role="dialog" aria-labelledby="delete-subcategory" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Title">Delete Subcategory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                              
                        <h6>Are you sure you want to delete?</h6>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-danger left" type="submit" value="Yes">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
</section>