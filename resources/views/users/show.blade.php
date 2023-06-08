@extends('adminlte::page')

@section('title', 'Usuario: ' . $user->name)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>
            Se encuentra en el registro del Usuario: 
            {{$user->name}} 
        </h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('users.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Usuarios</i>
        </a>
    </div>
@stop

@section('content')    
    
    <div>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home')}}">
                    <i class="fas fa-home fa-xs">   Home   </i>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Usuarios del Sistema   </i>
                </a>
            </li>
            <li>
                <i class="fas fa-angle-left fa-xs">   {{$user->name}}   </i>
            </li>
        </ol>
    </div>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    {{$user->name}}
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$user->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$user->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Usuario \'{{$user->name}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('users.edit', $user->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop