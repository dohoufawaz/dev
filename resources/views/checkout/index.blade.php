@extends('layouts.marster')
@section('extra-meta')
    <meta name="csfr-token" content="{{ csrt_token() }}">
@endsection
@section('content')
    <div class="col-md-12">
        <h1>Payment Page</h1>
    </div>
    
<form action="/create-checkout-session" method="POST">
      <button type="submit">Checkout</button>
    </form>

@endsection
@section('extra-js')
   <script>

    
   </script>
@endsection