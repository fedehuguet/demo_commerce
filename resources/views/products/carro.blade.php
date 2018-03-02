@include('layouts.app')
<div class="container" style="padding-top: 80px;">
      <h3>Cantidad de productos: {{Cart::count()}}</h3>
      <h3>Total de productos: {{Cart::subtotal()}}</h3>
      @foreach(Cart::content() as $item)
        <h4>Nombre: {{$item->name}} Precio: {{$item->price}} Cantidad: {{$item->qty}}</h4>
      @endforeach
</div>
@include('layouts.footer')