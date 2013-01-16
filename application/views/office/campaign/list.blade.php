@layout('office.master')


	@section('meta')
		<title>Subbis Office - Dashboard</title>
	@endsection


	@section('breadcrumb')
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="{path="admin/index"}">Home</a> <span class="divider">/</span></li>
				<li><a href="{path="admin/Werbers_list"}">Kampagnen</a> <span class="divider">/</span></li>
				<li class="active">Liste aller Kampagnen
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
					<th>Name</th>

					<th>Aktion</th>
				</thead>
				<tbody>
					@foreach ($campaign as $p)
					<tr>
						<td>{{ $p->id }}</td>
						<td>{{ $p->name }}</td>
						<td>
							<a href="{{URL::to_action('office/campaign/'.$p->id.'/edit')}}" class="btn btn-small" title="Bearbeiten"><b class="icon-edit"></b></a>
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
			{{HTML::link('office/campaign/new', 'Neue Kampagne anlegen', array('class' => 'btn btn-primary pull-right'))}}
		</div>
	</div>
	@endsection