<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Servicio Social FCC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" type="image/png" href="img/fcc_logo.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="css/index.css">
</head>

<body>
	<main>
		<!--Barra de Navegacion-->
		<section id="main-header" class="container cf">
			<a class="logo-header" href="#" title="Inicio">
				<span class="logo"><img src="img/fcc_logo.png" alt="logo" width="50"></span>
			</a><!-- /#logo-header -->
			<span class="menu-trigger material-icons">menu</span>
			<nav id="main-menu" role="navigation" class="closed">
				<ul>
					<li><span class="slogan">Facultad de Ciencias de la Computación</span></li>
					<li><a href="#inicio">Inicio</a></li>
					<li><a href="#info">Información</a></li>
					<li><a href="#formatos">Formatos</a></li>
					<li class="featured"><a href="#contacto">Contacto</a></li>
				</ul>
			</nav><!-- /#main-menu -->

		</section><!-- /#main-header -->
		<!--Slider-->
		<section id="inicio">
			<div class="slider">
				<ul>
					<li>
						<div class="banner">
							<div class="slide__content">
								<h2 class="slide__heading">Servicio Social</h2>
								<p class="slide__text">Junta de inducción</p>
								<Button class="btn" onclick="location.href='https://sersoc.cs.buap.mx/Documentos/Junta-de-inducci%C3%B3n-Final-Primavera-2022.pdf'">Junta de inducción 2022</Button>
							</div>
							<img style="background-image: linear-gradient(to right, hsla(251, 95%, 50%, 0.459), hsla(0, 0%, 99%, 0.664)), url(img/c1.jpg);background-size: cover;">
						</div>
					</li>
					<li>
						<div class="banner">
							<div class="slide__content">
								<h2 class="slide__heading">Oferta de Programas</h2>
								<p class="slide__text">Si aún no conoces los programas ofertados para hacer tu Servicio Social,<br> que esperas para hacerlo.

								</p>
								<Button class="btn" onclick="location.href='http://webserver.siiaa.siu.buap.mx/serv_social/SS_ALUM_AUTSV_OFERTA_C'">Consultar Programas</Button>
							</div>
							<img style="background-image: linear-gradient(to right, hsla(251, 95%, 50%, 0.459), hsla(0, 0%, 99%, 0.664)), url(img/c2.jpg);background-size: cover;">
						</div>
					</li>
					<li>
						<div class="banner">
							<div class="slide__content">
								<h2 class="slide__heading">Inscripción al Servicio Social</h2>
								<p class="slide__text">Inscríbete del 11 de octubre del 2021 hasta 10 de noviembre del 2021.</p>
								<div>
									<Button class="btn" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSeBhEbIlAejxDbLOUBaeBZUP2OKnwa9LANMxYMr0bKz8Y1r1A/viewform'">Inscripcion al Servicio Social</Button>
								</div>
								<div>
									<Button class="btn" onclick="location.href='#info'">Conoce más</Button>
								</div>
							</div>
							<img style="background-image: linear-gradient(to right, hsla(251, 95%, 50%, 0.459), hsla(0, 0%, 99%, 0.664)), url(img/c3.jpg);background-size: cover;">
						</div>
					</li>
					<li>
						<div class="banner">
							<div class="slide__content">
								<h2 class="slide__heading">Termino del Servicio Social</h2>
								<p class="slide__text">¿Ya terminaste tu Servicio Social?<br>
									Entrega tus documentos aquí.</p>
								<Button class="btn" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLScN9NHv92syBQbKjXxobomwzyeO0ukhzio7yRcUkQ5AjAgFxw/viewform'">Carta de Término</Button>
							</div>
							<img style="background-image: linear-gradient(to right, hsla(251, 95%, 50%, 0.459), hsla(0, 0%, 99%, 0.664)), url(img/c4.jpeg);background-size: cover;">
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!--informacion-->
		<section id="informacion">
			<div class="contenedor">
				<div class="blog-card">
					<div class="meta">
						<div class="photo" style="background-image: url(img/c1.jpg)"></div>
					</div>
					<div class="description">
						<h1>Inscripción al Servicio Social</h1>
						<p> Proceso para poder inscribirte a un programa de Servicio Social.
							Para realizar el Servicio Social es necesario cubrir el 70% de los créditos
						</p>
						<div class="btn-card">
							<a href="">
								<h2>Inscripción</h2>
							</a>
						</div>
					</div>
				</div>

				<div class="blog-card alt">
					<div class="meta">
						<div class="photo" style="background-image: url(img/c3.jpg)"></div>
					</div>
					<div class="description">
						<h1>Información</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto
							obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.
						</p>
						<div class="btn-card">
							<a href="#servicios">
								<h2>Inscripción</h2>
							</a>
						</div>
					</div>
				</div>
				<div class="blog-card">
					<div class="meta">
						<div class="photo" style="background-image: url(img/c4.jpeg)"></div>
					</div>
					<div class="description">
						<h1>Término del Servicio Social</h1>
						<p> ¿Ya terminaste tu Servicio Social?
							Verifica los documentos a entregar para obtener tu certificado.
						</p>
						<p>Llena el formulario para solicitud de carta de término.
						</p>
						<div class="btn-card">
							<a href="https://docs.google.com/forms/d/e/1FAIpQLScN9NHv92syBQbKjXxobomwzyeO0ukhzio7yRcUkQ5AjAgFxw/viewform">
								<h2>Inscripción</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Servicios-->
		<section id="servicios">
			<div class="contenedor-reglamento">
				<div class="contenedor-reglamento2">
					<h3 id="reglamento">Reglamento</h3>
					<p>Como prestador de Servicio Social tienes derechos al igual
						que responsabilidades, es importante que puedas conocer ambas
						partes para poder desempeñar el trabajo de la mejor forma así
						como que recibas un trato justo de parte de la dependencia donde
						prestarás el Servicio Social, te pedimos unos minutos para poder
						leer este apartado y si tienes dudas puedes acercarte para aclararlas.
						<br>
					</p>
					<a href="#tabs">Más información</a>
					<h3 id="reglamento"><br>Misión del Servicio Social.</h3>
					<p>
						<br>
						El Servicio Social universitario es la actividad que realizan los estudiantes
						y pasantes en la cual aplican y reciben críticamente un conjunto de conocimientos
						al actuar en el ámbito social, integrando la teoría con la práctica y coadyuvando
						a la articulación de la docencia, la investigación y la extensión universitaria por
						medio de la práctica social y la interdisciplina, logrando con ello cristalizar la
						función social de la universidad. De acuerdo a los artículos 52 y 55 de la ley
						reglamentaria del artículo 5° constitucional, es la acción que por ley deben
						cumplir en beneficio de la sociedad, todos los estudiantes y pasantes de las
						instituciones educativas que requieren título para ejercer su profesión. Además,
						el Servicio Social es un acto moral que forma y desarrolla en el estudiante, una
						actitud de servicio a la comunidad como profesionista, extendiendo hacia la sociedad
						la utilidad de la ciencia, la técnica, las humanidades y el arte. Con él complementarás
						tu formación profesional, retribuyendo a la sociedad por los beneficios de la educación
						recibida, permitiendo proponer e implementar soluciones integrales y concretas a
						problemas existentes en los diferentes sectores de tu sociedad, cumpliendo así el
						compromiso que nuestra institución tiene con la sociedad.
						<br>
					</p>
					<h3 id="reglamento"><br>Visión del Servicio Social.<br></h3>
					<p>
						<br>
						Es una estrategia educativa en su más amplio sentido y una práctica integral
						comprometida con la sociedad, que permite consolidar la formación, es también un
						factor estratégico en la tarea de impulsar el desarrollo municipal, estatal, regional y
						nacional, así como para mejorar los mecanismos que conducen a disminuir las desigualdades
						sociales propiciando mayores oportunidades para un desarrollo individual y comunitario.
						Si la empresa o dependencia donde realizaras el Servicio Social te ha aceptado debes
						solicitar una carta de aceptar, esta debes entregarla el día de tu inscripción.
					</p>
				</div>
			</div>
		</section>
		<!--Pruebas Tabs-->
		<section id="info">
			<div class="contenedor">
				<ul class="tabs">
					<li><a href="#tab2"><span class="tab-text">Reglamento</span></a></li>
					<li><a href="#tab3"><span class="tab-text">Inscripcion</span></a></li>
					<li><a href="#tab4"><span class="tab-text">Termino</span></a></li>
					<li><a href="#tab5"><span class="tab-text">FAQ</span></a></li>
				</ul>
				<div class="secciones">
					<!--Reglamento-->
					<article id="tab1">
					</article>
					<!--Consejos-->
					<article id="tab2">
						<div class="contenedor" id="cont">
							<h6 id="faq-titulo">Reglamento</h6>
							<p>
								<br>
								El Servicio Social es parte importante del Desarrollo del Estudiante para formar parte de la vida laboral y de igual forma como todo dentro de la universidad está regulado esta parte de la Carrera no es la excepción, como prestador de Servicio Social tienes derechos al igual que responsabilidades, es importante que puedas conocer ambas partes para poder desempeñar el trabajo de la mejor forma así como que recibas un trato justo de parte de la Dependencia donde prestaras el Servicio Social, te pedimos unos minutos para poder leer este apartado y si tienes dudas puedes acercarte para aclararlas.
							</p><br>
							<p id="consejo-titulo">ARTICULO 52 </p>
							<p>
								Todos los estudiantes de las profesiones a que se refiere esta Ley, así como los profesionistas no mayores de 60 años, o impedidos por enfermedad grave, ejerzan o no, deberán prestar el Servicio Social en los términos de esta Ley.
							</p><br>
							<p id="consejo-titulo">ARTICULO 53</p>
							<p>
								Se entiende por Servicio Social el trabajo de carácter temporal y mediante retribución que ejecuten y presten los profesionistas y estudiantes en interés de la sociedad y el Estado.
							</p><br>
							<p id="consejo-titulo">ARTICULO 54</p>
							<p>
								Los colegios de profesionistas con el consentimiento expreso de cada asociado, expresarán a la dirección general de profesiones la forma como prestarán el Servicio Social.
							</p><br>
							<p id="consejo-titulo">ARTICULO 55</p>
							<p>
								Los planes de preparación profesional, según la naturaleza de la profesión y de las necesidades sociales que se trate de satisfacer, exigirán a los estudiantes de las profesiones a que se refiere esta Ley, como requisito previo para otorgarles el título, que presten Servicio Social durante el tiempo no menor de seis meses ni mayor de dos años. No se computará en el término anterior el tiempo que por enfermedad u otra causa grave, el estudiante permanezca fuera del lugar en que deba prestar el Servicio Social.
							</p><br>
							<p id="consejo-titulo">ARTICULO 56</p>
							<p>
								Los profesionistas prestarán por riguroso turno, a través del Colegio respectivo, Servicio Social consistente en la resolución de consultas, ejecución de trabajos y aportación de datos obtenidos como resultado de sus investigaciones o del ejercicio profesional.
							</p><br>
							<p id="consejo-titulo">ARTICULO 57</p>
							<p>
								Los profesionistas están obligados a servir como auxiliares de las Instituciones de Investigación Científica, proporcionando los datos o informes que éstas soliciten.
							</p><br>
							<p id="consejo-titulo">ARTICULO 58</p>
							<p>
								Los profesionistas están obligados a rendir, cada tres años, al Colegio respectivo, un informe sobre los datos más importantes de su experiencia profesional o de su investigación durante el mismo período, con expresión de los resultados obtenidos.
							</p><br>
							<p id="consejo-titulo">ARTICULO 59</p>
							<p>
								Los profesionistas están obligados a rendir, cada tres años, al Colegio respectivo, un informe sobre los datos más importantes de su experiencia profesional o de su investigación durante el mismo período, con expresión de los resultados obtenidos.
							</p>
						</div>
					</article>
					<!--Baja-->
					<article id="tab3">
						<div class="contenedor" id="cont">
							<h6 id="faq-titulo">Proceso de inscripción del Servicio Social.</h6>

							<h5 id="consejo-titulo">PRERREQUISITOS.</h5>
							<p style="padding-left:60px;">
								Acudir al curso de inducción ofertado en la FCC por la coordinación de Servicio Social.<br>
								Realiza tu prerregistro. (En autoservicios).<br><br>
							</p>
							<h5 id="consejo-titulo">PASOS A SEGUIR PARA REALIZAR LA INSCRIPCIÓN.</h5>
							<p>
								1.- Revisar los programas autorizados o las dependencias que solicitan prestadores de Servicio Social.<br><br>
								2.- Tener una entrevista de manera virtual con las personas que marcan en los programas
								para informarte a fondo de las actividades a realizar, verificando las vacantes y el perfil
								estudiantil además que el horario sea el adecuado para ti. Finalmente si realizarás tu
								Servicio Social en la empresa o dependencia que te interese y si te solicitan una carta
								de presentación solicítala a la coordinación de Servicio Social con los siguientes datos:
							</p>
							<p style="padding-left:60px;">
								<br>
								A quien va dirigida la carta (grado).<br>
								Cargo de la persona.<br>
								Nombre de la dependencia.<br>
								Nombre del alumno.<br>
								Matrícula.<br>
								Carrera: Licenciatura o ingeniería.<br>
								Porcentaje de créditos cursados.<br>
								Nombre del programa de Servicio Social al que estas interesado.<br><br>
							</p>
							<p>
								3.- Una vez entregada la carta de presentación a la dependencia donde realizaras el
								Servicio Social deberás solicitar una carta de aceptación en la cual te especifiquen fecha de inicio.
								<br><br>
								4.- Inscripción digital en la página web de la facultad en la sección de formatos en
								"Inscripción a Servicio Social 2021" que se activará en las fechas establecidas por la
								coordinadora del Servicio Social. Deberán llenar el formulario, y anexar en formato PDF
								los siguientes documentos:
							</p>
							<p style="padding-left:60px;">
								<br>
								Formato de solicitud de registro debidamente contestada con fotografía infantil puede
								ser blanco y negro o a color digital legible. (También puede descargarlo
								<a href="Documentos/CedulaRegistro2021.docx">Aqui</a>
								).<br>
								Carta de aceptación digital en formato PDF o JPEG.<br><br>
							</p>
							<p>
								5.- Podrás verificar tu inscripción en el programa deseado además tus datos personales
								y los de la empresa o academia estén correctos en autoservicios después de un tiempo de haber
								mandado los documentos por el formulario.<br>
								<br>
							</p>
							<h5 id="consejo-titulo">NOTA</h5>
							<p>
								Para los alumnos de Modelo Fénix el Servicio Social no se toma como materia, sin embargo
								para los alumnos MUM si lo es así que una vez realizado todo él tramite debes verificar
								que el coordinador haya inscrito la materia correctamente la cual de igual forma debe
								pagarse como cualquier otra materia.
							</p>
							<h5 id="consejo-titulo">PERIODOS DEL SERVICIO SOCIAL</h5>
							<p>
								Actualmente existen tres periodos para poder inscribir el Servicio Social basados de la misma
								forma que los períodos de la universidad es decir primavera, verano y otoño.
							</p>
						</div>
					</article>
					<article id="tab4">
						<div class="contenedor" id="cont">
							<p style="padding-left:60px;"></p>
							<h6 id="faq-titulo">REQUISITOS</h6>
							<p>
								Como único requisito es entregar en tiempo y forma todos los documentos que se enlistan a
								continuación para poder liberar el Servicio Social.<br><br>
							</p>
							<h6 id="consejo-titulo">DOCUMENTOS NECESARIOS</h6>

							<h6 id="termino-titulo"> Hoja de desempeño</h6>
							<p id="termino">
								Debe ir firmada por la persona con la que realizó el Servicio Social, el formato lo podrás
								descargar en esta página de servicio en el link formatos.<br><br>
							</p>
							<h6 id="termino-titulo">Reportes de Servicio Social que contenga lo siguiente:</h6>

							<li id="termino-filas">Hoja de presentación.</li>
							<li id="termino-filas">Introducción.</li>
							<li id="termino-filas">Descripción general del Servicio Social.</li>
							<li id="termino-filas">Conclusión de tu Servicio Social.​</li>

							<p id="termino-filas"><br>Nota: Debe llevar hoja de firmas, la cual firmaras tú y la persona con que realizaste Servicio Social.​<br></p>
							<h6 id="termino-titulo">Hoja de nombramiento</h6>
							<p id="termino-filas">
								Descárgalo desde autoservicios.<br>
								Registro escolar > Servicio Social y Práctica Profesional > Servicio Social > Inscrito > Nombramiento.<br><br>
								NOTA: Te aparecerá una encuesta respóndela.<br>
								Esto con el fin de revisar y validar tus documentos, una vez que tengamos la apertura para
								la captura de calificaciones de parte de DAE, agiliza este proceso.<br><br>
								NOTA: Dependemos de las fechas que establezca DAE.<br><br>
							</p>
							<h6 id="termino-titulo">Carta de término de la dependencia</h6>
							<p id="termino">
								Periodo de realización del servicio en un plazo no menor a 6 meses, indicando la fecha de
								inicio y final del Servicio Social.<br>
								Nombre del programa.<br>
								Nombre de la carrera.<br>
								Matrícula.<br>
								Número de horas cubiertas (480 horas).<br>
								La carta de término debe ir dirigida a la coordinadora del Servicio Social de la Facultad de
								Ciencias de la Computación (M.C. Nelva Betzabel Espinoza Hernández) o al director del Servicio
								Social BUAP (Lic. Verónica Arroyo Ronquillo) y estar debidamente firmada por el asesor, este
								documento no debe ir en el engargolado.
								NOTA:
								La fecha de inicio y el nombre del programa deben coincidir con la información que aparece en
								la hoja de nombramiento.
								La carta de término la emite la persona a quien va dirigido el nombramiento.<br><br>
							</p>
							<h6 id="termino-titulo">Llenar encuesta de satisfacción</h6>
							<p id="termino">
								La encuesta la podrás encontrar en la parte de formatos > Encuesta de Satisfacción del SS.<br><br>
							</p>
							<h6 id="consejo-titulo">Trámite para obtención de certificado.</h6>

							<p id="termino">
								Una vez cumplidos los requisitos de término por parte de la coordinación de
								Servicio Social de la FCC y con la certeza de contar como acreditada la materia en
								cárdex (deberá aparecer AC) podrás imprimir tu póliza de pago en autoservicios.<br><br>
							</p>


							<li id="termino-filas">Carta de término digital, extendida por la coordinadora y que envía directamente a la dirección
								de Servicio Social de la BUAP.</li>
							<li id="termino-filas">Descarga ficha de pago a través de autoservicios (para generar la ficha de pago es necesario que
								tenga la materia acreditada,
								ingresando en la siguiente ruta autoservicios> servicios al alumno >
								registro escolar > Servicio Social y Práctica Profesional).<br></li>
							</p>
							<p id="termino">
								Una vez realizado el pago, ingresa a autoservicios y realiza lo siguiente:<br><br>
							</p>
							<p id="termino-filas">
								<li id="termino-filas">
									Adjuntar en un solo archivo de PDF.
								</li>
								<li id="termino-filas">Carta de término de la dependencia donde realizó el Servicio Social.</li>
								<li id="termino-filas">
									Cárdex no mayor a 10 días de haberse descargado, que contenga la materia acreditada.</li>
								<li id="termino-filas">
									Ficha de pago y boucher de pago (importante adjuntar ambos).</li>
								<li id="termino-filas">
									Datos de contacto del alumno en letra totalmente legible de correo electrónico y número telefónico.</li>
								<li id="termino-filas">
									Una vez teniendo este documento PDF tendrás que subir este archivo en autoservicios.
								</li>
								<li id="termino-filas">
									Pagar en el banco HSBC (de su preferencia)
									*El costo será de $30.00 pesos.
								</li>
							</p>
						</div>
					</article>
					<!--Preguntas Frecuentes-->
					<article id="tab5">
						<div class="contenedor" id="cont">
							<h6 id="faq-titulo">
								Si tienes alguna duda, en el siguiente listado se encuentran las preguntas más frecuentes.
							</h6>
							<H6 id="faq-subtitulo">
								En caso de no resolver tu duda, puedes mandar un mail a la coordinadora del área.
							</h6>
							<h5 id="consejo-titulo">Consejos para Seleccion de Programa.</h5>
							<p>
								Existen diferentes empresas o instituciones en las cuales puedes realizar el servicio social, para las cuales te sugerimos que tomes en cuenta los siguientes consejos:<br>
							</p>
							<p style="padding-left:60px;">
								- Carga de materias (máximo 40 créditos).<br>
								- Localización del lugar donde se prestará el servicio (de preferencia cerca de tu casa, escuela ó trabajo).<br>
								- Saber el horario de trabajo de la institución o empresa, así podrás acomodar tus actividades ya sea por la escuela o por el trabajo.<br>
								- Investigar lo que la empresa necesita de tí y que conocimientos previos debes tener para desempeñar eficazmente la labor dentro del servicio social.<br>
								- Conocer el inicio y final del proyecto en el que estarás involucrado dentro de la empresa o institución.<br>
								- Conocer las prestaciones que tendrás en el servicio social (comida, pasajes, posible sueldo, etc.).
							</p>
							<h5 id="consejo-titulo">Entrevista</h5>
							<p>
								Decidir donde realizaras el Servicio Social es una parte importante, te invitamos a solicitar entrevistas en los
								lugares donde te haya interesado realizar el Servicio Social y poder conocer las actividades que desempeñaras para
								poder tener una mejor manera de seleccionar un programa.<br><br>
							</p>
							<button type="button" class="collapsible">¿Qué requisitos se solicitan para realizar el trámite de certificado de servicio social?
							</button>
							<div class="content">
								<p>
									<> Carta de Termino de la Dependencia<br>
										<> Carta de Termino de la Facultad<br>
											<> Materia de SS acreditada (AC)<br>
												<> Fotografías Ovalo Mingón Pago de $30. La ficha se otorga al momento de la revisión de documentos en la ventanilla de SS Y PP ubicada en DAE de CU
								</p>
							</div>
							<button type="button" class="collapsible">¿Qué requisitos se solicitan para realizar el trámite de constancia de prácticas profesionales?</button>
							<div class="content">
								<p>
									<> Carta de Termino de la dependencia<br>
										<> Carta de Termino de la Facultad<br>
											<> Materia de PP acreditada (AC)
								</p>
							</div>

							<button type="button" class="collapsible">¿Qué documento debo solicitar una vez que he concluido el SS o PP en la dependencia o institución?</button>
							<div class="content">
								<p>La Carta de Termino donde conste que ya concluí SS o PP que indique el periodo, la fecha de inicio y fin, el número de horas y que sea expedida por el responsable bajo el cual estuvieron a cargo o por el personal superior a él (por ejemplo: Recursos Humanos, Dirección, etc.)</p>
							</div>

							<button type="button" class="collapsible">¿Quién otorga la Carta de Termino de SS y PP de la Unidad Académica?</button>
							<div class="content">
								<p>La coordinadora o coordinador de SS o PP de su facultad.</p>
							</div>

							<button type="button" class="collapsible">¿Quién otorga la Carta de Termino de SS o PP de la dependencia, cuando la persona con quien se realizó el servicio ya no se encuentra laborando en el puesto que ocupaba dentro de la empresa o institución?</button>
							<div class="content">
								<p>La persona que ocupa el nuevo puesto, o la persona que ocupe un puesto superior respecto a la persona con quien hice el SS o PP dentro de la empresa.</p>
							</div>




							<button type="button" class="collapsible">¿Qué es lo que debo revisar cuando me entregan las cartas de término tanto de SS como de PP?</button>
							<div class="content">
								<p>
									<> Que mi nombre este escrito correctamente<br>
										<> Que las fechas de inicio y fin coincidan en ambas cartas de término<br>
											<> Que se cumplan los 6 meses mínimos para servicio social<br>
												<> Que se mencionen las 480 hrs. reglamentarias para SS<br>
													<> Que se mencionen el número de horas curriculares en PP de acuerdo a mi carrera<br>
														<> Que se encuentren firmadas y selladas por las personas correspondientes<br>
															<> Que no sean firmas por ausencia o facsímil<br>
																<> Que ambas cartas de término sean originales
								</p>
							</div>

							<button type="button" class="collapsible">¿A dónde debo acudir para realizar el trámite de certificación de SS y constancia de PP?</button>
							<div class="content">
								<p>En Ventanilla Única de Servicio Social y Prácticas Profesionales ubicada en DAE de C.U.</p>
							</div>

							<button type="button" class="collapsible">¿Dónde solicito la ficha para el pago del Certificado de Servicio Social y cuál es el valor del mismo?</button>
							<div class="content">
								<p>
									<> En Ventanilla Única de Servicio Social y Prácticas Profesionales ubicada en DAE de C.U.<br>
										<> Alumnos BUAP $30.00 <br>
											<> Incorporadas $669.10
								</p>
							</div>
							<button type="button" class="collapsible">¿Cómo son las fotografías que debo presentar para el Certificado de SS?</button>
							<div class="content">
								<p>
									<> 2 Fotografías blanco y negro tamaño ovalo mingón.<br>
										<> Fondo blanco.<br>
											<> Camisa y/o blusa blanca<br>
												<> Cara perfectamente descubierta, es decir cabello recogido o hacia atrás de tal manera que no esté sobre sus hombros, sin saco<br>
													<> Adheribles y en papel mate.<br>
														<> No instantáneas<br>
															<> Ni plastificadas.<br><br>
																<> Nota: las fotos se entregan al momento de recoger tu Certificado de SS.
								</p>
							</div>

							<button type="button" class="collapsible"> ¿Dónde puedo encontrar información sobre convenios y programas?</button>
							<div class="content">
								<p>
									<> www.serviciosocial.buap.mx. En las Pestaña de Convenios y de Programas.
								</p>
							</div>
							<button type="button" class="collapsible">¿Puede hacer el trámite de certificado de SS o constancia de PP otra persona que no sea yo?</button>
							<div class="content">
								<p>
									<> Para iniciar el trámite puede ir cualquier persona de confianza con los documentos correspondientes.<br>
										<> Para recoger el Certificado de SS es necesario presentar carta poder simple,
											copia de Credencial de Elector de la persona que viene a recoger y del dueño del
											documento, así como las 2 fotografías y el recibo que se les otorga cuando inician tramite.<br>
											<> Para recoger constancia de PP es necesario presentar carta poder simple, copia de
												Credencial de Elector de la persona que viene a recoger y del dueño del documento y
												el recibo que se les otorga cuando inician tramite.<br><br>
												<> Nota: la importancia de tramitar el Certificado de Servicio Social radica en que es
													un documento que se pide como requisito para el trámite de título y cédula profesional
													sin éste no podrás culminar tu proceso de titulación por lo cual te invitamos a realizar
													este trámite de SS o PP en tiempo y forma.
								</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>
		<!--Formatos-->
		<section id="formatos">
			<div class="contenedor">
				<div class="grid-container">
					<div class="grid-item-titulo tall">
					</div>
					<div class="grid-item-info wide tall">
						<p id="grid-item-p" class="titulo-contacto">
							FORMATOS REQUERIDOS PARA SERVICIO SOCIAL<br><br>
							¿Elegiste tu programa?<br>
							¡Inicia tu proceso!<br>

							Aquí encontraras todos los formatos relacionados al Servicio Social
						</p>
					</div>
					<div class="grid-item">

						<img src="img/formato0.svg" width="50%" alt="">
						<a href="Documentos/CedulaRegistro2021.docx" id="grid-item-p">Solicitud de Registro</a>

					</div>
					<div class="grid-item">
						<img src="img/formato1.jpg" width="50%" alt="">
						<a href="https://forms.gle/4MC56Zbe7XLiN82q8" id="grid-item-p">Formato de Inscripcion.</a>
					</div>
					<div class="grid-item">
						<img src="img/formato2.jpg" width="50%" alt="">
						<a href="https://sersoc.cs.buap.mx/Documentos/EVALUACION%202021.pdf" id="grid-item-p">Evaluación de Desempeño</a>
					</div>
					<div class="grid-item">
						<img src="img/formato3.svg" width="70%" alt="">
						<a href="https://sersoc.cs.buap.mx/Documentos/descarga-certificado.png" id="grid-item-p">Descarga del Certificados SS</a>
					</div>
					<div class="grid-item">
						<img src="img/formato5.jpg" width="50%" alt="">
						<a href="https://sersoc.cs.buap.mx/Documentos/Formato%20de%20baja%20(ACTUALIZADO%202019).pdf" id="grid-item-p">Formato de Baja</a>
					</div>
					<div class="grid-item">
						<img src="img/formato6.jpg" width="50%" alt="">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLScN9NHv92syBQbKjXxobomwzyeO0ukhzio7yRcUkQ5AjAgFxw/viewform" id="grid-item-p">Carta de Termino.</a>
					</div>
				</div>
			</div>
		</section>
		<!--contacto-->
		<section id="contacto">
			<div class="contenedor">
				<div class="contacto">
					<img src="img/ilustracion2.svg" alt="" id="img-contacto">
					<div class="contacto-info">
						<h3>COORDINADORA DEL SERVICIO SOCIAL</h3>
						<p>M.C. Nelva Betzabel Espinoza Hernández<br>
							Correo Electrónico: nelva.espinoza@correo.buap.mx<br>
							Teléfono: 229-55-00 Ext:7236
						</p>
						<h3>DIRECCIÓN</h3>
						<p>Av. San Claudio y 14 Sur, Ciudad Universitaria C.P. 72570, Puebla, Puebla. México.
							Edificio 104 "B" Planta Baja.
						</p>
						<h3>HORARIO</h3>
						<p>Lunes a Viernes 11:00 hrs. - 14:00 hrs.</p>

						<!--Redes Sociales-->
						<div class="wrapper">
							<div class="button">
								<div class="icon">
									<a id="icon-fb" href="https://www.facebook.com/Servicio-Social-FCC-520863271377587/"><i class="fab fa-facebook-f"></i></a>
								</div>
								<span>Servicio Social FCC</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>





</body>
<script src="js/slider.js"></script>
<script type="text/javascript">
	window.addEventListener("scroll", function() {
		var header = document.querySelector("header");
	})
</script>
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";

			}
		});
	}
</script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/functions.js"></script>

</html>