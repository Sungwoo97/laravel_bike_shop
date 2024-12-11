@extends('layout')

@section('content')
<header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
  <h1>Bikes List</h1>
</header>

<main class="mt-6">
  @if(count($bikes)>0)
  @foreach($bikes as $bike)
  <div>
    <h2>
      <a href="{{route('bikes.show' , ['bike'=> $bike['id']]) }}">{{$bike['name']}}</a>
    </h2>
    <p>-made by : {{$bike['brand']}}</p>
  </div>
  @endforeach
  @else
  <p>출력할 내용이 없습니다.</p>
  @endif
</main>
@endsection('content')