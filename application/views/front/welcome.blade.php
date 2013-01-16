@layout('front.front')

	@section('form')
	
		{{ Form::open('/');  }}
    			<div class="grid_6 alpha">
    				<fieldset>
    					<label for="first_name">Vorname:</label>
    					<input type="text" name="first_name" id="first_name" placeholder="Dein Vorname" value="" />
    					<label for="last_name">Nachname:</label>
    					<input type="text" name="last_name" id="last_name" placeholder="Dein Nachname" value="" />
    					<label for="email">eMail Adresse</label>
    					<input type="text" name="email" id="email" placeholder="Deine Email Adresse" value="" />
    					<div style="float:left;">
    						<label for="situation">Situation zur Zeit</label>
    						<select name="situation">
    							<option>Arbeitslos ALG-I</option>
    							<option>Arbeitslos ALG-II</option>
    							<option>Freiberuflich</option>
    							<option>Selbständig</option>
    							<option>Student/Ausbildung</option>
    							<option>Sonstiges</option>
    						</select>
    					</div>
    					<div style="float:right;">
    						<label for="salutation">Anrede</label>
    						<select name="salutation">
    							<option>Herr</option>
    							<option>Frau</option>
    						</select>
    					</div>
    				</fieldset>
    			</div><!-- END .grid_7 -->                                        
    			<div class="grid_6 omega">
    				<label for="phone">Telefon-Nr.:</label>
    				<input type="text" name="phone" id="phone" placeholder="Telefon oder Handy" value="" />
    				<label for="address1">Strasse & Hausnr.</label>
    				<input type="text" name="address1" id="address1" placeholder="Strasse und Hausnummer" value="" />
    				<label>PLZ und Ort:</label>
    				<div style="height:56px;">
    					<input type="text" name="zipcode" id="zipcode" placeholder="PLZ" style="width:100px; float:left; margin-right:10px" value="" />
    					<input type="text" name="city" id="city" placeholder="Ort" style="width:350px; float:left;" value="" />
    				</div>
                    <div style="height:102px;">
                        &nbsp;
                    </div>
    				
    				<input type="submit" value="Jetzt Anmelden" class="button">
    			</div><!-- END .grid_7 -->
    		{{  Form::close() }}<!-- END #contact -->
	
	@endsection