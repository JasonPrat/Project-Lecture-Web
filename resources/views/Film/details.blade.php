@extends('layout.mainlayout')
@section('content')
<main class="content flex-fill">
    <section>
        <nav class="nav-content gap-3">
          <div class="d-flex gap-3 align-items-center">
            <div>
              
              <p class="title-content mb-2">Hello, {{Auth::user()->name}}</p>
              
            </div>
          </div>
        </nav>
    </section>
    <section class="d-flex flex-column gap-3">
        <div class="card container pt-1 bg-light">
            <div class="card-header bg-primary text-light row">
                <div class="col-12 col-md-6">
                        <h1 class="text-white">Product Details</h1>
                </div>
            </div>
            <div class="card-body row container">
                <div class="container rounded p-2 bg-light">
                    
                    <div class="row bg-light">
                        <div class="col-1 col-lg-3  ">
                                <img src="{{Storage::url('public/img/'.$film->image)}}" width="100%"  class="rounded" />
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="row pl-2">
                                <h1 class="text-dark">{{$film->title}}</h1>
                            </div>
                            <div class="row pl-2">
                                <label class="form-label">Category</label>
                                <h4 class="text-dark">{{$film->category->name}}</h4>
                            </div>
                            <div class="row pl-2">
                                <label class="form-label">Price</label>
                                <h4 class="text-dark">{{$film->price}}</h4>
                            </div>
                            <div class="row pl-2">
                                <label class="form-label">Rent Price</label>
                                <h4 class="text-dark">{{$film->rent_price}}</h4>
                            </div>
                            <div class="row pl-2">
                                <label class="form-label">Synopsis</label>
                                <h4 class="text-dark">{{$film->synopsis}}</h4>
                            </div>
                            <div class="row pl-2 text-end">
                                {{-- @auth
                                    @if (Auth::user()->role=="member")
                                        <form class=" text-end" action="{{route('createcart')}}" method="POST">
                                            @csrf
                                            <label>Qty</label>
                                            <input type="hidden" name="item_id" value="{{$item->id}}">
                                            <input type="number" name="qty" min="1" style="width:100px" >
                                             <button type="submit" class="btn btn-outline-primary btn-primary text-white rounded-4" style="widht: 200px">Add to cart</button>
                                        </form>
                                    
                                    @endif
                                @else
                                    <a class="btn btn-outline-primary btn-primary text-white rounded-4" style="width: 200px" href="{{route('login')}}">Login To Buy</a>
                                @endauth --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>    
@endsection