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
        <h4 class="title-section-content">All Film</h4>
      </div>
  
      <div class="d-flex gap-3 flex-wrap">
        <table class= "table table-hover table-bordered"style="width:100%">
            <thead >
                <tr class= "table-light">
                    <th scope="col">
                        Film ID
                    </th>
                    <th scope="col">
                        Film Image
                    </th>
                    <th scope="col">
                        Film Title
                    </th>
                    <th scope="col">
                        Film Synopsis
                    </th>
                    <th scope="col">
                        Film Price
                    </th>
                    <th scope="col">
                        Film Rent Price
                    </th>
                    <th scope="col">
                        Film Category
                    </th>
                    <th scope="col">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($film as $f)
                    <tr class="table-light">
                        <td width="10%">
                            {{$f->id}}
                        </td>
                        <td width="10%">
                            {{$f->image}}
                        </td>
                        <td width="15%">
                            {{$f->title}}
                        </td>
                        <td width="20%">
                            {{$f->synopsis}}
                        </td>
                        <td width="10%">
                            {{$f->price}}
                        </td>
                        <td width="10%">
                            {{$f->rent_price}}
                        </td>
                        <td width="10%">
                            {{$f->category->name}}
                        </td>
                        <td>
                            <div class="w-60 btn-group " role="group">
                            <a href="#" class="btn btn-primary mx-2"><i class="bi bi-pencil"></i> Update</a>
                            {{-- <form action ="{{route('deleteitem',['id'=>$i->id])}}" method="POST">
                                {{method_field('DELETE')}}
                                @csrf
                                <button type="submit" class="btn btn-danger mx-2" value="DELETE"><i class="bi bi-trash"></i> Delete </button>
                            </form> --}}
                            
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection