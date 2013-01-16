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
			<h5>Neuer Subbi Account!</h5>
			
				{{Form::open('office/subbi', 'POST', array('class' => 'form-horizontal', 'id' => ''))}}
			
			
				<div class="accordion " id="accordion2">
				
					<div class="accordion-group ">
					
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							Allgemeine Personendaten
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
												<label class="control-label" for="address1">Straße / HNr.</label>
												<div class="controls">
													<input type="text" id="" placeholder="Straße" class="span4" name="address1">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="zipcode">PLZ / Ort</label>
												<div class="controls controls-row">
													<input type="text" id="zipcode" placeholder="PLZ" class="span1" name="zipcode">
													<input type="text" id="city" placeholder="Ort" class="span3 pull-right" name="city">
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
								            
								            <div class="control-group">
												<label class="control-label" for="inputEmail">Email</label>
												<div class="controls">
													<input type="text" id="" placeholder="name@domain.de" name="email">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="dob">Geb. Datum</label>
												<div class="controls">
													<div class="input-append date" id="dp1" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
													  <input class="span2" size="16" type="text" value="12.02.1990" name="dob">
													  <span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="dob">Migr. Hintergr.</label>
												<div class="controls">
													<label class="radio inline">
													  <input type="radio" id="inlineCheckbox1" name="migra" value="1" name="migra"> Ja
													</label>
													<label class="radio inline">
													  <input type="radio" id="inlineCheckbox1" name="migra" value="0" name="migra"> Nein
													</label>
												</div>
								            </div>
								            
								            

										</div>
									</div>
								</div>
							</div>
								

						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							Berufliche Angaben
							</a>
						</div>
							<div id="collapseTwo" class="accordion-body collapse out">
								<div class="accordion-inner">
							
									<div class="row">
										<div class="span6">
				
											<div class="control-group">
												<label class="control-label" for="profession">erl. Beruf</label>
												<div class="controls">
													<input type="text" id="" placeholder="z.B. Restaurantfachmann (IHK)" class="span4" name="profession">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="lastname">Schulabschluss</label>
												<div class="controls">
													<select class="span4" name="school">
													  <option>Keiner</option>
													  <option>Hauptschule</option>
													  <option>Realschule</option>
													  <option>erw. Realschule</option>
													  <option>Abitur</option>
													  <option>Fachhochschule</option>
													  <option>Universität</option>
													  <option>Berufsschulabschluss</option>
													  <option>Anderer (siehe Anmerkungen)</option>
													</select>
												</div>
								            </div>
							            
										</div>
									
										<div class="span5">
										
											<div class="control-group">
												<label class="control-label" for="inputEmail">Führerschein</label>
												<div class="controls">
													<input type="text" id="" placeholder="B, BE, C, CE, C1, C1E, M, S, L, T" name="driver">
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="inputEmail">Stundensatz</label>
												<div class="controls">
													<div class="input-prepend input-append">
													  <span class="add-on">ab &euro;</span>
													  <input class="span1" style="text-align:right;" id="appendedPrependedInput" type="text" name="rate">
													  <span class="add-on">,00</span>
													</div>

												</div>
								            </div>
								            						            
										</div>
										
										
										<div class="span11">
											<div class="control-group">
												<label class="control-label" for="inputEmail">Anmerkung</label>
												<div class="controls">
													<textarea rows="3" class="span9" name="notes_job"></textarea>
												</div>
								            </div>
										</div>
										
										<div class="span11">
											<div class="control-group">
												<label class="control-label" for="inputEmail">Lebenslauf</label>
												<div class="controls">
													<table class="table ">
													  <thead>
													  	<th>Von</th>
													  	<th>Bis</th>
													  	<th>Tätigkeit</th>
													  </thead>
													  <tbody>
													  	<tr>
													  		<td>
													  			<div class="input-append date" id="v1" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_1_from">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<div class="input-append date" id="b1" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_1_to">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<textarea rows="2" class="span4 input-block-level" name="hist_1_notes"></textarea>
													  		</td>
													  	</tr>
													  	<tr>
													  		<td>
													  			<div class="input-append date" id="v2" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_2_from">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<div class="input-append date" id="b2" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_2_to">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<textarea rows="2" class="span4 input-block-level" name="hist_2_notes"></textarea>
													  		</td>
													  	</tr>
													  	<tr>
													  		<td>
													  			<div class="input-append date" id="v3" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_3_from">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<div class="input-append date" id="b3" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_2_to">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<textarea rows="2" class="span4 input-block-level" name="hist_3_notes"></textarea>
													  		</td>
													  	</tr>
													  	<tr>
													  		<td>
													  			<div class="input-append date" id="v4" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_4_from">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<div class="input-append date" id="b4" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_4_to">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<textarea rows="2" class="span4 input-block-level" name="hist_4_notes"></textarea>
													  		</td>
													  	</tr>
													  	<tr>
													  		<td>
													  			<div class="input-append date" id="v4" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_5_from">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<div class="input-append date" id="b4" data-date="12.02.1990" data-date-format="dd.mm.yyyy">
																  <input class="span2" size="16" type="text" value="12.02.1990" name="hist_5_to">
																  <span class="add-on"><i class="icon-calendar"></i></span>
																</div>
													  		</td>
													  		<td>
													  			<textarea rows="2" class="span4 input-block-level" name="hist_5_notes"></textarea>
													  		</td>
													  	</tr>

													  </tbody>
													</table>
												</div>
								            </div>
										</div>
										
									</div>
								</div>
							</div>

						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							Identifikation und Zuordnung
							</a>
						</div>
							<div id="collapseThree" class="accordion-body collapse out">
								<div class="accordion-inner">
							
									<div class="row">
										<div class="span6">
				
											<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="control-group">
												<label class="control-label" for="inputEmail">Photo</label>
												<div class="controls">
													
													
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 286px; max-height: 320px; line-height: 20px;">
														<img src="http://placehold.it/286x320"/>
													</div>
												</div>
								            </div>
											
								            
								            <div class="control-group">
												<label class="control-label" for="zip"></label>
												<div class="controls controls-row">
													
													  
													  <div>
													    <span class="btn btn-file span3"><span class="fileupload-new"></span><input type="file" style="opacity:0;"/></span>
													    
													  </div>
													
												</div>
								            </div>
								            </div>
								            
										</div>
									
										<div class="span5">
										
											<div class="control-group">
												<label class="control-label" for="inputEmail"><strong>Status</strong><i class="icon-arrow-right"></i></label>
												<div class="controls">
													<select class="span4" name="status">
													  <option>-- Bitte auswählen --</option>
													  <option>Neu</option>
													  <option>Gewerbeschein vorhanden</option>
													  <option>Gesperrt</option>
													</select>
												</div>
								            </div>
										
											<div class="control-group">
												<label class="control-label" for="inputEmail">Werber</label>
												<div class="controls">
													<select class="span4" name="promoter_id">
													  <option value="0">Keiner</option>
													  @foreach($promoter as $p)
														  <option value="<?=$p->promoter_id?>"><?=sprintf('%04d', $p->promoter_id);?> - <?=$p->first_name?> <?=$p->last_name?></option>
													  @endforeach
													</select>
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="inputEmail">Kampagne/Kanal</label>
												<div class="controls">
													<select class="span4" name="campaign_id">
													  <option value="0">Keine</option>
													  @foreach($campaign as $c)
														  <option value="<?=$c->campaign_id?>"><?=sprintf('%04d', $c->campaign_id);?> - <?=$c->name?></option>
													  @endforeach
													</select>
												</div>
								            </div>
								            
								            
								            
								            <div class="control-group">
												<label class="control-label" for="dob">Gründer</label>
												<div class="controls">
													<label class="checkbox inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Datenweitergabe and Gründercoach zugestimmt
													</label>
												</div>
								            </div>
								            
								            <div class="control-group">
												<label class="control-label" for="inputEmail">Gründercoach</label>
												<div class="controls">
													<select class="span4">
													  <option>Nicht festgelegt</option>
													  <option>Coach 1</option>
													  <option>Coach 2</option>
													  <option>Coach 3</option>
													  <option>Coach 4</option>
													</select>
												</div>
								            </div>
								            
								            
								            
								            
								            <div class="control-group">
												<label class="control-label" for="profession">Benutzername</label>
												<div class="controls">
													<input type="text" id="" placeholder="" class="span4">
												</div>
								            </div>
								            
								            
								            <div class="control-group">
												<label class="control-label" for="profession">Passwort</label>
												<div class="controls">
													<input type="password" id="" placeholder="Bitte leer lassen" class="span4">
												</div>
								            </div>

										</div>
									</div>
								</div>
							</div>

						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							Notizen und Historie
							</a>
						</div>
							<div id="collapseFour" class="accordion-body collapse out">
								<div class="accordion-inner">
							
									<div class="row">
										<div class="span11">
											<div class="control-group">
												<label class="control-label" for="inputEmail">Notizen</label>
												<div class="controls">
													<textarea rows="8" class="span9" name="notes_general"></textarea>
												</div>
								            </div>
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


