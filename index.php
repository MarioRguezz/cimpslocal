<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CIMPS 2017</title>
      <!-- Bootstrap core CSS -->
      <link href="css/estilos.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <!-- Custom styles for this template -->
      <link href="css/justified-nav.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="css/estilos.css" rel="stylesheet">
      <link rel="stylesheet" href="css/jquery-ui.css" />
      <script src="js/jquery-1.10.2.min.js"></script>
      <script src="js/jquery.numeric.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/facebook.js"></script>
      <script src="js/numeral.js"></script>
      <script src="js/jquery-ui.js"></script>
	</head>
  <body>
   <div class="headline-inner">
    <div class="container">
      <div class="masthead">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-8">
                  </div>
        </div>
        <br/><br/><br/><br/>
    </div>
    <!-- Jumbotron -->
<div class="jumbotron" style="background-image: url('img/logofondo.png'); width:100%; height: 100%;background-size:100% 100%;">
<!--resgistro-->
			<!--verifica si estan blokeadas las ventanas emergentes-->
			<script type="text/javascript">
				var windowName = 'userConsole';
				var popUp = window.open('about:blank','_blank','width=1,height=1');
				if (popUp == null || typeof(popUp)=='undefined') {
					alert('Por favor deshabilita el bloqueador de ventanas emergentes y vuelve a refrescar la pagina (F5).');
				}
				else {
					popUp.close();
				}

			</script>
			<!--/verifica si estan blokeadas las ventanas emergentes-->
			<!--varaibles boleanas que bienen de login -->
					<div id="exit" style="text-align: right; display:none;">
						<img id="ImgPefil" style=" width:50px; height: 50px "  src="" />
						<a href="#" onclick="signOut();">Sign out</a>
					</div>
	  <div style="margin:20px;"></div>
	  <div>
	  	<div>
	  		<h2 style="text-align: center"><strong>Register</strong></h2>


	<h5>The fields below marked with (* ) are required</h5></br>
	  			  		<form id="registrationFormInfo"  method="post" action="php/insertlogin.php" role="form">
				<!--informacion personal-->
				<div style="border:2px solid #610303; border-radius: 25px; background-color : #FFFFFF;">
					<div style="margin-left: -25px; margin-top: -25px;">
						<!--logo-->
						<img style=" width:50px; height: 50px": src="img/logo_info_per.png" />
						<div style="margin: -35px 20px 0px 50px;">
							<label >
								<h3>Personal information</h3>
							</label>
						</div>
					</div>
					<div style="margin-left: 35px; margin-right: 15px;">
						<div>
							<!--Titulo -->
							<label for="title" style="margin-right: 100px">Title*</label>
							<!--Nombre-->
							<label for="inputName">Name (Given/Middle/Family)*</label>
						</div>
						<div>
							<!--Titulo -->
							<select name="tittle" class="round" style="margin-right: 20px">
