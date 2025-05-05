@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><div class="row"><div class="col">{{ __('Expedientes') }}</div><div class="col text-end"><a href="{{route('crear-expediente')}}" type="button" class="btn btn-primary me-3">
                    Nuevo expediente
                </a></div></div></div>

                <div class="card-body">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                          <tr>
                            <th>Número de expediente</th>
                            <th>Asunto</th>
                            <th>Fecha de inicio</th>
                            <th>Estado</th>
                            <th>Usuario que registró</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <p class="fw-normal mb-1">F-83458423578</p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Software engineer</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">25/abr/2025</p>
                            </td>
                            <td><span class="badge text-bg-success rounded-pill d-inline">Active</span></td>
                            <td>
                                <p class="fw-normal mb-1">Alex Ray</p>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Editar
                                  </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Borrar
                                  </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <p class="fw-normal mb-1">F-83458423578</p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Software engineer</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">25/abr/2025</p>
                            </td>
                            <td><span class="badge text-bg-danger rounded-pill d-inline">Active</span></td>
                            <td>
                                <p class="fw-normal mb-1">Alex Ray</p>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Editar
                                  </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Borrar
                                  </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <p class="fw-normal mb-1">F-83458423578</p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Software engineer</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">25/abr/2025</p>
                            </td>
                            <td><span class="badge text-bg-warning rounded-pill d-inline">Active</span></td>
                            <td>
                                <p class="fw-normal mb-1">Alex Ray</p>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Editar
                                  </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Borrar
                                  </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
