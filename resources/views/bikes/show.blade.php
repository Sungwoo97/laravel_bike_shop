@extends('layout')
<!-- {{print_r($bike)}} -->
@section('content')
<header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
  <h1>Bikes Details</h1>
</header>

<main class="mt-6">
  <h2>
    {{$bike['name']}}
  </h2>
  <h3>
    {{$bike['price']}}
  </h3>
  <p>
    -made by : {{$bike['brand']}}
  </p>
</main>
@endsection('content')