<option value="Mr.">Mr.(name)</option>
<option value="Miss.">Miss.(name)</option>
<option value="Dr.">Dr.(name)</option>
<option value="Prof.">Prof.(name)</option>
<option value="Eng.">Eng.(name)</option>
<option value="Alum.">Alum.(name)</option>
<option value="Comp.">Comp.(name)</option>
</select>							<!--Nombre-->

							<input id="NombreFB" value="" name="name" type="text" class="round" placeholder="Name" style="width:600px" required>


						</div>
						<div>
							<!--Correo elctronico -->
							<label for="inputEmail" style="margin-right: 220px">Email address* &nbsp &nbsp &nbsp</label>
							<!--Genero-->
							<label for="inputName">Gender*</label>
						</div>
						<div>
							<!--Correo elctronico -->
							<input id="EmailFB" value="" type="email" name="email" class="round" id="inputEmail1" placeholder="Email" style="width: 300px; margin-right: 35px" required>
							<!--Genero-->
							<label>
								<input id="femaleFB" type="radio" name="gender" id="optionsRadios1" value="female" >
								Female							</label>
							<label>
								<input id="maleFB" type="radio" name="gender" id="optionsRadios2" value="male" >
								Male							</label>
						</div>
					</div>
				</div>
				<!--/informacion personal-->


				<!--Procedencia del usuario -->
				<div style="border:2px solid #610303; border-radius: 25px; margin-top: 40px; background-color : #FFFFFF;">
					<div style="margin-left: -25px; margin-top: -25px;">
						<!--logo-->
						<img style=" width:50px; height: 50px": src="img/logo_info_loc.png" />
					</div>
					<div style="margin: -35px 20px 0px 50px;">
						<label >
							<h3>Location</h3>
						</label>
					</div>
					<div style="margin-left: 40px; margin-right: 15px;">
						<div>
							<!--CIUDAD-->
							<label for="inputCity" style="margin-right: 330px">City* &nbsp &nbsp</label>
							<!--ESTADO-->
							<label for="inputCountry">Country*</label>
						</div>
						<div>
							<!--CIUDAD-->
							<input id="city" value="" name="city" type="text" class="round" placeholder="City" style="width: 350px; margin-right: 20px" required>
							<!--ESTADO-->
							<input value="" type="text" name="country" class="round" placeholder="Country" style="width: 350px" required>
						</div>
					</div>
				</div>
				<!--/Procedencia del usuario -->


				<!--informacion de la univercidad del usuario -->
				<div style="border:2px solid #610303; border-radius: 25px; margin-top: 40px; background-color : #FFFFFF;">
					<div style="margin-left: -25px; margin-top: -25px;">
						<!--logo-->
						<img style=" width:50px; height: 50px;" src="img/logo_info_job.png" />
					</div>
					<div style="margin: -35px 20px 0px 50px;">
						<label >
							<h3>Work information</h3>
						</label>
					</div>

					<div style="margin-left: 40px; margin-top: 0px; margin-right: 15px;">
						<div>
							<label for="inputAfilation1">Afiliation Name (University/Company)</label><br/>
							<div>
								<select name="reg_venue" class="round" id="venue" style="width: 700px" >
