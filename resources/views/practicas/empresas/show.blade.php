@extends('adminlte::page')

@section('title', 'Empresa: ' . $empresa->nombreEmpresa)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>        
                Se encuentra en el registro de la empresa: {{$empresa->nombreEmpresa}}
                <small>| {{$empresa->rubroEmpresa}}</small>        
        </h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('empresas.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Empresas</i>
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
                <i class="fas fa-angle-left fa-xs">   Misionales  </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Prácticas Pre Profesionales   </i>
            </a>
        </li>
        <li>
            <a href="{{route('empresas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Empresas    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   {{$empresa->nombreEmpresa}}   </i>
        </li>        
    </ol> 

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">{{$empresa->nombreEmpresa}}</th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$empresa->id}}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>{{$empresa->nombreEmpresa}}</td>
            </tr>
            <tr>
                <th>Encargado</th>
                <td>{{$empresa->encargadoEmpresa}}</td>
            </tr>
            <tr>
                <th>Rubro</th>
                <td>{{$empresa->rubroEmpresa}}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{$empresa->direccionEmpresa}}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{$empresa->telefonoEmpresa}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$empresa->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$empresa->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('empresas.destroy', $empresa->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro \'{{ $empresa->nombreEmpresa }}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('empresas.edit', $empresa->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop
