<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/m.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
  <body>
  
      <div class="container">
            <div class="row">
                <div class="col s12">
             <center>  <h1 style="font-size: 80px;text-shadow: 1px 1px 2px black, 0 0 25px red">MODIFIER LE DONNEES</h1></center>
               <br>
               
      
    <hr>
<!-- <form action="/update/traitement" method="POST">
  @csrf
  @method("PUT") -->
  <form action="{{ route('product.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
<input type="text" name="id" style="display: none;">
<div class="container mt-5">
  <div class="row g-3">
    <div class="form-group col-md-6">
    <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Article" class="form-label" >Article</label>
    <select name ="Article"  class="form-select"  style="height: 40%;">
      <option  style="text-align: center;background-color:aqua" selected>Select</option>
      <option>Ordinateur</option>
      <option>Ordinateur portable</option>
      <option>Ordinateur bureau</option>
      <option>Imprimante laster</option>
      <option>Camera</option>
      <option>Switch</option>
    </select>
   </div>
    <div class="form-group col-md-6" >
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Qu">Quantitée</label>
  <input name="Qu" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir La Quantitée" style="height: 40%;" value="{{$data->Qu}}">
</div>
<div class="form-group col-md-6" >
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Inv">Inventaire</label>
  <input name="Inv" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir La Quantitée" style="height: 40%;" value="{{$data->Inv}}">
</div>


   <div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Date">Date</label>
  <input name="Date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="La Date"  style="height: 40%;" value="{{$data->Date}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Marque">Marque</label>
  <input name="Marque" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir La Marque"  style="height: 40%;" value="{{$data->Marque}}">
</div>
<div class="form-group col-md-6" >
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Modéle">Modéle</label>
  <input name="Modéle" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le modéle"  style="height: 40%;" value="{{$data->Modéle}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Processeur">Processeur</label>
  <input name="Processeur" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le Processeur"  style="height: 40%;" value="{{$data->Processeur}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Vitesse">Vitesse</label>
  <input name="Vitesse" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir la Vitesse"  style="height: 40%;" value="{{$data->Vitesse}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Ram">Ram</label>
  <input name="Ram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir la capacité de ram"  style="height: 40%;" value="{{$data->Ram}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Format">Format</label>
  <input name="Format" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le format"  style="height: 40%;" value="{{$data->Format}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Programme">Programme</label>
  <input name="Programme" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le programme"  style="height: 40%;" value="{{$data->Programme}}">
</div>
<div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Projet">Projet</label>
  <input name="Projet" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le projet"  style="height: 40%;" value="{{$data->Projet}}">
</div>

<div class="form-group  col-md-6">
    <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="etat" class="form-label">Etat</label>
    <select name ="Etat"  class="form-select"  style="height: 40%;" >
      <option style="text-align: center;background-color:aqua" selected>Select</option>
      <option>Operationnel</option>
      <option>En panne</option>
    </select>
</div>
    <div class="form-group col-md-6">
  <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="Projet">Etablissement</label>
  <input name="Etablissement" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez Saisir le projet"  style="height: 40%;" value="{{$data->Etablissement}}">
</div>
    <!-- <div class="form-group  ">
    <label style="color:azure;font-size: 60px;text-shadow: 1px 1px 2px black, 0 0 25px blue" for="etat" class="form-label">Etablissement</label>
    <select name ="standard"  class="form-select">
      <option selected>Choose...</option>
      <option>#1</option>
      <option>#2</option>
      <option>#3  </option>
    </select> -->
</div>
</div>
<br>

<hr>
<center><button type="submit" class="btn btn-primary" style="width: 20%;">Update</button>
<a href="/liste" class="btn btn-danger" style="width: 20%;">Back</a></center>
  <br>
  <br>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  </body>
 
</html>