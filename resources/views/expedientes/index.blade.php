@extends('layouts.app')

@section('content')

<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><div class="row"><div class="col">{{ __('Expedientes') }}</div><div class="col text-end"><a href="{{route('expedientes.create')}}" type="button" class="btn btn-primary me-3">
                    Nuevo expediente
                </a></div></div></div>

                <div class="card-body">
                
                    <table id="table" class="table align-middle mb-0 bg-white" data-order='[[ 1, "asc" ]]' data-page-length='7'>
                      
                        <thead class="bg-light">
                          <tr>
                            <th>Número de expediente</th>
                            <th>Asunto</th>
                            <th>Fecha de inicio</th>
                            <th>Estado</th>
                            <th>Usuario que registró</th>
                            <th></th>
                            @can('expedientes.delete')<th></th>@endcan
                          </tr>
                          
                        </thead>
                        <tbody>
                          
                        
                          @foreach($expedientes as $expediente)
                          
                          <tr>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                                <p class="fw-normal mb-1">{{$expediente->numero_expediente}}</p>
                            </td>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                              <p class="fw-normal mb-1">{{$expediente->asunto}}</p>
                            </td>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                                <p class="fw-normal mb-1">{{$expediente->fecha_inicio}}</p>
                            </td>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif><span class="badge @if($expediente->id_estatus == 3) text-bg-success @elseif($expediente->id_estatus == 2) text-bg-warning @elseif($expediente->id_estatus == 1) text-bg-primary @endif rounded-pill d-inline">{{$expediente->estatus->nombre_estatus}}</span></td>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                                <p class="fw-normal mb-1">{{$expediente->usuarioRegistra->nombre}} {{$expediente->usuarioRegistra->primer_apellido}} {{$expediente->usuarioRegistra->segundo_apellido}}</p>
                            </td>
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                                <a href="{{route('expedientes.edit', $expediente->idexpedientes)}}" type="button" class="@if(!is_null($expediente->deleted_at)) text-white @endif btn btn-link btn-sm btn-rounded">
                                    Editar
                                </a>
                            </td>
                            @can('expedientes.delete')
                            <td @if(!is_null($expediente->deleted_at)) class="mb-2 bg-danger text-white" @endif>
                              @if(is_null($expediente->deleted_at))
                                <form method="POST" action="{{route('expedientes.destroy', $expediente->idexpedientes)}}">
                                  @csrf
                                  @method('DELETE')
                                  <input class="btn btn-link btn-sm btn-rounded" type="submit" value="Borrar" />
                                </form>
                              @else
                                @can('expedientes.restore')
                                  <a href="{{route('expedientes.show', $expediente->idexpedientes)}}" type="button" class="text-white btn btn-link btn-sm btn-rounded">
                                    Restaurar
                                  </a>
                                @endcan
                              @endif
                            </td>
                            @endcan
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  jQuery(document).ready( function($) {
    
    $('#table').DataTable({
    "aoColumnDefs": [
      { 'bSortable': false, 'aTargets': [ 0,1,4,5,6 ] }
    ],
    "language":{
      "decimal":        "",
      "emptyTable":     "No hay información disponible",
      "info":           "Mostrando del _START_ al _END_ de _TOTAL_ registros",
      "infoEmpty":      "Mostrando del 0 al 0 de 0 registros",
      "infoFiltered":   "(filtrado de _MAX_ registros totales)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Mostrar _MENU_ registros",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search":         "Buscar:",
      "zeroRecords":    "No se encontraron resultados",
      "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
      },
      "aria": {
        "sortAscending":  ": activar para ordenar la columna ascendentemente",
        "sortDescending": ": activar para ordenar la columna descendentemente"
      }
    }
  });
  });
</script>
@endsection
