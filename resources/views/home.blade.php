@extends('layouts.main')

@section('content')
<main class="m-5">
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-12">
                <div class="card mb-5">
                    <h5 class="card-header">{{$train->brand_name}}</h5>
                    <div class="card-body">
                      <section class="d-flex justify-content-between align-items-center">
                        <div class="departure">
                            <strong>{{$train->departure}}</strong>
                            <h6>{{$train->departure_time}}</h6>
                        </div>
                        <div class="arrival">
                            <strong>{{$train->arrival}}</strong>
                            <h6>{{$train->departure_time}}</h6>
                        </div>
                        <div class="price">
                            <h4>PREZZO</h4>
                        </div>
                      </section>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
    {{-- <ul>
            <li>{{$train->id}}</li>
            <li>{{$train->brand_name}}</li>
            <li>{{$train->departure}}</li>
            <li>{{$train->arrival}}</li>
            <li>{{$train->departure_time}}</li>
            <li>{{$train->arrival_time}}</li>
            <li>{{$train->code_train}}</li>
            <li>{{$train->num_cariages}}</li>
            <br>
    </ul> --}}
@endsection