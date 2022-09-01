@extends('blank')

@section('main-content')

    <div class="container">
        <form>
            <div class="form-group">
              <label for="Inputtext">Objet du message</label>
              <input type="text" class="form-control" id="Inputtext" aria-describedby="emailHelp" placeholder="demande de congé">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div> -->
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message de demande:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="dateDebut">Date de debut de congé:</label>
                <input type="date" class="form-control" id="dateDebut">
            </div>
            <div class="form-group">
                <label for="datefin">Date de fin de congé:</label>
                <input type="date" class="form-control" id="datefin">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

@stop