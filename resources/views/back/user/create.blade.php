@extends('back_layout')
@section('content')
<form class="form-horizontal" method="POST" action="{{ url('admin/users/create') }}" id="form-edit">
  {{ csrf_field() }}
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Nom d'utilisateur <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="username" placeholder="username" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prenom">Prénom <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="prenom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="prenom" placeholder="First Name" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="nom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nom" placeholder="Last Name" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">Email <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="mail" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="mail" placeholder="Email" required="required" type="email">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">Mot de passe <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="password" placeholder="password" required="required" type="password">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">Confirmer mot de passe <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="conf_password" placeholder="Password" required="required" type="password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select name="role" id="role" class="select2_single form-control" data-placeholder="Select the type">
        <option value="eleve" selected>Elève</option>
        <option value="professeur">Professeur</option>
        <option value="admin"> Administrateur</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Classe <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select name="classes[]" id="classe" class="select2_multiple form-control" data-placeholder="Choisis une/des classe(s)" multiple>
        <option value=""></option>
        @foreach($classes as $classe)
        <option value="{{ $classe->classe }}">{{ $classe->classe }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button id="submit-edit" type="submit" class="btn btn-success">Créer</button>
    </div>
  </div>
</form>
@endsection
