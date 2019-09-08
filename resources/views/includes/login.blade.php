{{-- Sign Up Modal --}}
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign-up">
  Launch demo modal
</button> --}}
<!-- Sign Up Form -->
<form action="/sign-up" method="POST" enctype="multipart/form-data">
@csrf
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
        <div class="modal-body">
          <input type="text" name="first_name" placeholder="First Name">
          <input type="text" name="last_name" placeholder="Last Name">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="terms" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                I agreed to the <a href="#">terms of service</a>
            </label>
          </div>
          <button class="btn btn-success" type="submit">Register</button>
          <p>Already have an account? <a href="#">Log In</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
  
