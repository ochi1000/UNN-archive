{{-- Sign Up Modal --}}



  <!-- Modal -->
  <div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="Sign Up" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Sign Up Form -->
        <div class="modal-body input-group d-flex justify-content-center">
          <div class="col-md-9">
              <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="fullname" placeholder="Full Name"><br>
                <input type="email" class="form-control" name="email" placeholder="Email"><br>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <br>
                
                <button class="btn btn-success" type="submit">Register</button>
                <p>Already have an account? <a href="#">Log In</a></p>
              </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  
