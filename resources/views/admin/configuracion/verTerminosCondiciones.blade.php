@extends('layouts.menu')

@section('css')
 <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
@endsection


@section('contenido')

<div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Terminos y Condiciones</h4>
                    <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#inlineForm"><i class="feather icon-check-square"></i> Nuevo</button>          
      
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($dataTerminos as $item)
                                   <tr>
                                   <td>{{$item->id}}</td>
                                   <td>{{$item->nombre}}</td>
                                   <td>{{$item->descripcion}}</td>
                                </tr>
                                   @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

 <!-- Modal -->
 <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Crear Términos y Condiciones</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form method="POST" action="{{route('crearTerminosCondiciones')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="col-12">
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control" id="floating-label1" name="nombre" placeholder="Nombre">
                            <label for="floating-label1">Nombre</label>
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset class="form-label-group">
                            <textarea class="form-control" id="label-textarea" rows="6" name="descripcion" placeholder="Descripción"></textarea>
                            <label for="label-textarea">Descripción</label>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')
<script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
@endsection
