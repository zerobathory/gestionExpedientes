@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Crear nuevo expediente') }}</div>
                    <div class="container py-5">
                        <div class="col-12">
                              <form>
                  
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                  
                                    <div data-mdb-input-init class="form-outline">
                                      <input type="text" id="firstName" class="form-control form-control-lg" />
                                      <label class="form-label" for="firstName">Asunto</label>
                                    </div>
                  
                                  </div>
                                  <div class="col-md-6 mb-4">
                  
                                    <select class="select form-control-lg">
                                      <option value="1"></option>
                                      <option value="2">Abierto</option>
                                      <option value="3">En proceso</option>
                                      <option value="4">Concluído</option>
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