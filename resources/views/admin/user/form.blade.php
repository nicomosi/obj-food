
<!DOCTYPE html>
<html lang="en">

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
                        {{-- <div class="col-sm-6">
                            <h2 class="page-title-text">Form Layout</h2>
                        </div> --}}
                        {{-- <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Form Layout</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Datos de {{$user->name}}</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-heading">Datos del Usuario</div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nombre</label>
                                                        <input type="text" class="form-control" value="{{$user->name}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" value="{{$user->email}}" placeholder="Enter Username">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Género</label>
                                                        <select class="form-control">
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Nacimiento</label>
                                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Tipo de Usuario</label>
                                                        <select class="form-control" name="role_id">

                                                                <option selected disabled value="">Rol</option>
                                                                <option value="">Cliente</option>
                                                                <option value="">Admin</option>
                                                                <option value="">SuperAdmin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <label class="col-form-label d-block">Select Subscription</label>
                                                    <div class="custom-control custom-checkbox custom-checkbox-1 d-inline-block mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="Yearly">
                                                        <label class="custom-control-label" for="Yearly">Yearly Subscription</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-checkbox-1 d-inline-block mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="Life">
                                                        <label class="custom-control-label" for="Life">Life Time</label>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="form-seperator-dashed"></div>
                                            <h3 class="form-heading">Domicilio</h3>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Calle y altura <i class="tip tippy" data-tippy-size="large" data-tippy-animation="scale" data-tippy-arrow="true" title="Nombre y altura de la calle"></i></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Ciudad <i class="tip tippy" data-tippy-size="large" data-tippy-animation="scale" data-tippy-arrow="true" title="Ciudad donde se encuentra el domicilio"></i></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Provincia/ Estado  <i class="tip tippy" data-tippy-size="large" data-tippy-animation="scale" data-tippy-arrow="true" title="Provincia"></i></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Código Postal <i class="tip tippy" data-tippy-size="large" data-tippy-animation="scale" data-tippy-arrow="true" title="Código Postal"></i></label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">País <i class="tip tippy" data-tippy-size="large" data-tippy-animation="scale" data-tippy-arrow="true" title="País de residencia"></i></label>
                                                        <select class="form-control">
                                                            <option selected disabled>--Seleccione un país--</option>
                                                            <option>United Kingdom</option>
                                                            <option>United State</option>
                                                            <option>China</option>
                                                            <option>Russia</option>
                                                            <option>France</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-right">
                                        <button class="btn btn-default btn-pill mr-2">Cancel</button>
                                        <button class="btn btn-primary btn-pill" type="submit">Submit</button>
                                    </div>
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Footer -->
            <div class="page-ftr">
                <div>© 2018. Objective Food</div>
            </div>
        </div>
        <!-- Sidebar Section -->
        <!-- End Sidebar Section -->
    </div>


    <!-- Include js files -->
    <!-- Vendor Plugin -->
    @include('partials.admin._adminBottomScripts')
</body>
</html>
