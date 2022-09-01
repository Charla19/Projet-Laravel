@extends('blank')

@section('main-content')

<div class="container">
<h1>Nouveau personnel</h1>
    
    <form>  
        <div class="form-group">  <label for="exampleFormControlTextarea1">Nom et Prénom</label> 
        <div class="row">  <div class="col">  <input type="text" class="form-control" placeholder="Nom">  </div>  
        <div class="col">  <input type="text" class="form-control" placeholder="Prénom"> </div> </div></div>
    
        <fieldset class="form-group row">  <legend class="col-form-label col-sm-2 float-sm-left pt-0">Genre</legend>  
            <div class="col-sm-10">  <div class="form-check">  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>  
                <label class="form-check-label" for="gridRadios1">  Homme  </label>  </div>  
            <div class="form-check">  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">  
                <label class="form-check-label" for="gridRadios2">  Femme  </label>  </div> </fieldset>
    
        <div class="form-group">  <label for="exampleFormControlInput1">Adresse email</label>  
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@erpentreprise.com">  </div>      
    
        <div class="form-group">  <label for="exampleFormControlInput2">Numéro Téléphone</label>  
            <input type="tel" class="form-control" id="exampleFormControlInput2">  </div>  
            
        <div class="form-group">  <label for="exampleFormControlSelect1">Poste</label>  <select class="form-control" id="exampleFormControlSelect1">  
        <option selected>choisir...</option>  <option>Secrétaire</option> <option>Développeur</option>  <option>Comptable</option>  <option>Administration</option>  <option>RH</option>  </select>  </div>  
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    
</div>

@endsection