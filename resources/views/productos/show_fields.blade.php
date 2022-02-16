
  <div class="row">
    <div class="col-sm-6">
      <div class="border-bottom text-center pb-4">
        <img src="{{asset('image/'.$productos->imagen)}}"  width="300px" height="300px" alt="Responsive image"
        class="img-fluid"/>
        <h3>{{$productos->nombre}}</h3>
        <div class="d-flex justify-content-between">
    </div>
   </div>
   <div class="py-4 ">
   <p class="clearfix">
     <span class="float-left">
       Estado
     </span>
     <span class="float-right text-mutted">
       {{$productos->estado}}
     </span>

   </p>
   <p class="clearfix">
     <span class="float-left">
       Proveedor
     </span>
     <span class="float-right text-mutted">
       {{$productos->proveedor->nombre}}
     </span>

   </p>
   <p class="clearfix">
     <span class="float-left">
       Categoria
     </span>
     <span class="float-right text-mutted">
       {{$productos->categoria->nombre}}
     </span>
   </p>
   <p class="clearfix">
     <span class="float-left">
       Laboratorio
     </span>
     <span class="float-right text-mutted">
       {{$productos->laboratorio->nombre}}
     </span>
   </p>
</div>

@if($productos->estado=='ACTIVO')
<button class="btn btn-primary btn-block">{{$productos->estado}}</button>
@else
<button class="btn btn-primary btn-block">{{$productos->estado}}</button>
@endif

    </div>


    <div class="col">
      <div class="d-flex justify-content-between">
     <div>
       <h4>Informacion del Producto</h4>
     </div>
  </div>
    <div class="form-group col-sm-6">
      <strong><i class="fa fa-address-card mr-1"></i>
      Nombre
      </strong>
      <p class="text-muted">
        {{$productos->nombre}}
      </p>
      <hr>
      <strong><i class="fa fa-product-hunt mr-1"></i>
        Codigo</strong>
        <p class="text-muted">
          {{$productos->codigo}}
        </p>
        <hr>
        <strong><i class="fa fa-address-card mr-1"></i>
          Precio</strong>
          <p class="text-muted">
            {{$productos->precio}}
          </p>
          <hr>
        </div>

          <div class"form-group col-md-6">
          <strong><i class="fa fa-product-hunt mr-1"></i>
            Stock</strong>
            <p class="text-muted">
              {{$productos->stock}}
            </p>
            <hr>
                <strong><i class="fa fa-product-hunt mr-1"></i>
                  Codigo de Barras</strong>
                  <p class="text-muted">
                    {!!DNS1D::getBarcodeHTML($productos->codigo, 'C128A');!!}

                  </p>
          </div>
    </div>
