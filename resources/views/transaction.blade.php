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
    <section class="d-flex flex-column gap-3">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">History Transaction</h4>
        </div>
        <div class="container">
            @if(empty($trans)||count($trans)==0)
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-6 mx-auto">
                    <div class="text-center justify-content-center pt-4 pb-4">
                      Transaction History Is Empty 
                    </div>
                  </div>
                </div>
              </div>
            @else
                @foreach ($trans as $t )
                    <div class="card">
                        <div class="card-header bg-primary text-light ml-0">
                            <div class="row">
                                <div class="col-6  pt-2">
                                    {{$t->created_at}}
                                    Transaction type : {{$t->type}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Item</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Harga Rental</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
        
                                </thead>
                                <tbody>
                                    @foreach ($t->detail as $td)
                                        <tr>
                                            <td width="40%">
                                                <img src="{{Storage::url('public/img/'.$td->film->image)}}" width="100%"  class="rounded" />
                                            </td>
                                            <td width="15%">  
                                                {{$td->film->title}}
                                            </td>
                                            <td width="20%">
                                                {{$td->film->price}}
                                            </td>
                                            <td width="10%">
                                                {{$td->film->rent_price}}
                                            </td>
                                            <td width="15%">
                                                {{$td->subtotal}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                    <th colspan="4">Grand Total</th>
                                    <th><h6> {{$t->grandtotal}}</h6></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
        
                @endforeach
            @endif
        </div>
    </section>
</main>
@endsection