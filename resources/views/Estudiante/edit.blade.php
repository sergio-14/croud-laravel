@extends('layouts.app')

@section('content')

<div class="container" id="contn" >
<form method="post" action="{{ url('/Estudiante/' .$estudiante->id ) }}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('Estudiante.form',['modo'=>'Editar']);   
</form>
</div>
@endsection