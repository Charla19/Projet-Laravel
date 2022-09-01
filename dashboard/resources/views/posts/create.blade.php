


@extends('blank')

@section('main-content')

<div class="container">
        <h1>Créer un nouveau poste</h1>
        <div class="form-group">  <label for="exampleFormControlInput1">Nom du poste</label>  
            <input type="text" class="form-control" id="exampleFormControlInput1">  </div>      
        <div class="form-group">  <label for="exampleFormControlTextarea1">Description du poste</label>  
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>  </div>     
        <button type="submit" class="btn btn-primary">Valider</button>

    </div>

@endsection