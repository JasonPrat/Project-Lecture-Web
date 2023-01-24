@extends('layout.mainlayout')
@section('content')
<main class="content flex-fill">
    <section>
        <nav class="nav-content gap-3">
          <div class="d-flex gap-3 align-items-center">
            <div>
              <p class="title-content mb-2">Good Morning, User</p>
            </div>
          </div>
        </nav>
    </section>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Change Password</p>
      
                      <form action="{{route('changepw')}}"class="mx-1 mx-md-4" method="POST">
                        @csrf
                        
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email">Current Password</label>
                            <input type="password" id="current_password"name="current_password" class="form-control @error('email')
                            is-invalid
                            @enderror" placeholder="Current Password" required/>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="password">New Password</label>
                            <input type="password" id="password" name="password" class="form-control @error('password')
                            is-invalid
                            @enderror" placeholder="Password" required />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="password_confirm">Confirm New password</label>
                            <input type="password" id="password" name="password_confirm" class="form-control @error('password')
                            is-invalid
                            @enderror" placeholder="Confirm Password" required />
                            
                          </div>
                        </div>
      
                        
      
                        <div class="d-flex justify-content-center ">
                          <button type="submit" class="btn btn-primary btn-lg rounded-5 p-3 px-5">Change Password</button>
                        </div>
      
                      </form>
      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
@endsection