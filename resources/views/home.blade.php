@extends('layouts.app')
@section('content')


<main id="home">
  <div class="container flex">
    @foreach ($travelPackages as $key => $pack)

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://picsum.photos/200/300?random={{$key}}" alt="Avatar">
            <div class="text flex">
              <p>{{$pack->location_type}}!!! {{$pack->nights}} notti a</p>
              <h1>{{$pack->location}}</h1>
              <p>a soli {{$pack->cost_per_person}}€ a persona</p>
            </div>
          </div>
          <div class="flip-card-back flex">
            <p>{{$pack->accomodation_type}}</p>
            <h1>{{$pack->accomodation}}</h1>
            <p>Viaggio {{($pack->transfer_included) ? '' : 'non'}} incluso</p>
            <p>Massimo {{$pack->peolpe_maximum}} persone</p>
          </div>
        </div>
      </div>

    @endforeach

  </div>
</main>






@endsection
