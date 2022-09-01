@extends('blank')

@section('main-content')

<div>
    <h1>Personnels</h1> <br>
    <table class="table">  
        <thead class="thead-dark">  
            <tr>  
                <th scope="col">#</th>  
                <th scope="col">Nom/Prénom</th>  
                <th scope="col">Poste</th>  
                <th scope="col">Contact</th>  
            </tr>  
        </thead>  
        <tbody>  
            <tr>  
                <th scope="row">1</th>  
                <td>Mark</td>  
                <td>Otto</td>  
                <td>@mdo</td>  
            </tr>  
            <tr>  
                <th scope="row">2</th>  
                <td>Jacob</td>  
                <td>Thornton</td>  
                <td>@fat</td>  
            </tr>  
            <tr>  
                <th scope="row">3</th>  
                <td>Larry</td>  
                <td>the Bird</td>  
                <td>@twitter</td>  
            </tr>  
        </tbody> 
    </table>  
</div>

@endsection