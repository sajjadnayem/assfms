<div class="container-xl">
  <a class="navbar-brand align-items-center" href="index-2.html">
    As<small>Sunnah</small>
    <span>Foundation</span>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars"></span> Menu
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >

      @if (session()->has('error'))
          <p class="alert alert-danger">{{session()->get('error')}}</p>
      @endif


      <li class="nav-item"><a class="nav-link active" href="{{route('website')}}">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="">About</a></li>
      <li class="nav-item"><a class="nav-link" href="causes.html">Causes</a></li>
      <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      {{-- <li class="btn btn-secondary"><a class="nav-link" href="contact.html">Register</a></li> --}}

      @if (auth()->user())
          <a href="{{route('donor.logout')}}" class="btn btn-success">{{auth()->user()->name}} | Logout</a>
          @else
          <li class="nav-item"><a class="btn btn-primary" href="{{route('create.donor')}}" style="text-decoration: none; margin-top:15px">SignUp</a></li>
          <li class="nav-item"><a class="btn btn-primary" data-toggle="modal" data-target="#donorlogin" style="text-decoration: none; margin:15px">Login</a></li>
      @endif
      {{-- <li class="nav-item"><a class="btn btn-primary" href="{{route('create.donor')}}" style="text-decoration: none; margin-top:15px">SignUp</a></li>
      <li class="nav-item"><a class="btn btn-primary" data-toggle="modal" data-target="#donorlogin" style="text-decoration: none; margin:15px">Login</a></li> --}}
    </ul>
  </div>
</div>

<!--Login Modal-->
<div class="modal fade" id="donorlogin" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="{{route('donor.login')}}" method="POST">
        @csrf
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Donor Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                      <label for="">Enter Email:</label>
                      <input name="email" type="email" class="form-control" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                      <label for="">Enter Password:</label>
                      <input name="password" type="password" class="form-control" placeholder="Enter password">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Login</button>
              </div>
          </div>
      </form>
  </div>
</div>

