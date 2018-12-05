
<!DOCTYPE html>
<html lang="en">

{{-- Include admin Head --}}
@include('partials.admin._adminHead')

<body>
    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">
            <!-- Menu Wrapper -->
            @include('partials.admin._adminNav')
            <!-- Page header -->
            @include('partials.admin._adminHeader')
            <!-- Main Page Wrapper -->
            <div class="page-wrapper">
                <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Producto {{$producto->nombre}}</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Producto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <h5 class="panel-title">Editar Producto</h5>
                                </div>
                                <div class="panel-body d-flex justify-content-center align-items-center">
                                    <img style="max-width: 100px" src="/storage/productos/{{$producto->foto1}}" alt="imagen del producto">
                                    <img style="max-width: 100px" src="/storage/productos/{{$producto->foto2}}" alt="imagen del producto">
                                    <img style="max-width: 100px" src="/storage/productos/{{$producto->foto3}}" alt="imagen del producto">
                                    <form class="col-6" enctype="multipart/form-data" method="post" action="{{ route('editProducto', $producto->id) }}">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <label for="nombre">Nombre del Producto</label>
                                        <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input type="number" class="form-control" name="precio" value="{{$producto->precio}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" class="from-control" name="stock" value="{{$producto->stock}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="descripcion">Descripcion:</label>
                                            <textarea name="descripcion" class="form-control" cols="30" rows="10">{{$producto->descripcion}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="foto1">Foto 1</label>
                                            <input name="foto1" class="form-controll" type="file">
                                        </div>

                                        <div class="form-group">
                                            <label for="foto2">Foto 2</label>
                                            <input name="foto2" class="form-controll" type="file">
                                        </div>

                                        <div class="form-group">
                                            <label for="foto3">Foto 3</label>
                                            <input name="foto3" class="form-controll" type="file">
                                        </div>

                                        <div class="form-group">
                                            <label for="destacado">Tipo de Producto</label>
                                            <select class="form-control" name="destacado">
                                                @if($producto->destacado == 0){
                                                    <option value="0" selected>Normal</option>
                                                    <option value="1">Destacado</option>
                                                }
                                                @else{
                                                    <option value="1" selected>Destacado</option>
                                                    <option value="0">Normal</option>
                                                }
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="descuento">Descuento</label>
                                            <input name="descuento" type="number" class="form-control" value="{{$producto->descuento}}">
                                        </div>

                                        <button class="btn btn-primary" type="submit">Cargar Producto</button>
                                        
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <form action="{{ url('/adm/productos/'. $producto->id .'/delete')}}" method="post" name="" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar Producto</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Footer -->
            <div class="page-ftr">
                <div>© 2018. Created by Obj Food</div>
            </div>
        </div>
        <!-- Sidebar Section -->
        <!-- End Sidebar Section -->

    </div>


    <!-- Include js files -->
    {{-- @include('partials.admin._adminBottomScripts') --}}

      <!-- Vendor Plugin -->
      <script type="text/javascript" src="{{url('admin/assets/plugin/vendor.min.js')}}"></script>
      <!-- Datatables Plugin -->
      <script type="text/javascript" src="{{url('admin/assets/plugin/datatable/datatables.min.js')}}"></script>
      <!-- Custom Script Plugin -->
      <script type="text/javascript" src="{{url('admin/dist/js/custom.js')}}"></script>
      <!-- Custom demo Script for Datatable -->
      {{-- <script type="text/javascript" src="{{url('admin/dist/js/demo/datatable.js')}}"></script> --}}
  
      <script>
          //Intilize datable for ticket.
          $('.ticket-table').DataTable({
              responsive: true
          });
      </script>
</body>
</html>
