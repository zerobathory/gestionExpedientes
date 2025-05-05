@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Editando expdiente:') }} <strong>{{$expediente->numero_expediente}}</strong></div>
                    <div class="container py-5">
                        <div class="col-12">
                              <form method="POST" action="{{route('expedientes.update', $expediente->idexpedientes)}}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                  
                                    <div data-mdb-input-init class="form-outline">
                                      <input type="text" value="{{$expediente->asunto}}" name="asunto" class="form-control form-control-lg" />
                                      <label class="form-label" for="firstName">Asunto</label>
                                    </div>
                  
                                  </div>
                                  <div class="col-md-6 mb-4">
                  
                                    <select class="select form-control-lg" name="estatus">
                                      <option value="1" @if($expediente->id_estatus == 1) selected @endif>Abierto</option>
                                      <option value="2" @if($expediente->id_estatus == 2) selected @endif>En proceso</option>
                                      <option value="3" @if($expediente->id_estatus == 3) selected @endif>Concluído</option>
                                    </select>
                                    <label class="form-label select-label">Estatus expediente</label>
                  
                                  </div>
                                </div>
                  
                               
                  
                                <div class="mt-4 pt-2">
                                  <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Enviar" />
                                </div>
                  
                              </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection