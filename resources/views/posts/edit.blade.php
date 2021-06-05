@extends('posts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le post</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('posts.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('posts.update',$post->npro) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Numéro post:</strong>
                <input type="text" name="id" value="{{ $post->id }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Titre:</strong>
                <input type="text" name="Titre" value="{{ $post->title }}" class="form-control" placeholder="Saisir un titre">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Categorie:</strong>
                <input type="text" name="categorie" value="{{ $post->categorie }}" class="form-control" placeholder="Saisir une categorie">
            </div>
        </div>
    </div>           
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Détail:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Détail">{{ $post->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection