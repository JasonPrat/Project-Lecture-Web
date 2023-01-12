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
  
    <section class="d-flex flex-column gap-3">
      <div class="d-flex justify-content-between align-items-center gap-3">
        <h4 class="title-section-content">CONTACT</h4>
      </div>

      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                <img src="{{ asset('/storage/img/location-pin.png')}}" alt="image error" width="50" height="50">
                <h3 class="fw-bold text-dark">STORE ADDRESS : </h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              Jalan Pembangunan Baru Raya, <br>
              Kompleks Pertokoan Emerald Blok III/12 <br>
              Bintaro, Tangerang Selatan <br>
              Indonesia <br>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <img src="{{ asset('/storage/img/open.png')}}" alt="image error" width="50" height="50">
                <h3 class="fw-bold text-dark">OPEN DAILY : </h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              08.00 - 20.00 <br>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <img src="{{ asset('/storage/img/email.png')}}" alt="image error" width="50" height="50">
                <h3 class="fw-bold text-dark">CONTACT US : </h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              Phone : 021-08899776655 <br>
              Email : happybookstore@happy.com <br>
            </div>
          </div>
        </div>
      </div>


    </section>
@endsection