@extends('back_layout')
@section('content')
@if(Session::get('success') == 'Create')
<script>swal("Success !", "The user has been created !", "success");</script>
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
			<th>Nom d'utilisateurs</th>
			<th>Nom complet</th>
      <th>Email</th>
      <th>Classe</th>
      <th>Type</th>
			<th>Edit</th>
      <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>
          {{ $user->username }}
				</td>
        <td>
          {{ $user->first_name.' '.$user->last_name }}
        </td>
        <td>
          {{ $user->email }}
        </td>
        <td>
          {{ $user->classe->classe }}
        </td>
        <td>
          @if($user->role == 0)
            User
          @elseif($user->role == 1)
            Professeur
					@else
						Administrateur
          @endif
        </td>
        <td>
          <a href="{{ url('user/'.$user->id.'/edit') }}"><i class="mdl-color-text--green-400 material-icons" role="presentation">create</i></a>
				</td>
        <td>
          <a href="{{ url('user/'.$user->id.'/delete') }}" class="confirmation"><i class="mdl-color-text--red-400 material-icons" role="presentation">delete</i></a>
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
		title: "Are you sure?",
		text: "You are deleting a user !",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#ef5350",
		confirmButtonText: "Yes, delete it!",
		closeOnConfirm: false
	}, function(isConfirm){
		if (isConfirm) window.location.href = linkURL;
	});
}
</script>
@endsection
