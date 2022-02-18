<h1>{{$valor}} empleado</h1>

<label for="Nombre">Nombre</label>
<input type="text" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" name="Nombre">
<br>

<label for="PrimerApellido">Primer Apellido</label>
<input type="text" value="{{isset($empleado->PrimerApellido)?$empleado->PrimerApellido:''}}" name="PrimerApellido">
<br>

<label for="SegundoApellido">Segundo Apellido</label>
<input type="text" value="{{isset($empleado->SegundoApellido)?$empleado->SegundoApellido:''}}" name="SegundoApellido">
<br>

<label for="Correo">Correo</label>
<input type="text" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" name="Correo">
<br>

<label for="Foto">Foto</label>
<br>
@if(isset($empleado->Foto))
<img width="100px" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto">
@endif
<br>
<input type="file" name="Foto">
<br> <br>

<input type="submit" value="{{$valor}} datos">

<br>
<a href="{{url('empleado/')}}">Página de inicio</a>