<option value="0">Other</option>
<option value="1">Instituto Nacional De Estadística Y Geografía</option>
<option value="2">Instituto Tecnológico De Aguascalientes</option>
<option value="3">Instituto Tecnológico De Orizaba</option>
<option value="4">Instituto Tecnológico De Zacatecas</option>
<option value="5">Universidad Autónoma De Yucatán</option>
<option value="6">Universidad Católica Del Norte</option>
<option value="7">Universidad De Atacama</option>
<option value="8">Universidad Politécnica De Aguascalientes</option>
<option value="9">Universidad Politécnica De Zacatecas</option>
<option value="10">Universidad Veracruzana</option>
<option value="11">Centro De Bachillerato Tecnológico Industrial Y De Servicios No.168</option>
<option value="12">Centro De Investigación En Matemáticas, A.C. Unidad Aguascalientes</option>
<option value="13">Centro De Investigación En Matemáticas, A.C. Unidad Guanajuato</option>
<option value="14">Centro De Investigación En Matemáticas, A.C. Unidad Zacatecas</option>
</select>
								<input style="width: 700px" value="" type="text" name="afiliation_name" class="round" id="inputAfiliation" placeholder="Afiliation Name"  required>

							</div>
						</div>
						<div>
							<label for="inputAfilation2">Afiliation Address (University/Company)</label>
							<div>
								<input style="width: 700px" value="" type="text" name="afiliation_address" class="round" id="inputAfiliation2" placeholder="Afiliation Address" required>
							</div>
						</div>

					</div>
				</div>


				<div style="border:2px solid #610303; border-radius: 25px; margin-top: 40px; background-color : #FFFFFF;">

					<div style="margin-left: -25px; margin-top: -25px;">
						<!--logo-->
						<img style=" width:50px; height: 50px;" src="img/logo_info_job.png" />
					</div>
					<div style="margin: -35px 20px 0px 50px;">
						<label >
							<h3>Work information</h3>
						</label>
					</div>


				<div style="margin-left: 40px; margin-right: 40px">
          <div class="form-group">
            <label for="title"></label>
            <div>
           <label for="autores">Author</label>
           <input  type="checkbox" value="1"  name = "autores">
        		</div>
          </div>
            <table id="services" class="table table-condensed"><tbody><tr>
            <td style="padding-right:3em"><b>Registration</b></td>
            <td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
            <td><b>Amount(Euros )</b></td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
              <input class="service" name="normalpaper" type="checkbox" value="1" checked >
          		Normal paper								</label>
                              </div>
            </td>
            <td style="padding-right:3em">$<span class="cost">5,500</span></td>
            <td><span class="cost">285</span>€</td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
                                    <input name="extrapaper" class="service" type="checkbox" value="1">
                                    Extra paper								</label>
                              </div>
            </td>
            <td style="padding-right:3em">$<span class="cost">3,500</span></td>
            <td><span class="cost">180</span>€</td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
                                    <input name="extrapage" class="service" type="checkbox" value="3">
                                    Extra Page								</label>
                <span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input style="width:30px;" id="s_3" name="extrapageautor"> </span>							</div>
            </td>
            <td style="padding-right:3em">$<span class="cost">500</span></td>
            <td><span class="cost">25</span>€</td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
                                    <input name="conferencediner" class="service" type="checkbox" value="4">
                                    Conference Dinner								</label>
                              </div>
            </td>
            <td style="padding-right:3em">$<span class="cost">670</span></td>
            <td><span class="cost">35</span>€</td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
                                    <input name="socialprogram" class="service" type="checkbox" value="5">
                                    Social Program								</label>
                              </div>
            </td>
            <td style="padding-right:3em">$<span class="cost">400</span></td>
            <td><span class="cost">20</span>€</td>
           </tr><tr>
           </tr><tr>
            <td style="padding-right:3em">
              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                <label>
                                    <input name="additionaldoc" class="service" type="checkbox" value="1">
                                    Additional documentation copy paper								</label>
                <span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
                  <input style="width:30px;" id="s_6" name="autoradditional"  type="text">						</div>
            </td>
            <td style="padding-right:3em">$<span class="cost">800</span></td>
            <td><span class="cost">40</span>€</td>
           </tr><tr>
          </tr><tr>
            <td style="padding-right:3em"><b>Total</b></td>
            <td style="padding-right:3em">$<b id="total">5500</b></td>
            <td><b id="total_euros">285</b>€</td>
           </tr><tr>
          </tr></tbody></table>


          												<div class="form-group">
          													<div>
          														<table  class="table" width="100%">
          															<tbody><tr>
          																<td width="20%"><b>Paper ID*</b></td>
          																<td width="80%"><b>Title* (at least one)</b></td>
          															</tr>
          															<tr>
          																<td><input value="" type="text" name="paper_id1" class="form-control" id="paper_id1"></td>
          																<td><input value="" type="text" name="paper_title1" class="form-control" id="paper_title1"></td>
          															</tr>
          															<tr>
          																<td><input value="" type="text" name="paper_id2" class="form-control" id="paper_id2"></td>
          																<td><input value="" type="text" name="paper_title2" class="form-control" id="paper_title2"></td>
          															</tr>
          														</tbody></table>
          													</div>
                                  </div>







<!-- publico general-->
					<div class="form-group">
						<label for="title"></label>
<div>
<label for="autores">General public</label>
<input  type="checkbox" value="1"  name = "generalpublic">
</div>
					</div>
						<table id="services" class="table table-condensed"><tbody><tr>
						<td style="padding-right:3em"><b>Registration</b></td>
						<td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
						<td><b>Amount(Euros )</b></td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="conferencepublic" class="service" type="checkbox" value="4">
																		Conference Dinner								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">670</span></td>
						<td><span class="cost">35</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="socialpublic" class="service" type="checkbox" value="5">
																		Social Program								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">400</span></td>
						<td><span class="cost">20</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="additionalpublic" class="service" type="checkbox" value="6">
																		Additional documentation copy paper								</label>
								<span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input style="width:30px;" id="s_6" name="additionalpublictext" class="spinner ui-spinner-input" type="text" value="1" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton"><a class="ui-spinner-button ui-spinner-up ui-corner-tr ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-n">▲</span></span></a><a class="ui-spinner-button ui-spinner-down ui-corner-br ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-s">▼</span></span></a></span>							</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">800</span></td>
						<td><span class="cost">40</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		    <input class="service" type="checkbox" name="generalpublicheck" value="7" checked="" disabled="">
																									General Public								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">700</span></td>
						<td><span class="cost">40</span>€</td>
				   </tr><tr>
</tr><tr>
						<td style="padding-right:3em"><b>Total</b></td>
						<td style="padding-right:3em">$<b id="total">700</b></td>
						<td><b id="total_euros">40</b>€</td>
				   </tr><tr>

