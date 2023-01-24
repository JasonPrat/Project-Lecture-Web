@extends('layout.mainlayout')
@section('content')
<main class="content flex-fill">
    <section>
      <nav class="nav-content gap-3">
        <div class="d-flex gap-3 align-items-center">
          <div>
            @auth
          <p class="title-content mb-2">Good Morning, {{Auth::user()->name}}</p>
          @else
          <p class="title-content mb-2">Welcome to Disniplix</p>
          @endauth
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
                    <form action="{{route('createpost')}}" class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">
                        <p class="text-primary text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add New Film</p>
                        @csrf

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('item_name')
                                is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Title" >
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="category">Film Genre</label>
                            <select name="category_id" class="form-select" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Value">
                                @foreach ($category as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="price">Film Price</label>
                            <input type="text" name="price" class="form-control @error('price')
                                is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Price" >
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="price">Film Rent Price</label>
                            <input type="text" name="rent_price" class="form-control @error('price')
                                is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Rent Price" >
                                @error('rent_price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="synopsis">Film Synposis</label>
                            <textarea type="text" name="synopsis" class="form-control @error('item_desc')
                                is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Synopsis" ></textarea>
                                @error('synopsis')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <div class="form-outline flex-fill">
                            <label class="form-label fw-bold" for="images">Film Poster</label>
                            <input type="file"id="images" name="images" class="form-control @error('images')
                                is-invalid
                                @enderror">
                                @error('images')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <button type="submit" class="btn btn-dark btn-lg rounded-5 p-2 px-5">Add Film</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</main>

@endsection