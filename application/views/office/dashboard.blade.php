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
				<li class="active">Neuer Subbi
				</li>
			</ul>
			
		</div>
	</div>
	@endsection



	@section('content')
	<div class="row">
		<div class="span12">
			I am the content
			
		</div>
	</div>
	@endsection