</tr></tbody></table>





<!-- student-->

					<div class="form-group">
						<label for="title"></label>
            <div>
            <label for="students">Students</label>
            <input  type="checkbox" value="1"  name = "students">
            </div>
					</div>

						<table id="services" class="table table-condensed"><tbody><tr>
						<td style="padding-right:3em"><b>Registration</b></td>
						<td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
						<td><b>Amount(Euros )</b></td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="studentconference" class="service" type="checkbox" value="4">
																		Conference Dinner								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">670</span></td>
						<td><span class="cost">35</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="socialstudent" class="service" type="checkbox" value="5">
																		Social Program								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">400</span></td>
						<td><span class="cost">20</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="additionalstudent" class="service" type="checkbox" value="6">
																		Additional documentation copy paper								</label>
								<span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input style="width:30px;" id="s_6" name="additionalstudenttext" class="spinner ui-spinner-input" type="text" value="1" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton"><a class="ui-spinner-button ui-spinner-up ui-corner-tr ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-n">▲</span></span></a><a class="ui-spinner-button ui-spinner-down ui-corner-br ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-s">▼</span></span></a></span>							</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">800</span></td>
						<td><span class="cost">40</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		    <input class="service" name="studentcheck" type="checkbox" value="8" checked="" disabled="">
																							Students								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">350</span></td>
						<td><span class="cost">20</span>€</td>
				   </tr><tr>
</tr><tr>
						<td style="padding-right:3em"><b>Total</b></td>
						<td style="padding-right:3em">$<b id="total">350</b></td>
						<td><b id="total_euros">20</b>€</td>
				   </tr><tr>

</tr></tbody></table>


<!-- companies-->

					<div class="form-group">
						<label for="title"></label>

            <div>
            <label for="companieentreprise">Companies/Enterprise not sponsors</label>
            <input  type="checkbox" value="1"  name = "companieentreprise">
            </div>

					</div>


						<table id="services" class="table table-condensed"><tbody><tr>
						<td style="padding-right:3em"><b>Registration</b></td>
						<td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
						<td><b>Amount(Euros )</b></td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="companysocial" class="service" type="checkbox" value="5">
																		Social Program								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">400</span></td>
						<td><span class="cost">20</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		<input name="additionalcompany" class="service" type="checkbox" value="6">
																		Additional documentation copy paper								</label>
								<span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input style="width:30px;" id="s_6" name="additionalcompanytext" class="spinner ui-spinner-input" type="text" value="1" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton"><a class="ui-spinner-button ui-spinner-up ui-corner-tr ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-n">▲</span></span></a><a class="ui-spinner-button ui-spinner-down ui-corner-br ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-s">▼</span></span></a></span>							</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">800</span></td>
						<td><span class="cost">40</span>€</td>
				   </tr><tr>
				   </tr><tr>
						<td style="padding-right:3em">
							<div class="checkbox" style="margin-top:0px; margin-bottom:0px">
								<label>
																		    <input class="service"  name="companycheck" type="checkbox" value="9" checked="" disabled="">
																									Companies/Enterprise not sponsors								</label>
															</div>
						</td>
						<td style="padding-right:3em">$<span class="cost">1,500</span></td>
						<td><span class="cost">80</span>€</td>
				   </tr><tr>
</tr><tr>
						<td style="padding-right:3em"><b>Total</b></td>
						<td style="padding-right:3em">$<b id="total">1500</b></td>
						<td><b id="total_euros">80</b>€</td>
				   </tr><tr>

