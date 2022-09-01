@extends('blank')

@section('page-title', 'Ajout client');
@section('page-description', 'Gestion de client');

@section('main-content')

<div class="container">
<h1>Nouveau client</h1>
<form>  
    <div class="form-group">  <label for="exampleFormControlTextarea1">Nom et Prénom</label> 
    <div class="row">  <div class="col">  <input type="text" class="form-control" placeholder="Nom">  </div>  
    <div class="col">  <input type="text" class="form-control" placeholder="Prénom"> </div> </div></div>

    <div class="form-group">  <label for="exampleFormControlInput1">Adresse email</label>  
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@erpentreprise.com">  </div>      

    <div class="form-group">  <label for="exampleFormControlInput2">Numéro Téléphone</label>  
        <input type="tel" class="form-control" id="exampleFormControlInput2">  </div>  
        
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>

@endsection