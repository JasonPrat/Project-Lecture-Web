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
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mt-4 mb-5">
					<h2 class="heading-section">Login Page</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						
						<h4 class="text-center mb-4">Have an account? Login</h4>
						<form action="{{route('loginPost')}}"  method="POST">
							@csrf
							<div class="form-group">
								<input type="text" name="email" class="form-control rounded-left" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" name ="password"class="form-control rounded-left" placeholder="Password" required>
							</div>
							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
								<label class="form-check-label" for="rememberme">Remember me</label>
							  </div>
							<div class="form-group  text-center">
								<button type="submit" class="btn btn-primary rounded submit p-3 px-5">LOGIN</button>
							</div>
							
						</form>
					</div>
	        	</div>
			</div>
		</div>
    </section> 
</main>
@endsection