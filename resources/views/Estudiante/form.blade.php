<h1>
    {{ $modo }} Estudiante
</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
         @Foreach( $errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="col-md-6">
            <label id="lbel"  for="Nombre"class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre"class="form-control" value="{{ isset($estudiante->nombre)?$estudiante->nombre:old('nombre') }}">
        </div>
        <div class="col-md-6">
            <label id="lbel" for="ApellidoPaterno"class="form-label">Apellido Paterno</label>
            <input type="text" name="ApellidoPaterno" value="{{ isset($estudiante->ApellidoPaterno)?$estudiante->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno"class="form-control">
        </div>
        <div class="col-md-6">
            <label id="lbel" for="ApellidoMaterno"class="form-label">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" value="{{ isset($estudiante->ApellidoMaterno)?$estudiante->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno"class="form-control">
        </div>
        <div class="col-12">
            <label id="lbel" for="Correo" class="form-label">Correo</label>
            <input type="correo" name="Correo"value="{{ isset($estudiante->Correo)?$estudiante->Correo:old('Correro') }}" class="form-control" id="Correo">
        </div>
        <div class="col-12">
            <label id="lbel" for="Foto" class="form-label">Seleccione una Imagen</label>
            @if(isset($estudiante->Foto))
            <img class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$estudiante->Foto }}" width="100" alt="">
            @endif
            <input type="file" name="Foto"value="" class="form-control" id="Foto" >
        </div>
        <div class="col-12">
            <input type="submit" value="{{ $modo }} Datos"class="btn btn-primary">
            <a class="btn btn-warning" href="{{ url('Estudiante') }}"> reguresar</a>
        </div>