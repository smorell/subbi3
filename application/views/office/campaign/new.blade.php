@layout('office.master')


	@section('meta')
		<title>Subbis Office - Dashboard</title>
	@endsection


	@section('breadcrumb')
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="{path="admin/index"}">Home</a> <span class="divider">/</span></li>
				<li><a href="{path="admin/seller_list"}">Werber</a> <span class="divider">/</span></li>
				<li class="active">Neuer Werber
				</li>
			</ul>
			
		</div>
	</div>
	@endsection



	@section('content')
	<div class="row">
		<div class="span12">
			<h5>Neuer Subbi Account!</h5>
			
				{{Form::open('office/promoter', 'POST', array('class' => 'form-horizontal', 'id' => ''))}}

				<div class="accordion " id="accordion2">
				
					<div class="accordion-group ">
					
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								Allgemeine Kontodaten
							</a>
						</div>
							<div id="collapseOne" class="accordion-body collapse in">
								<div class="accordion-inner">
							
									<div class="row">
									
										<div class="span6">
				
											<div class="control-group">
												<label class="control-label" for="firstname">Vorname</label>
												<div class="controls">
													<input type="text" id="" placeholder="Vorname" class="span4" name="first_name">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="lastname">Nachname</label>
												<div class="controls">
													<input type="text" id="" placeholder="Nachname" class="span4" name="last_name">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="street">Email</label>
												<div class="controls">
													<input type="text" id="" placeholder="name@example.com" class="span4" name="email">
												</div>
								            </div>
							            
										</div>
									
										<div class="span5">
											<div class="control-group">
												<label class="control-label" for="inputEmail">Telefon</label>
												<div class="controls">
													<input type="text" id="" placeholder="000 / 00 00 0000" name="phone">
												</div>
								            </div>
								            							            

										</div>
									</div>
								</div>
							</div>
								

						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								Office Zuordnung
							</a>
						</div>
							<div id="collapseTwo" class="accordion-body collapse out">
								<div class="accordion-inner">
							
									<div class="row">
										<div class="span11">
				
											<h4>Kommt noch...</h4>
																		            
										</div>
										
									</div>
									
								</div>
							</div>

					
					</div>
					
				</div>	

		</div>
	</div>


	<div class="row">
		<div class="span12">
			<div class=" pull-right">
			  <button type="submit" class="btn btn-primary">Speichern</button>
			  <button type="button" class="btn">Abbrechen</button>
			</div>
		</div>
	</div>

	
	{{FORM::close()}}

	@endsection

@section('extra_scripts')
<script>
	$(function(){
		$('.date').datepicker({
			format: 'dd.mm.yyyy',
			viewMode: 'years'
		});
	});
</script>
@endsection
