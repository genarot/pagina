<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Zonas Rojas</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="style/index_style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src='script/script.js'></script>
	<script src="ajax.js"></script>
</head>
<body>
	
	<section id="headermenu" style="height: 657px;">
		<nav id="menu_fijo" style="position: fixed;">
			<nav id="navegador_header" class="navegador_inicio">
				<div id="top_bar">
			<ul class="menu">
				<a href="">
					<li>Inicio</li>
				</a>
				<a href="#seccion">
					<li>Como interponer una denuncia</li>
				</a>
				<a href="#denuncia">
					<li>Denuncia</li>
				</a>
				<a href="#seccion2">
					<li>Datos estadisticos</li>
				</a>
				<a href="#acerca_de_nosotros">
					<li>Acerca de nosotros</li>
				</a>
			</ul>
		</nav>
	</nav>
</div>

	<section id='contenedor_general'>
	</section>

	<section id='body'>
		<section id='scrolldown'>
			<p id='titulo'></p>
			<p id='menorque'><</p>
		</section>
	
		
		<section id="seccion">

		
		<p id="titulo_acerca_de_nosotros" class="titulo_seccion"><br></br>Como interponer una denuncia</p>
		
		<div class="macbook top-gap">
			<div class="pantalla">
			

			<iframe width="788" height="485" scrolling="no" allowtransparency="true"  frameborder="0" allowfullscreen></iframe>
				
			


			</div>

		</div>
		</section>


		<section id="denuncia">
			<div class="box">
				<p id="titulo_denuncia" class="titulo_seccion">
					<br></br>La informacion que usted va a brindar, sera de uso
					
					estadistico y permanecera en anonimato.
				</p>
				<div id="contenedor_formulario">
					<form name="f" id="" action="guardar.php" method="post">
						<label for="cbosexo">Genero</label>
						<select id="cbosexo"name="cbosexo" >
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>

						<p id="espacio"></p>
						<label id="tab">Intervalo de edad</label>
							<div id="contenedor_edades">
										<label for="11-20">11-20</label>
													<input type="radio" name="edades" value="11-20">
													<br>
													<label for="21-30">21-30</label>
													<input type="radio" name="edades" value="21-30"><br>
													<label for="31-40">31-40</label>
													<input type="radio" name="edades" value="31-40"><br>
													<label for="41-50">41-50</label>
													<input type="radio" name="edades" value="41-50"><br>
													<label for="51-60">51-60</label>
													<input type="radio" name="edades" value="51-60"><br>
													<label for="61-Mas">61-Mas</label>
													<input type="radio" name="edades" value="61-Mas"><br>
												</div>

												<p id="espacio">Fecha y hora del delito:</p>
												<input class="input_form" type="date" name="fecha">
												<input class="input_form" type="time" name="hora">

												
												<p id="espacio"></p>
												<label>Distrito y barrio</label>
												<p id="espacio"></p>


												<?php
												


												

												//en esta parte solo sustraemos los distritos
												$a = mysql_query("SELECT * FROM distritos");
												?>
												    <select name="distritos" id="" onchange="from(document.f.distritos.value,'barrios','prueba.php')">
												<?php
													while($row = mysql_fetch_array($a))
												    {
												        $distri= $row['namedistrito'];
												        $idd= $row['idd'];
												        echo '<option value='.$idd.'>'.$distri.'</option>';
												                  
												    }
												    echo '
												    </select>
												    <br></br>
												    	<div id="barrios">
												     	</div>
													';
												?>







												<p id="espacio"></p>

												<label for="cbrobos">Tipos de robos</label>
												<select id="cborobos"name="cbrobos" >
													<option value="Robo_con_fuerza">Robo con fuerza</option>
													<option value="Robo_con_violencia_o_intimidacion">Robo con violencia o intimidacion</option>
										
												</select>

												<p id="espacio">Descripcion del robo</p>
												<textarea id="descripcion_robo"  name="descripcion"></textarea>

												<!---Aca debe de ir un combobox anidado-->

												<p id="espacio"></p>
												<label for="cbpolicia">Denuncio ante la policia?</label>
												<select id="cbpolicia"name="policia" >
													<option value="Si">Si</option>
													<option value="No">No</option>
										
												</select>

												<p id="espacio"></p>
												<label for="cbresuelto">La policia resolvio su denuncia?</label>
												<select id="cbpolicia"name="resuelto" >
													<option value="Si">Si</option>
													<option value="No">No</option>
										
												</select>

												<input id="boton_enviar" type="submit" value="enviar"></input>


					</form>



				</div>
			</div>




			</section>




		<section id='seccion2'>
			<div id="jsn-promo" class="row-fluid">
				<div id="jsn-promo-inner">
					<div id="jsn-pos-promo" class="span12 order1 ">
		     			<div class=" jsn-modulecontainer">

		     				<!-- Titulo de los datos estadisticos -->
		     				<p id="titulo_datos_estadisticos" class="titulo_seccion"><br></br>Datos Estadisticos</p>
							
		     				<div class="jsn-modulecontainer_inner">
		     					<h3 class="jsn-moduletitle"></h3>
		     						<div class="jsn-modulecontent">
		     							<div id="ja-google-chart-wrapper-138" class="ja-google-chart" style="width:100%;height:636px;">
									    	 <div style="position: relative;">
										    	 <div dir="ltr" style="position: relative; width: 960px; height: 600px;">
		     										<div aria-label="Un gráfico" style="position: absolute; left: 34%; top: 0px; width: 100%; height: 100%;">
		     											<svg aria-label="Un gráfico" style="overflow: hidden;" height="600" width="960">
		     												<defs id="defs">
		     													<clipPath id="_ABSTRACT_RENDERER_ID_21">
		     														<rect height="500" width="750" y="50" x="50"></rect>
		     													</clipPath>
		     												</defs>
		     													<rect fill="#ffffff" stroke-width="0" stroke="none" height="600" width="960" y="0" x="0"></rect>
																	<g>
																		<rect fill="#ffffff" fill-opacity="0" stroke-width="0" stroke="none" height="39" width="142" y="50" x="809"></rect>
																	<g>
																		<rect fill="#ffffff" fill-opacity="0" stroke-width="0" stroke="none" height="9" width="142" y="50" x="809"></rect>
																	<g>
																		<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="57.65" x="830" text-anchor="start">Robo con fuerza</text>
																		<rect fill="#3366cc" stroke-width="0" stroke="none" height="9" width="18" y="50" x="809"></rect></g>
																	<g>
																		<rect fill="#ffffff" fill-opacity="0" stroke-width="0" stroke="none" height="9" width="142" y="65" x="809"></rect>
																	<g>
																		<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="72.65" x="830" text-anchor="start">Robo con violencia</text>
																	</g>
																		<rect fill="#dc3912" stroke-width="0" stroke="none" height="9" width="18" y="65" x="809"></rect></g>
																	<g>
																		<rect fill="#ffffff" fill-opacity="0" stroke-width="0" stroke="none" height="9" width="142" y="80" x="809"></rect>
																	<g>
																		<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="87.65" x="830" text-anchor="start">Robo con intimidacion</text>
																	</g>
																		<rect fill="#ff9900" stroke-width="0" stroke="none" height="9" width="18" y="80" x="809"></rect>
																	</g>
																</g>
																<g>
																	<rect fill="#ffffff" fill-opacity="0" stroke-width="0" stroke="none" height="500" width="750" y="50" x="50"></rect>
																	<g>
																		<rect fill="#cccccc" stroke-width="0" stroke="none" height="1" width="750" y="549" x="50"></rect>
																		<rect fill="#cccccc" stroke-width="0" stroke="none" height="1" width="750" y="424" x="50"></rect>
																		<rect fill="#cccccc" stroke-width="0" stroke="none" height="1" width="750" y="300" x="50"></rect>
																		<rect fill="#cccccc" stroke-width="0" stroke="none" height="1" width="750" y="175" x="50"></rect>
																		<rect fill="#cccccc" stroke-width="0" stroke="none" height="1" width="750" y="50" x="50"></rect>
																	</g>
																		<g>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="264" width="10" y="285" x="61"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="287" width="10" y="262" x="114"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="302" width="10" y="247" x="168"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="305" width="10" y="244" x="221"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="302" width="10" y="247" x="275"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="296" width="10" y="253" x="328"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="342" width="10" y="207" x="382"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="402" width="10" y="147" x="435"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="450" width="10" y="99" x="489"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="391" width="10" y="158" x="542"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="334" width="10" y="215" x="596"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="272" width="10" y="277" x="649"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="198" width="10" y="351" x="703"></rect>
																			<rect fill="#3366cc" stroke-width="0" stroke="none" height="174" width="10" y="375" x="756"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="95" width="10" y="454" x="72"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="113" width="10" y="436" x="125"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="113" width="10" y="436" x="179"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="115" width="10" y="434" x="232"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="109" width="10" y="440" x="286"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="106" width="10" y="443" x="339"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="120" width="10" y="429" x="393"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="121" width="10" y="428" x="446"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="134" width="10" y="415" x="500"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="139" width="10" y="410" x="553"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="121" width="10" y="428" x="607"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="104" width="10" y="445" x="660"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="88" width="10" y="461" x="714"></rect>
																			<rect fill="#dc3912" stroke-width="0" stroke="none" height="75" width="10" y="474" x="767"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="85" width="10" y="464" x="83"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="110" width="10" y="439" x="136"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="107" width="10" y="442" x="190"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="114" width="10" y="435" x="243"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="118" width="10" y="431" x="297"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="129" width="10" y="420" x="350"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="142" width="10" y="407" x="404"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="169" width="10" y="380" x="457"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="249" width="10" y="300" x="511"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="276" width="10" y="273" x="564"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="252" width="10" y="297" x="618"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="195" width="10" y="354" x="671"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="134" width="10" y="415" x="725"></rect>
																			<rect fill="#ff9900" stroke-width="0" stroke="none" height="122" width="10" y="427" x="778"></rect>
																		</g>
																		<g>
																			<rect fill="#333333" stroke-width="0" stroke="none" height="1" width="750" y="549" x="50"></rect>
																		</g>
																	</g>
																	<g>
																	</g>
																	<g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="77.25" text-anchor="middle">2000</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="130.75" text-anchor="middle">2001</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="184.25" text-anchor="middle">2002</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="237.75" text-anchor="middle">2003</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="291.25" text-anchor="middle">2004</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="344.75" text-anchor="middle">2005</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="398.25" text-anchor="middle">2006</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="451.75" text-anchor="middle">2007</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="505.25" text-anchor="middle">2008</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="558.75" text-anchor="middle">2009</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="612.25" text-anchor="middle">2010</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="665.75" text-anchor="middle">2011</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="719.25" text-anchor="middle">2012</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="9" font-family="arial" y="563.65" x="772.75" text-anchor="middle">2013</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="10" font-family="arial" y="553" x="40" text-anchor="end">0</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="10" font-family="arial" y="428.25" x="40" text-anchor="end">5.000</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="10" font-family="arial" y="303.5" x="40" text-anchor="end">10.000</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="10" font-family="arial" y="178.75" x="40" text-anchor="end">15.000</text>
																		</g>
																		<g>
																			<text fill="#000000" stroke-width="0" stroke="none" font-size="10" font-family="arial" y="54" x="40" text-anchor="end">20.000</text>
																		</g>
																	</g>
																</g>
																<g>
																	<g>
																		<text fill="#000000" stroke-width="0" stroke="none" font-style="italic" font-size="11" font-family="arial" y="586.35" x="425" text-anchor="middle">A&ntildeo</text>
																	</g>
																</g>
																<g>
																</g>
															</svg>
															<div style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;" aria-label="Una representación tabular de los datos del gráfico.">
																<table>
																	<thead>
																		<tr>
																			<th>A&ntildeo</th>
																			<th>Robo con fuerza</th>
																			<th>Robo con violencia</th>
																			<th>Robo con intimidacion</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>2000</td>
																			<td>10621</td>
																			<td>3855</td>
																			<td>3444</td>
																		</tr>
																		<tr>
																			<td>2001</td>
																			<td>11548</td>
																			<td>4550</td>
																			<td>4429</td>
																		</tr>
																		<tr>
																			<td>2002</td>
																			<td>12156</td>
																			<td>4579</td>
																			<td>4321</td>
																		</tr>
																		<tr>
																			<td>2003</td>
																			<td>12271</td>
																			<td>4643</td>
																			<td>4618</td>
																		</tr>
																		<tr>
																			<td>2004</td>
																			<td>12163</td>
																			<td>4414</td>
																			<td>4751</td>
																		</tr>
																		<tr>
																			<td>2005</td>
																			<td>11900</td>
																			<td>4287</td>
																			<td>5191</td>
																		</tr>
																		<tr>
																			<td>2006</td>
																			<td>13757</td>
																			<td>4854</td>
																			<td>5735</td>
																		</tr>
																		<tr>
																			<td>2007</td>
																			<td>16138</td>
																			<td>4885</td>
																			<td>6817</td>
																		</tr>
																		<tr>
																			<td>2008</td>
																			<td>18066</td>
																			<td>5411</td>
																			<td>10029</td>
																		</tr>
																		<tr>
																			<td>2009</td>
																			<td>15703</td>
																			<td>5622</td>
																			<td>11117</td>
																		</tr>
																		<tr>
																			<td>2010</td>
																			<td>13415</td>
																			<td>4880</td>
																			<td>10134</td>
																		</tr>
																		<tr>
																			<td>2011</td>
																			<td>10924</td>
																			<td>4198</td>
																			<td>7871</td>
																		</tr>
																		<tr>
																			<td>2012</td>
																			<td>7987</td>
																			<td>3573</td>
																			<td>5429</td>
																		</tr>
																		<tr>
																			<td>2013</td>
																			<td>7033</td>
																			<td>3048</td>
																			<td>4912</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div aria-hidden="true" style="display: none; position: absolute; top: 610px; left: 970px; white-space: nowrap; font-family: arial; font-size: 9px;">Robo con intimidacion</div>
													<div>

		     													<fn ><font size=1 color="#0000FF" ><center>Estos datos estadisticos son recopilados de la informacion que la Policia Nacional de Nicaragua brinda en sus informes anuales </center> </font></fn>
													</div>
												</div>
											</div>
											<div class="clearbreak">
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="clearbreak">
							</div>
						</div>
					</div>
				</section>
				<div id="jsn-content-bottom" class="clearafter">
						<div id="jsn-content-bottom-inner">
							<div id="jsn-usermodules3" class="jsn-modulescontainer jsn-modulescontainer row-fluid">
								<div id="jsn-pos-user7" class="span12 order1 ">
									<div class=" jsn-modulecontainer">
										<div class="jsn-modulecontainer_inner">
											<h3 class="jsn-moduletitle">
												<p id="titulo_datos_estadisticos" class="titulo_seccion"><br></br>Mapa de los lugares mas peligrosos de managua</p>
												<br>
												<b
											</h3>
											<div class="jsn-modulecontent">
												<div>
													<iframe src="https://www.google.com/maps/d/embed?mid=zdRkHxYuPh_s.kK0vNPpxWyH8" height="520" width="100%"></iframe>
												</div>
												<fn ><font size=1 color="#0000FF" ><center>Algunos sitios peligrosos de Managua</center> </font></fn>		
												<br>
												<br>
												<br>										
											<div class="clearbreak">
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
	</section>


			

		<section id="acerca_de_nosotros">

			<br></br>

			<p id="titulo_acerca_de_nosotros" class="titulo_seccion"><br></br>Acerca de nosotros</p>


			<p id="titulo_datos_estadisticos" class="titulo_seccion">Nosotros somos estudiantes de la carrera de ingeniería en computación de la Universidad Nacional de Ingeniería en busca de una manera rápida y sencilla en la que la población pueda asegurarse través de una pagina web, ya que este sistema no existe en nuestro país.</p>


		</section>	


		



	

	<footer class="footer">
		<p>Todos los derechos reservados &copy; 2015. Desarrollado por <a href="javascript:window.open('https://www.facebook.com/Atomic-Developers-1656333991272801/timeline/','','width=1400,height=600,left=50,top=50,toolbar=yes');void 0">Atomic Developers</a>  </p>
	</footer>
</body>
</html>