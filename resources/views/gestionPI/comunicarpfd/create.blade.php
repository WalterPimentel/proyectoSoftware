@extends('layouts.plantilla')

@section('title', 'Crear Comunicado')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Comunicados PFD.</h1>

    <a href="{{route('comunicarpfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comunicarpfd.store')}}" method="POST">
        
        @csrf

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD">
        </label>
        <br><br>

        <label>Parte Interesada:
            <br>
            <input type="number" name="idParteInteresada">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionComunicarPFD" rows="5"></textarea>
        </label>
        <br><br>

        <label>Medio Comunicación:
            <br>
            <input type="text" name="medioComunicarPFD">
        </label>
        <br><br>

        <label>Fecha:
            <br>
            <input type="date" name="fechaComunicarPFD">
        </label>
        <br><br>

        <label>Hora:
            <br>
            <input type="time" name="horaComunicarPFD" id="horaActual">
            <script>

                function actualizarHora() {
                    var fecha = new Date();
                    var horaActual = fecha.getHours().toString().padStart(2, '0') + ':' + fecha.getMinutes().toString().padStart(2, '0');
                    
                    document.getElementById('horaActual').value = horaActual;
                }

                    setInterval(actualizarHora, 1000);

            </script>
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesComunicarPFD" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection