@extends('layout.mainlayout')
@section('content')
<main class="content flex-fill">
    <section>
        <nav class="nav-content gap-3">
          <div class="d-flex gap-3 align-items-center">
            <div>
              @auth
                <p class="title-content mb-2">Hello, {{Auth::user()->name}}</p>
              @else
                <p class="title-content mb-2">Welcome To Disniplix</p>
              @endauth


            </div>
          </div>
        </nav>
    </section>
    <section class="d-flex flex-column gap-3">
        <div class="card container mt-1 bg-light">
            <div class="card-header bg-primary text-light row">
                <div class="col-12 col-md-6">
                        <h1 class="text-white">Product Details</h1>
                </div>
            </div>
            <div class="card-body row container">
                <div class="container rounded p-2 bg-light">

                    <div class="row bg-light">
                        <div class="col-1 col-lg-3">
                                <img src="{{Storage::url('public/img/'.$film->image)}}" width="100%"  class="rounded" />
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="row ps-2">
                                <h1>{{$film->title}}</h1>
                            </div>
                            <hr>
                            <div class="row ps-2 pt-2">
                                <h4>Category</h4>
                                <p class="lead">{{$film->category->name}}</p>
                            </div>
                            <div class="row ps-2 pt-2">
                                <h4>Price</h4>
                                <p class="lead">{{$film->price}}</p>
                            </div>
                            <div class="row ps-2 pt-2">
                                <h4>Rent Price</h4>
                                <p class="lead">{{$film->rent_price}}</p>
                            </div>
                            <div class="row ps-2 pt-2">
                                <h4>Synopsis</h4>
                                <p class="lead">{{$film->synopsis}}</p>
                            </div>
                            <div class="row ms-2 pt-2 text-end">
                                @auth
                                    @if (Auth::user()->role=="member")
                                        <form class=" text-end" action="{{route('buy')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="film_id" value="{{$film->id}}">
                                            <button type="submit" class="btn btn-outline-primary btn-primary text-white rounded-4" style="width: 200px">Buy</button>
                                        </form>
                                        <form class=" text-end" action="{{route('rent')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="film_id" value="{{$film->id}}">
                                            <button type="submit" class="btn btn-outline-primary btn-primary text-white rounded-4" style="width: 200px">Rent</button>
                                        </form>

                                    @endif
                                @else
                                    <a class="btn btn-outline-primary btn-primary text-white rounded-4" style="width: 200px" href="{{route('login')}}">Login To Buy</a>
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
