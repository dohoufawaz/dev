@extends("layouts.marster")
@section("content")
  



  <div class="row mb-2">
    @foreach ($products as $product )
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h5 class="mb-0">{{$product->title}}</h5>
          <div class="mb-1 text-muted">{{$product->created_at->format('d/m/Y')}}</div>
          <p class="mb-auto">{{$product->subtitle}}</p>
          <strong class="mb-auto">{{$product->getPrice()}}</strong>
          <a href="{{route ('products.show', $product->slug)}}" class="stretched-link btn btn-info">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{$product->image}}" alt="">
        </div>
      </div>
    </div>
    @endforeach
   
  </div>


@endsection