@extends('back_layout')
@section('content')
<form class="form-horizontal" method="POST" action="{{ url('/user/'.$users->id.'/edit') }}" id="form-edit">
  {{ csrf_field() }}
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Nom d'utilisateur <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input value="{{ $users->id }}"id="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" placeholder="username" required="required" type="text" hidden>
      <input value="{{ $users->username }}"id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="username" placeholder="username" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prenom">Prénom <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input value="{{ $users->first_name}}" id="prenom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="prenom" placeholder="First Name" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input value="{{ $users->last_name}}" id="nom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nom" placeholder="Last Name" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mail">Email <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input value="{{ $users->email }}"id="mail" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="mail" placeholder="Email" required="required" type="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select name="role" id="role" class="select2_single form-control" data-placeholder="Select the type">
        <option value="0" @if($users->type == "0") selected @endif>Elève</option>
        <option value="1" @if($users->type == "1") selected @endif>Professeur</option>
        <option value="2" @if($users->type == "2") selected @endif> Administrateur</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Classe <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select name="classes[]" id="classe" class="select2_multiple form-control" data-placeholder="Choisis une/des classe(s)" multiple>
        @if($users->fk_classe != NULL)
              <option value="{{ $users->classe->classe }}" selected>{{ $users->classe->classe }}</option>
        @endif
        @foreach($classes as $classe)
              <option value="{{ $classe->classe }}">{{ $classe->classe }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button id="submit-edit" type="submit" class="btn btn-success">Modifier</button>
    </div>
  </div>
</form>
@endsection