</tr></tbody></table>
												</div>




                          <!-- los demás-->
                          <div class="form-group">
                            <label for="title"></label>
                            <div>
                              <div>
                              <label for="invitado">Invitado</label>
                              <input  type="checkbox" value="1"  name = "invitado">
                              </div>

                              <div>
                              <label for="becado">Becado</label>
                              <input  type="checkbox" value="1"  name = "becado">
                              </div>


                              <div>
                              <label for="invitadoespecial">Invitado Especial</label>
                              <input  type="checkbox" value="1"  name = "invitadoespecial">
                              </div>


                              <div>
                              <label for="prensa">Prensa</label>
                              <input  type="checkbox" value="1"  name = "prensa">
                              </div>

                              <div>
                              <label for="patrocinador">Empresa Patrocinador</label>
                              <input  type="checkbox" value="1"  name = "patrocinador">
                              </div>

                      </div>
                          <div class="form-group" id="contenedor_codigo" style="display: block;">
                            <label for="inputAccessCode">Access Code</label>
                            <div>
                              <input value="" name="access_code" id="access_code" type="password" maxlength="25" class="round" placeholder="AccessCode">
                            </div>
                          </div>
                          <div>


                            <table id="services" class="table table-condensed"><tbody><tr>
                            <td style="padding-right:3em"><b>Registration</b></td>
                            <td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
                            <td><b>Amount(Euros )</b></td>
                           </tr><tr>
                </tr><tr>
                            <td style="padding-right:3em"><b>Total</b></td>
                            <td style="padding-right:3em">$<b id="total">0</b></td>
                            <td><b id="total_euros">0</b>€</td>
                           </tr><tr>

                </tr></tbody></table>


                <!--poster-->
                <div class="form-group">
                  <label for="title"></label>
                    <div>
                    <label for="poster">Poster</label>
                    <input  type="checkbox" value="1"  name = "poster">
                    </div>
                </div>


                            <table id="services" class="table table-condensed"><tbody><tr>
                            <td style="padding-right:3em"><b>Registration</b></td>
                            <td style="padding-right:3em"><b>Amount(Mexican Pesos $)</b></td>
                            <td><b>Amount(Euros )</b></td>
                           </tr><tr>
                           </tr><tr>
                            <td style="padding-right:3em">
                              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                                <label>
                                                    <input name="conferenceposter" class="service" type="checkbox" value="4">
                                                    Conference Dinner								</label>
                                              </div>
                            </td>
                            <td style="padding-right:3em">$<span class="cost">670</span></td>
                            <td><span class="cost">35</span>€</td>
                           </tr><tr>
                           </tr><tr>
                            <td style="padding-right:3em">
                              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                                <label>
                                                    <input name="socialposter" class="service" type="checkbox" value="5">
                                                    Social Program								</label>
                                              </div>
                            </td>
                            <td style="padding-right:3em">$<span class="cost">400</span></td>
                            <td><span class="cost">20</span>€</td>
                           </tr><tr>
                           </tr><tr>
                            <td style="padding-right:3em">
                              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                                <label>
                                                    <input name="additionalposter" class="service" type="checkbox" value="6">
                                                    Additional documentation copy paper								</label>
                                <span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input style="width:30px;" id="s_6" name="additionalpostertext" class="spinner ui-spinner-input" type="text" value="1" aria-valuemin="1" aria-valuenow="1" autocomplete="off" role="spinbutton"><a class="ui-spinner-button ui-spinner-up ui-corner-tr ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-n">▲</span></span></a><a class="ui-spinner-button ui-spinner-down ui-corner-br ui-button ui-widget ui-state-default ui-button-text-only" tabindex="-1" role="button"><span class="ui-button-text"><span class="ui-icon ui-icon-triangle-1-s">▼</span></span></a></span>							</div>
                            </td>
                            <td style="padding-right:3em">$<span class="cost">800</span></td>
                            <td><span class="cost">40</span>€</td>
                           </tr><tr>
                           </tr><tr>
                            <td style="padding-right:3em">
                              <div class="checkbox" style="margin-top:0px; margin-bottom:0px">
                                <label>
                                                        <input class="service" name="postercheck" type="checkbox" value="10" checked="" disabled="">
                                																	Poster								</label>
                                              </div>
                            </td>
                            <td style="padding-right:3em">$<span class="cost">700</span></td>
                            <td><span class="cost">50</span>€</td>
                           </tr><tr>
                </tr><tr>
                            <td style="padding-right:3em"><b>Total</b></td>
                            <td style="padding-right:3em">$<b id="total">700</b></td>
                            <td><b id="total_euros">50</b>€</td>
                           </tr><tr>

                </tr></tbody></table>
                                          <div class="form-group">
                                            <div class="checkbox">
                                              <label class="checkbox">
                                                <input name="accept" value="1" type="checkbox"> If you agree, your information will be used by our sponsors to send advices about upcomming SE and IT events and other information. Our sponsors are:
                                              </label>
                                            </div>
                                          </div>
                                          <ul>
                                            <li>CIMAT</li>
                                            <li>IngSoft</li>
                                            <li>COZCyT Zacatecas</li>
                                            <li>SEZAC </li>
                                            <li>Secretaría de Economía</li>
                                            <li>Among Others</li>
                                          </ul>
                                          </div>
                                          <br>
												<div id="Rcp" class="col-md-4" style="">
													<button class="btn btn-primary btn-md btn-block" style=" margin-left:-15px; " type="submit">Register</button>

												</div>
											</form>


	<!-- div class="col-md-4">
					<h3>Payment Method</h3>
