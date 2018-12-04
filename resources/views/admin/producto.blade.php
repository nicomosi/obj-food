
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
                            <h2 class="page-title-text">Producto {{$producto->producto_nombre}}</h2>
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
                                    <img style="max-width: 100px" src="/storage/productos/{{$producto->producto_foto}}" alt="imagen del producto">
                                    <form class="col-6" enctype="multipart/form-data" method="post" action="{{ route('editProducto', $producto->id) }}">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <label for="producto_nombre">Nombre del Producto</label>
                                        <input class="form-control" type="text" name="producto_nombre" value="{{$producto->producto_nombre}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_precio">Precio</label>
                                            <input type="number" class="form-control" name="producto_precio" value="{{$producto->producto_precio}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_stock">Stock</label>
                                            <input type="number" class="from-control" name="producto_stock" value="{{$producto->producto_stock}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_foto">Foto del Producto</label>
                                            <input name="producto_foto" class="form-controll" type="file">
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

                                        <button class="btn btn-primary" type="submit">Cargar Producto</button>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <form action="{{ url('/adm/productos/'. $producto->id .'/delete')}}" method="post" name="" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
    @include('partials.admin._adminBottomScripts')
</body>
</html>
