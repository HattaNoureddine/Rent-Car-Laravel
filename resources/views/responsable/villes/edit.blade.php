@extends('master')
@section('content')
<div class="col-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Modifier une ville</h4>
        <p class="card-description">
            remplir ce formulaire
        </p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form class="forms-sample" action="/ville/update" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nom</label>
            <input type="hidden" value="{{ $ville->id }}" name="id_ville">
            <input type="text" name="nom" value="{{ $ville->nom }}" class="form-control" id="exampleInputName1" placeholder="Nom">
          </div>
        
          <button type="submit" class="btn btn-primary mr-2">Modifier</button>
          <a href="/responsable/villes" class="btn btn-light">Annuler</a>
        </form>
      </div>
    </div>
  </div>
@endsection