@extends('back_layout')
@section('content')
<form class="form-horizontal" method="POST" action="{{ url('classe/create') }}" id="form-edit">
  {{ csrf_field() }}
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Classe <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="classe" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="classe" placeholder="classe" required="required" type="text">
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
