@extends('back_layout')
@section('content')
@if(Session::get('Successful') == 'Sucessful')
<script>swal("Modification effectuée avec succès !", "Le user a été modifié avec succès !", "success");</script>
@elseif(Session::get('success') == 'Delete')
<script>swal("Success !", "The user has been deleted !", "success");</script>
@elseif(Session::get('success') == 'Edit')
<script>swal("Success !", "The user has been edited !", "success");</script>
@elseif(Session::get('success') == 'Reset')
<script>swal("Success !", "The user's password has been reset !", "success");</script>
@endif
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Classe</th>
			<th>Edit</th>
      <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($classes as $classe)
			<tr>
				<td>
          {{ $classe->classe }}
				</td>
        <td>
          <a href="{{ url('user/'.$classe->id.'/edit') }}"><i class="mdl-color-text--green-400 material-icons" role="presentation">create</i></a>
				</td>
        <td>
          <a href="{{ url('user/'.$classe->id.'/delete') }}" class="confirmation"><i class="mdl-color-text--red-400 material-icons" role="presentation">delete</i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script>
$('.confirmation').on('click',function(e){
	var linkURL = $(this).attr('href');
	e.preventDefault();
	warnBeforeRedirect(linkURL);
});

function warnBeforeRedirect(linkURL) {
	swal({
		title: "Êtes-vous sûr?",
		text: "Vous désactiver un utilisateur ! ",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#ef5350",
		confirmButtonText: "Oui, le désactiver!",
		closeOnConfirm: false
	}, function(isConfirm){
		if (isConfirm) window.location.href = linkURL;
	});
}
</script>
@endsection
