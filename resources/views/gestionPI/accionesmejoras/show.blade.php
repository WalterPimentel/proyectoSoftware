@extends('adminlte::page')

@section('title', 'Acción: ' . $accionesmejora->metasAM)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Se encuentra en el registro: {{$accionesmejora->metasAM}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('accionesmejoras.index')}}" class="btn d-flex align-items-center">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Acciones de mejora</i>
        </a>
    </div>
@stop

@section('content')    

    <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}">
                <i class="fas fa-home fa-xs">   Home   </i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-angle-left fa-xs">   Macroprocesos   </i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-angle-left fa-xs">   Estratégicos  </i>
            </a>
        </li>
        <li>
            <a href="{{route('accionesmejoras.index')}}">
                <i class="fas fa-angle-left fa-xs">   Planificación Institucional   </i>
            </a>
        </li>
        <li>
            <a href="{{route('accionesmejoras.index')}}">
                <i class="fas fa-angle-left fa-xs">   Acción Mejora    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   {{$accionesmejora->metasAM}}   </i>
        </li>        
    </ol>
    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    {{$accionesmejora->descripcionPFD}}
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$accionesmejora->id}}</td>
            </tr>
            <tr>
                <th>Plan de Funcionamiento y Desarrollo</th>
                <td>{!! $descripcionPFD !!}</td>
            </tr>
            <tr>
                <th>Comisión o Área</th>
                <td>{!! $nombreComision !!}</td>
            </tr>
            <tr>
                <th>Monitoreo del Plan de Funcionamiento y Desarrollo</th>
                <td>{!!$descripcionMPFD!!}</td>
            </tr>
            <tr>
                <th>Tipo de Recurso</th>
                <td>{!!$descripcionRecurso!!}</td>
            </tr>
            <tr>
                <th>Metas de Acciones de Mejora</th>
                <td>{{ $accionesmejora->metasAM }}</td>
            </tr>
            <tr>
                <th>Descripción de Acciones de Mejora</th>
                <td>{{ $accionesmejora->descripcionAM }}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$accionesmejora->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$accionesmejora->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('accionesmejoras.destroy', $accionesmejora->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$accionesmejora->descripcionPFD}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('accionesmejoras.edit', $accionesmejora->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop