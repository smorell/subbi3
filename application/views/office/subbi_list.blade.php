@layout('office.master')


	@section('meta')
		<title>Subbis Office - Dashboard</title>
	@endsection


	@section('breadcrumb')
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="{path="admin/index"}">Home</a> <span class="divider">/</span></li>
				<li><a href="{path="admin/subbis_list"}">Subbis</a> <span class="divider">/</span></li>
				<li class="active">Liste aller Subbis
				</li>
			</ul>
			
		</div>
	</div>
	@endsection



	@section('content')
	<div class="row">
		<div class="span12">
			<table class="table table-striped table-hover">
				<thead>
					<th>Nr.</th>
					<th>Vorname</th>
					<th>Nachname</th>
					<th>Handy</th>
					<th>Email</th>
					<th>Aktion</th>
				</thead>
				<tbody>
					@foreach ($subbis as $s)
					<tr>
						<td>{{ $s->subbis_id }}</td>
						<td>{{ $s->first_name }}</td>
						<td>{{ $s->last_name }}</td>
						<td>{{ $s->phone }}</td>
						<td>{{ HTML::mailto($s->email) }}</td>
						<td>
							<a href="" class="btn btn-small" title="Bearbeiten"><b class="icon-edit"></b></a>
						</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="span12" >
			{{HTML::link('office/subbi/new', 'Neuen Subbi anlegen', array('class' => 'btn btn-primary pull-right'))}}
		</div>
	</div>
	@endsection