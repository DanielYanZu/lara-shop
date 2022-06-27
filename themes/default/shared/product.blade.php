<div class="product-wrap">
  <div class="image"><a href="{{ $product->url }}"><img src="{{ $product->image }}" class="img-fluid"></a></div>
  <div class="product-name">{{ $product->description->name }}</div>
  <div class="product-price">
    <span class="price-new">{{ $product->master_sku->price }}</span>
    <span class="price-lod">{{ $product->master_sku->origin_price }}</span>
  </div>
</div>