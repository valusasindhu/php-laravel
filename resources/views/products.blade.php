@extends('layouts.default')
@section('title', 'Ecom - Products')
@section('content')
<main class="container">
    <section>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4">
                    <img style=" width:200px; height:200px" src="{{ $product->image }}" alt="">
                    <p>{{ $product->title }}</p>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection