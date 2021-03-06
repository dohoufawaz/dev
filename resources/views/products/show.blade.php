@extends("layouts.marster")
@section("content")
  

<div class="col-md-12">
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Design</strong>
      <h5 class="mb-0">{{$product->title}}</h5>
      <p class="mb-0">{{$product->description}}</p>
      <strong class="mb-auto">{{$product->getPrice()}}</strong>
      <form action="{{route ('cart.store',$product->slug)}}" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type="submit" class="btn btn-success">Add to cart <i class="fa fa-shopping-cart"></i></button>
      </form>
    </div>
    <div class="col-auto d-none d-lg-block">
        <img src="{{$product->image}}" alt="">
    </div>
  </div>
</div>

@endsection