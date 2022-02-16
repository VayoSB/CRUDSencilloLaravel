<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Correo</th>            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>
                <img width="100px" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->PrimerApellido}}</td>
            <td>{{$empleado->SegundoApellido}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">    
                Editar 
            </a>   
            <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Seguro que desea borrar el empleado?')" 
                       value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>