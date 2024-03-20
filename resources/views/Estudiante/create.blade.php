@extends('layouts.app')

@section('content')

<div class="container">
<form class="row g-3" action="{{ url('/Estudiante') }}" method="post"  enctype="multipart/form-data">
  @csrf 
  @include('Estudiante.form',['modo'=>'Crear'])
</form>
</div>
@endsection
  