<pre>Bank deposit or electronic transfer.
Payment must be through a bank deposit as follows:

Receiver Bank information:
Account Name: CENTRO DE INVESTIGACION EN MATEMATICAS, A.C.
Bank Name: HSBC
Bank Account: 215003142-6
CLABE: 021210021500314264
ABA: 026003052
SWIFT: BIMEMXMM
Sucursal: 866
Plaza: 21

Scanned payment receipt must be sent here  by clicking the Add Payment button indicating full name of the participant. If an invoice is required, fiscal data must be sent for processing.

Billing
Original billings will be sent to the registered e-mail address.</pre>
</div -->
<br>
</div>


<script>
  function onSubmit(token) {
    div = document.getElementById('Rcp');
    div.style.display = '';

  }

  function validate(event) {
    event.preventDefault();
    if (!document.getElementById('field').value) {
      alert("You must add text to the required field");
    } else {
      grecaptcha.execute();
    }
  }

  function onload() {
    var element = document.getElementById('submit');
    element.onclick = validate;
  }
</script>



<script>
	$(document).ready(function() {

		var total = 0;
		var totalEuros = 0;
		var s = new Array();

		$.fn.digits = function(){
			return this.each(function(){
				$(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
			})
		}

		$('#venue').on('change', function() {
			idVenue = $(this).val();

			if (idVenue == 0) {
				$('#inputAfiliation').val('');
				$('#inputAfiliation').attr('readonly',false);
				$('#inputAfiliation').focus();
				$('#inputAfiliation2').val('');
			} else if(idVenue == 1) {
				$('#inputAfiliation').val('Instituto Nacional De Estadística Y Geografía');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('Av. Héroe De Nacozari Sur 2301 Fracc. Jardines Del Parque C.P. 20276');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 2) {
				$('#inputAfiliation').val('Instituto Tecnológico De Aguascalientes');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('Av. Adolfo López Mateos #1801 Ote. Fracc. Bona Gens C.P. 20256 Aguascalientes Aguascalientes México.');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 3) {
				$('#inputAfiliation').val('Instituto Tecnológico De Orizaba');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 4) {
				$('#inputAfiliation').val('Instituto Tecnológico De Zacatecas');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('Carretera Panamericana S/N Crucero A Guadalajara Zacatecas Zac.');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 5) {
				$('#inputAfiliation').val('Universidad Autónoma De Yucatán');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 6) {
				$('#inputAfiliation').val('Universidad Católica Del Norte');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 7) {
				$('#inputAfiliation').val('Universidad De Atacama');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 8) {
				$('#inputAfiliation').val('Universidad Politécnica De Aguascalientes');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 9) {
				$('#inputAfiliation').val('Universidad Politécnica De Zacatecas');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 10) {
				$('#inputAfiliation').val('Universidad Veracruzana');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 11) {
				$('#inputAfiliation').val('Centro De Bachillerato Tecnológico Industrial Y De Servicios No. 168');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('Rio Rhin S/N Frac. Colinas Del Rio Aguascalientes, Ags.');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 12) {
				$('#inputAfiliation').val('Centro De Investigación En Matemáticas, A. C. Unidad Aguascalientes');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 13) {
				$('#inputAfiliation').val('Centro De Investigación En Matemáticas, A. C. Unidad Guanajuato');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('');
				$('#inputAfiliation2').focus();
			}else if(idVenue == 14) {
				$('#inputAfiliation').val('Centro De Investigación En Matemáticas, A. C. Unidad Zacatecas');
				$('#inputAfiliation').attr('readonly',true);
				$('#inputAfiliation2').val('Av. Universidad # 222 Fraccionamiento La Loma C.P. 98068 Zacatecas Zac.');
				$('#inputAfiliation2').focus();
			}
			idGroup = $("#group").val();

			if(idGroup != 4 || (idGroup == 4 &&  idVenue != 1)){
				$("#contenedor_matricula").hide();
			}else{
				$("#contenedor_matricula").show();
			}

			   //Si pagan
			   if(idGroup!=6 && idGroup!=7 && idGroup!=8 && idGroup!=9 && idGroup!=10){
			   	$("#contenedor_codigo").hide();
			   } else {
			   	$("#contenedor_codigo").show();
			   }
			});

		$(".cost").digits();

		var services = new Array();
				services[1] = {cost:5500,euro:285,onlyone:1};
			services[2] = {cost:3500,euro:180,onlyone:1};
			services[3] = {cost:500,euro:25,onlyone:0};
			services[4] = {cost:670,euro:35,onlyone:1};
			services[5] = {cost:400,euro:20,onlyone:1};
			services[6] = {cost:800,euro:40,onlyone:0};
			services[7] = {cost:700,euro:40,onlyone:1};
			services[8] = {cost:350,euro:20,onlyone:1};
			services[9] = {cost:1500,euro:80,onlyone:1};
			services[10] = {cost:700,euro:50,onlyone:1};

	idGroup = $("#group").val();
	idVenue = $("#venue").val();

	if(idGroup != 2){
		$("#paper").hide();
	}

	if(idGroup != 4 || (idGroup == 4 &&  idVenue != 1)){
		$("#contenedor_matricula").hide();
	}

	if(idGroup != 4){
		$("#contenedor_tallas").hide();
	}

	if(idGroup!=6 && idGroup!=7 && idGroup!=8 && idGroup!=9 && idGroup!=10){
		$("#contenedor_codigo").hide();
	}

			if(idGroup == 3){  //General Public
				total += 700;
				totalEuros += 40;
				//$("#total").text(numeral(total).format('0,0'));
				//$("#total_euros").text(numeral(totalEuros).format('0,0'));
				$("#total").text(total);
				$("#total_euros").text(totalEuros);
			}else if(idGroup == 4){  //Students
				total += 300;
				totalEuros += 20;
				//$("#total").text(numeral(total).format('0,0'));
				//$("#total_euros").text(numeral(totalEuros).format('0,0'));
				$("#total").text(total);
				$("#total_euros").text(totalEuros);
			}else if(idGroup == "2"){  //Author
				total += 5500;
				totalEuros += 285;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
			}else if(idGroup == "5"){  //Companies/Enterprise not sponsors
				total += 1500;
				totalEuros += 80;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
					}else if(idGroup == "11"){  //Poster
						total += 700;
						totalEuros += 50;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
              				    }


              				    var spinner = $( ".spinner" ).spinner({
              				    	change: function( event, ui ) {
              				    		id = $(this).attr("name");
              				    		act = $(this).val();
              				    		c = s[id];
              				    		servicio = services[id];
              				    		if(c > 0){
              				    			cs = act - c;
              				    			total -= servicio.cost * c
              				    			totalEuros -= servicio.euro * c;

              				    			total += servicio.cost * act
              				    			totalEuros += servicio.euro * act;

              				    			s[id] = act;

              				    		}
				//$("#total").text(numeral(total).format('0,0'));
              			//$("#total_euros").text(numeral(totalEuros).format('0,0'));
              			$("#total").text(total);
              			$("#total_euros").text(totalEuros);
              		},  min: 1


              	});

              				    $(".spinner").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });


              				    $("#group").change(function() {
              				    	$('#services').html("Loading...");
              				    	$.get('http://cimps.cimat.mx/registro/index.php/user/services_ajax' + "/" + $(this).val(), function(data) {
              				    		$('#services').html(data);
              				    		$(".cost").digits();
              				    		total = 0;
              				    		totalEuros = 0;
              				    		idVenue = $('#venue').val();
              				    		idGroup = $("#group").val();

              				    		if(idGroup != 2){
              				    			$("#paper").hide();
              				    		}else{
              				    			$("#paper").show();
              				    		}

              				    		if(idGroup != 4 || (idGroup == 4 &&  idVenue !=1)){
              				    			$("#contenedor_matricula").hide();
              				    		}else{
              				    			$("#contenedor_matricula").show();
              				    			$("#control_num").focus();
              				    		}

              				    		if(idGroup != 4){
              				    			$("#contenedor_tallas").hide();
              				    		}else{
              				    			$("#contenedor_tallas").show();
              				    		}

              				    		if(idGroup!=6 && idGroup!=7 && idGroup!=8 && idGroup!=9 && idGroup!=10){
              				    			$("#contenedor_codigo").hide();
              				    		} else {
              				    			$("#contenedor_codigo").show();
              				    			$('#access_code').focus();
              				    		}

				    if(idGroup == "3"){  //General Public
				    	total += 700;
				    	totalEuros += 40;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
					}else if(idGroup == "4"){  //Students
						total += 350;
						totalEuros += 20;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
					}else if(idGroup == "2"){  //Author
						total += 5500;
						totalEuros += 285;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
					}else if(idGroup == "5"){  //Companies/Enterprise not sponsors
						total += 1500;
						totalEuros += 80;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
					}else if(idGroup == "11"){  //Poster
						total += 700;
						totalEuros += 50;
						//$("#total").text(numeral(total).format('0,0'));
              				        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
              				        $("#total").text(total);
              				        $("#total_euros").text(totalEuros);
              				    }
              				    $(".spinner").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
              				    var spinner = $( ".spinner" ).spinner({
              				    	change: function( event, ui ) {
              				    		id = $(this).attr("name");

              				    		act = $(this).val();
              				    		c = s[id];
              				    		servicio = services[id];
              				    		if(c > 0){
              				    			cs = act - c;
              				    			total -= servicio.cost * c
              				    			totalEuros -= servicio.euro * c;

              				    			total += servicio.cost * act
              				    			totalEuros += servicio.euro * act;

              				    			s[id] = act;

              				    		}
              				    		$("#total").text(total);
              				    		$("#total_euros").text(totalEuros);
					//$("#total").text(numeral(total).format('0,0'));
            			        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
            			    },  min: 1


            			});
              				    changeCheckbox();
              				    changeInput();
              				});
	});


	  changeCheckbox();
	  changeInput();

	  function changeCheckbox(){
	  	$('.service').change(function(){

	  		servicio = services[$(this).val()]

	  		if(this.checked){
	  			if(servicio.onlyone){
	  				total += servicio.cost;
	  				totalEuros += servicio.euro;

	  			}else{
	  				num = $("#s_" + $(this).val()).val();

	  				s[$(this).val()] = num;
	  				total += servicio.cost * num;
	  				totalEuros += servicio.euro * num;
	  			}

	  		}else{
	  			if(servicio.onlyone){
	  				total -= servicio.cost;
	  				totalEuros -= servicio.euro;
	  			}else{
	  				ns = s[$(this).val()];
	  				total -= servicio.cost * ns;
	  				totalEuros -= servicio.euro * ns;
	  				s[$(this).val()] = -1;
	  			}
	  		}

				//($("#total").text(numeral(total).format('0,0'));
           		        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
           		        $("#total").text(total);
           		        $("#total_euros").text(totalEuros);
           		    });
	  }



	  function changeInput(){

	  	$( ".spinner" ).on('input', function() {
	  		id = $(this).attr("name");
	  		act = $(this).val();
	  		c = s[id];
	  		servicio = services[id];
	  		if(c > 0){
	  			cs = act - c;
	  			total -= servicio.cost * c
	  			totalEuros -= servicio.euro * c;

	  			total += servicio.cost * act
	  			totalEuros += servicio.euro * act;

	  			s[id] = act;

	  		}
             		        //$("#total_euros").text(numeral(totalEuros).format('0,0'));
				//$("#total").text(numeral(total).format('0,0'));
				$("#total_euros").text(totalEuros);
				$("#total").text(total);
			});
	  }



	});

</script>

		 </div>
		 <!-- Site footer -->
		 <!-- div class="footer" -->
		  <p style="color:#ffffff;;font-family:Verdana,Tahoma,Arial;">CIMPS 2017 - October 18-20, Copyright © 2017 CIMAT - Zacatecas, México
		 	<br/>Av. Universidad No. 222. Zacatecas. México. conferencecimps@cimat.mx</p>
		 <!-- /div -->
		</div> <!-- /container -->
	</div>
</body>
</html>
