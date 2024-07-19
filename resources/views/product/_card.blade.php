<div class="col-12 col-sm-6 col-xl-4">
  <a class="text-decoration-none" href="{{route('product_show', $product->slug)}}">
    <div class="card mt-5 mx-auto" style="width: 16rem;">
        <img class="card-img-top" src="{{$product->img_url}}" alt="Card image cap">
        <div class="card-body" style="">
          <h5 class="card-title"><strong>{{$product->title}}</strong></h5>
          <p class="card-text product-price"><strong>£{{$product->price}}</strong></p>
        </div>
    </div>
  </a>
</div>
