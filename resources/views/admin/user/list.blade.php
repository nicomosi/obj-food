
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
                            <h2 class="page-title-text">Productos</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Productos</li>
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
                                    <h5 class="panel-title">Listado de Productos</h5>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered basic-datatable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Usuario</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                                <th>Tipo</th>
                                                <th>Creado</th>
                                                <th>Actualizado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</a></td>
                                                    <td><a href="{{route('showUser', ['id'=>$user->id])}}" id="user-list-email">{{$user->email}}</a></td>
                                                    <td>{{$user->telefono}}</td>
                                                    <td>{{$user->role_id}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>{{$user->updated_at}}</td>
                                                    {{-- <td>
                                                        <a href="/adm/productos/{{$user->id}}">Editar</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
