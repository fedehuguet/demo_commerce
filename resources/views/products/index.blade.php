@include('layouts.app')
<div class="container" style="padding-top: 80px;">
      <div class="col-md-12">
        <h1 id="" class="col-xs-11 display-4 text-xs-center m-y-3">Productos Disponibles</h1>
      </div>
      <div class="row">
        @foreach($products as $item)
        <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-block">
                  <img class="card-img-top img-fluid" src="img/arte.jpg" alt="Instalacion">
                  <h4 id="product_add" class="card-title" idProduct="{{$item->id}}">{{$item->name}}</h4>
                  <p class="card-text">{{$item->price}}</p>
              </div>
            </div>
        </div>
        
        @endforeach
      </div>
      <h3>Cantidad de productos: {{Cart::count()}}</h3>
      <h3>Total de productos: {{Cart::subtotal()}}</h3>
      @foreach(Cart::content() as $item)
        <h4>Nombre: {{$item->name}} Precio: {{$item->price}} Cantidad: {{$item->qty}}</h4>
      @endforeach
</div>
@include('layouts.footer')