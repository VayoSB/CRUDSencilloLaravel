<label for="Nombre">Nombre</label>
<input type="text" value="{{$empleado->Nombre}}" name="Nombre">
<br>

<label for="PrimerApellido">Primer Apellido</label>
<input type="text" value="{{$empleado->PrimerApellido}}" name="PrimerApellido">
<br>

<label for="SegundoApellido">Segundo Apellido</label>
<input type="text" value="{{$empleado->SegundoApellido}}" name="SegundoApellido">
<br>

<label for="Correo">Correo</label>
<input type="text" value="{{$empleado->Correo}}" name="Correo">
<br>

<label for="Foto">Foto</label>
<br>
<img width="100px" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto">
<br>
<input type="file" name="Foto">
<br> <br>

<input type="submit" value="Guardar">