
<div class="form-group">


    <label class="control-label" for="Nombre">{{'Nombre'}}</label>

<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" 
name="Nombre" 
id="Nombre"
    value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label class="control-label" for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" 
name="ApellidoPaterno" 
id="ApellidoPaterno"
value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
{!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label class="control-label" for="ApellidoMaterno">{{'Apellido Materno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" 
name="ApellidoMaterno" 
id="Apellido Materno" 
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
{!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label class="control-label" for="Correo">{{'Correo'}}</label>
<input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':''}}" 
name="Correo" 
id="Correo"
value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
{!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>

@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto}}" class="img-thumbnail img-fluid" alt="" width="200">
@endif


<input type="file" class="form-control {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value="">
{!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar' : 'Modificar' }}">

<a href="{{url('empleados')}}" class="btn btn-primary">Regresar</a>