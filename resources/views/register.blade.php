@extends('layout.mainlayout')
@section('content')
<main class="content flex-fill">
    <section>
        <nav class="nav-content gap-3">
          <div class="d-flex gap-3 align-items-center">
            <div>
              <p class="title-content mb-2">Welcome to Disniplix</p>
            </div>
          </div>
        </nav>
    </section>
    <section class="vh-50">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-12">
              <div class="card text shadow" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <p class="text-primary text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                      <form action="{{route('registPost')}}"class="mx-1 mx-md-4" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-3">
                          <div class="form-outline flex-fill">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name')
                            is-invalid
                            @enderror" placeholder="Full name" required />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <div class="form-outline flex-fill">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email"name="email" class="form-control @error('email')
                            is-invalid
                            @enderror" placeholder="Email" required/>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <div class="form-outline flex-fill">
                            <label class="form-label" for="password">Password</label>
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
      
                        <div class="d-flex flex-row align-items-center mb-5"> 
                          <div class="form-outline flex-fill">
                            <label class="form-label" for="password_confirm">Confirm password</label>
                            <input type="password" id="password" name="password_confirm" class="form-control @error('password')
                            is-invalid
                            @enderror" placeholder="Confirm Password" required />
                          </div>
                        </div>
      
                        <div class="d-flex justify-content-center mb-3">
                          <button type="submit" class="btn btn-dark btn-lg rounded-5 p-2 px-5">Register</button>
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