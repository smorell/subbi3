@layout('office.master')


	@section('meta')
		<title>Werbers Office - Dashboard</title>
	@endsection


	@section('breadcrumb')
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="{path="admin/index"}">Home</a> <span class="divider">/</span></li>
				<li><a href="{path="admin/Werbers_list"}">Werber</a> <span class="divider">/</span></li>
				<li class="active">Liste aller Werber
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
					@foreach ($promoter as $p)
					<tr>
						<td>{{ $p->id }}</td>
						<td>{{ $p->first_name }}</td>
						<td>{{ $p->last_name }}</td>
						<td>{{ $p->phone }}</td>
						<td>{{ HTML::mailto($p->email) }}</td>
						<td>
							<a href="{{URL::to_action('office/promoter/'.$p->id.'/edit')}}" class="btn btn-small" title="Bearbeiten"><b class="icon-edit"></b></a>
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
			{{HTML::link('office/promoter/new', 'Neuen Werber anlegen', array('class' => 'btn btn-primary pull-right'))}}
		</div>
	</div>
	@endsection