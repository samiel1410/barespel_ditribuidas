@extends('layouts.app')
@section('content')


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<body background="http://localhost/barespel/resources/views/img/fondo2.jpg" style="width:100%;height:100vh;background-size:cover;background-position:center;">
<style>



</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class=""></div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}hola
                        </div>
                    @endif
<div>


</div>
                   <div class="container text-center" style="background-color: rgba(247, 251, 225, 0.8)" >
                   <b>ADMINISTRADOR</b>
  <br><br><br>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <b>CAMPUS</b>
      <div><a href="{{route('campuses.index')}}"><img src="http://localhost/barespel/resources/views/img/campus.png" width="45%" alt="campus" /></a></div>
    </div>
    <div class="col-sm">
      <b>BARES</b>
      <div><a href="{{route('bars.index')}}"><img src="http://localhost/barespel/resources/views/img/bar.png" width="45%" alt="bar" /></a></div>
    </div>
    <div class="col-sm">
      <b>MENUS</b>
      <div><a href="{{route('menus.index')}}"><img src="http://localhost/barespel/resources/views/img/menu.png" width="45%" alt="menu" /></a></div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm">
  <b>SNACK</b>
  <div><a href="{{route('snacks.index')}}"><img src="http://localhost/barespel/resources/views/img/snack.png" width="45%" alt="snack" /></a></div>
  </div>



  <div class="col-sm">
  <b>BUZON</b>
  <div><a href="{{route('buzons.index')}}"><img src="http://localhost/barespel/resources/views/img/buzon.png" width="45%" alt="buzon" /></a></div>
  
  
  </div>

  <div class="col-sm">
  <b>PREFERENCIAS</b>
  <div><a href="{{route('preferencias.index')}}"><img src="http://localhost/barespel/resources/views/img/preferencias.png" width="45%" alt="preferencias" /></a></div>
  
  </div>

  
  
  
  </div>
</div>

            </div>
        
</div>
@endsection


      
    
    <!--  Jquery  -->
   
  



    






