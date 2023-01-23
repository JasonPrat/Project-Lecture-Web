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
        <form action="{{route('createpost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="border-info p-3 mt-4">
                <div class="row pt-2">
                    <h2 class ="text-info">Add New Film</h2>
                </div>
            </div>
            
            <div class="form-group mb-3">
                <label for ="title" class="form-label" ><h4>Title</h4></label>
                <input type="text" name="title" class="form-control @error('item_name')
                is-invalid
                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Title" >
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for ="category" class="form-label" ><h4>Film Genre</h4></label>
                <select name="category_id" class="form-select" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Value">
                    @foreach ($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for ="price" class="form-label" ><h4>Film Price</h4></label>
                <input type="text" name="price" class="form-control @error('price')
                is-invalid
                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Price" >
                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for ="rent_price" class="form-label" ><h4>Film Rent Price</h4></label>
                <input type="text" name="rent_price" class="form-control @error('price')
                is-invalid
                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Rent Price" >
                @error('rent_price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for ="synopsis" class="form-label"><h4>Film Synopsis</h4></label>
                <textarea type="text" name="synopsis" class="form-control @error('item_desc')
                is-invalid
                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Film Synopsis" ></textarea>
                @error('synopsis')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="images" class="form-label" ><h4>Film Image</h4></label>
                <input type="file"id="images" name="images" class="form-control @error('images')
                is-invalid
                @enderror">
                @error('images')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button  type="submit" class="btn btn-outline-primary" style="width: 150px">Add Film</button>
            
        </form>
    </section>
</main>

@endsection