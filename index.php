<!DOCTYPE html>
<html>
    <head>
        <title>Artinta506</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }

            .active, .accordion:hover {
                background-color: #ccc;
            }

            .accordion:after {
                content: '\002B';
                color: #777;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            .active:after {
                content: "\2212";
            }

            .panel {
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }
        </style>

        <style>
            html,body,h1,h2,h3,h4 {
                font-family:"Lato", sans-serif
            }
            /*html,body,h1,h2,h3,h4 {color:white}*/
            .mySlides {
                display:none
            }
            .w3-tag, .fa {
                cursor:pointer
            }
            .w3-tag {
                height:15px;
                width:15px;
                padding:0;
                margin-top:6px
            }

            img {
                width: 100%;
                height: auto;
            }

            .bg {
                /* The image used */
                /* background-image: url("/img/Fondo1.jpg");
               
                 /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: auto;
            }

        </style>
    </head>
    <body>

        <img src="vistas/img/Fondo2.jpg" width="460" height="345">
        <div class="bg">
            <!-- Links (sit on top) -->
            <div class="w3-top">
                <div class="w3-row w3-large w3-light-grey">
                    <div class="w3-col s3">
                        <a href="#" class="w3-button w3-block">Home</a>
                    </div>

                    <div class="w3-col s3">
                        <a href="#preguntas" class="w3-button w3-block">Preguntas Frecuentes</a>
                    </div><!-- comment -->

                    <div class="w3-col s3">
                        <a href="#about" class="w3-button w3-block">Acerca</a>
                    </div>
                    <div class="w3-col s3">
                        <a href="#contact" class="w3-button w3-block">Cotizar</a>
                    </div>


                    <div class="w3-col s3">
                        <a href="vistas/viewClients.php" class="w3-button w3-block">Ver  Clientes</a>
                    </div>

                    <div class="w3-col s3">
                        <a href="vistas/viewCotizaciones.php" class="w3-button w3-block">Ver cotizaciones</a>
                    </div>


                </div>
            </div>

            <!-- Content -->
            <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

                <div class="w3-panel">
                    <h1><b>Galeria</b></h1>
                </div>

                <!-- Slideshow -->
                <div class="w3-container">
                    <div class="w3-display-container mySlides">
                        <img src="vistas/img/5.JPG" style="width:100%">
                        <div class="w3-display-topleft w3-container w3-padding-32">

                        </div>
                    </div>
                    <div class="w3-display-container mySlides">
                        <img src="vistas/img/3.JPG" style="width:100%">
                        <div class="w3-display-middle w3-container w3-padding-32">

                        </div>
                    </div>
                    <div class="w3-display-container mySlides">
                        <img src="vistas/img/12.JPG" style="width:100%">
                        <div class="w3-display-topright w3-container w3-padding-32">

                        </div>
                    </div>

                    <!-- Slideshow next/previous buttons -->
                    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
                        <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
                        <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>

                        <div class="w3-center">
                            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>

                        </div>
                    </div>
                </div>

                <!-- Grid -->
                <div class="w3-row w3-container">
                    <div class="w3-center w3-padding-64">
                        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Ofrecemos</span>
                    </div>
                    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                        <h3>Dise??o</h3>
                        <p>Logramos hacer que cada tatuaje hecho por nosotros sea diferente al resto, para ello, usamos diferentes conceptos de composicion junto con las ideas de nuestros clientes.</p>
                    </div>

                    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
                        <h3>Consultoria</h3>
                        <p>Solo nos especializamos en Black & Grey y por esto no abarcamos todos los estilos, por esto, si detectamos una mejor experiancia con otros artistas Ajenos a Artinta506, amablemente los referimos a ellos, la buena atencion siempre sera nuesta mayor meta.</p>
                    </div>



                    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
                        <h3>Tecnologia</h3>
                        <p>Contamos con herramientas de edicion de imagen, ademas de software encargado de almacenar tanto los perfiles artisticos de nuestros clientes cuanto el expediendte de cada tatuaje. Tambien usamos maquinas de alto prestigio cuya tecnologia y fiabilidad nos ayudan a llegar a mejores resultados tanto en acabado cuanto a la sanacion de nuestras piezas.</p>
                    </div>



                    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16"  >
                        <h3>Alta Responsabilidad</h3>
                        <p id=preguntas >El arte de tatuarse no solo debe ser una muy agradable experiencia para nuestros clientes, tambien es un proceso estetico que puede influir en el auto estima de las personas que los reciben, esto ademas del gran grado de responsabilidad sobre la salud de las mismas, y es por eso que seguimos todos los protocolos necesarios para garantizar un ambiente libre de elementos patogenos que puedan complicar la sanacion de nuestras creaciones.</p>
                    </div>




                </div>




                <h2 >Preguntas Frecuentes </h2>

                <button class="accordion">??C??mo reservo una cita?</button>
                <div class="panel">
                    <p>Si desea reservar una cita para tatuarse en nuestro estudio, vaya a la "Cotizar" en el sitio y complete el formulario de env??o. Esto incluir?? tu informaci??n de contacto y una descripci??n breve pero espec??fica de tu idea de tatuaje. Debido al alto volumen de env??os, espere hasta 2-3 dias para recibir una respuesta.</p>
                </div>

                <button class="accordion">??Qu?? edad debo tener para hacerme un tatuaje?</button>
                <div class="panel">
                    <p>Debe tener al menos 21 a??os de edad. Es contra la ley de Costa Rica tatuar a un menor.De acuerdo con esta ley, tenemos una estricta pol??tica de No Menores. No solo debe tener 21 a??os, sino que tambi??n debe demostrarlo con una identificaci??n con foto v??lida. Sin excepciones.</p>
                </div>

                <button class="accordion">??Cu??nto cobra?</button>
                <div class="panel">
                    <p>Cobramos una tarifa por hora de tatuaje, que se aplica por cada pieza en una sesi??n. Por ejemplo, si solicita un dise??o adicional en otra parte del cuerpo durante la misma sesi??n, se le cobrar??n ambos individualmente. Despu??s de enviar su solicitud de cita, el artista se comunicar?? con usted con sus tarifas individuales y horarios disponibles.</p>
                </div>

                <button class="accordion">??Se requiere un dep??sito para reservar una cita?</button>
                <div class="panel">
                    <p>Una vez que usted y el artista hayan resuelto todos los detalles relacionados con la programaci??n de su cita y su idea de tatuaje, se le pedir?? que env??e un dep??sito equivalente a una hora de tatuaje ($30). El dep??sito se aplicar?? al total final de la cita. Para obtener m??s informaci??n sobre los dep??sitos, consulte nuestros t??rminos y condiciones.</p>
                </div><!-- comment -->

                <button class="accordion">Envi?? una solicitud de cita y no he recibido respuesta.</button>
                <div class="panel">
                    <p>Debido a un gran volumen de solicitudes, es posible que necesitemos algunos dias para procesar todas las cotizaciones. Si no ha recibido noticias nuestras en 2 dias, no dude en enviar un correo electr??nico de seguimiento.(artinta506@gmail.com)</p>
                </div><!-- comment -->


                <button class="accordion">??D??nde se encuentra Artinta506?</button>
                <div class="panel">
                    <p>Nuestro estudio est?? ubicado en Heredia cerca de la ESPH. Una vez que haya reservado una cita, le enviaremos la direcci??n junto con la informaci??n de preparaci??n para su cita.</p>
                </div>  


                <button class="accordion">??Qu?? formas de pago aceptan?</button>
                <div class="panel">
                    <p>Aceptamos tanto deposito, efectivo o sinpe movil. No aceptamos Targetas por el momento</p>
                </div>

                <button class="accordion">??Qu?? debo mencionar al describir el dise??o de mi tatuaje?</button>
                <div class="panel">
                    <p>Cuando explique el dise??o de su tatuaje, sea lo m??s detallado posible. Por ejemplo, si quieres un tatuaje de una flor, dinos qu?? tipo de flor es. Sea expl??cito en su descripci??n, pero trate de ser breve. Env??anos las fotos de referencia que tengas para el tatuaje.Ind??canos d??nde pretendes hacerte el tatuaje, as?? como el tama??o aproximado en centimetros.</p>
                </div>

                <button class="accordion">??Qu?? tipo de estilos haces?</button>
                <div class="panel">
                    <p>Linea fine e hyperfina (letras, simbolos etc) y realismo black & grey(un lavado de grises utilizando solo tinta negra y el tono natural de la piel).</p>
                </div>

                <button class="accordion">Encontr?? un dise??o en internet y lo quiero como tatuaje. ??Harian eso?</button>
                <div class="panel">
                    <p>Solo trabajamos con dise??os originales; sin embargo, ciertamente pueden usar el dise??o que encontraste como referencia para crear un dise??o personalizado.</p>
                </div><!-- comment -->

                <button class="accordion">??Cobran una tarifa por dibujar mi tatuaje?</button>
                <div class="panel">
                    <p>No cobramos una tarifa por adelantado por los dise??os de dibujo. Sin embargo, si el artista ya termin?? el dise??o y usted decide hacer cambios que requieran una reelaboraci??n dr??stica, se agregar?? un cargo adicional de una hora al total final de la cita.</p>
                </div><!-- comment -->


                <button class="accordion">??Puedo cambiar mi dise??o?</button>
                <div class="panel">
                    <p>La obra de arte se mostrar?? el d??a de su cita. Las citas se hacen en base al dise??o solicitado originalmente. Se pueden realizar cambios/ajustes menores (al dise??o acordado) el d??a de la cita. Si se solicitan cambios por el concepto, se considera un proyecto aparte y se requiere otro dep??sito.</p>
                </div>


                <button class="accordion">??Cu??ndo puedo ver el dise??o terminado?</button>
                <div class="panel">
                    <p>Normalmente no ver?? el dise??o completo hasta que llegue a su cita. Si es necesario hacer alg??n ajuste, se har?? cuando se presente a su cita.</p>
                </div>

                <button class="accordion">??Necesitar?? m??s de una sesi??n?</button>
                <div class="panel">
                    <p>Dependiendo del tama??o del tatuaje, el artista (Mario Solano) puede necesitar m??s de una sesi??n para completar la pieza. El artista tambi??n puede decidir interrumpir la sesi??n durante la cita (debido a limitaciones de tiempo, tolerancia al dolor de los clientes y/o cambios de dise??o). Si se requieren varias sesiones, el artista continuar?? al d??a siguiente dependiendo de la disponibilidad, o deber?? esperar hasta que el tatuaje est?? completamente curado (2 a 4 semanas). Si no vive cerca, tenga en cuenta esta posibilidad al programar su cita.</p>
                </div>

                <button class="accordion">??Qu?? pasa si no puedo llegar a mi cita?</button>
                <div class="panel">
                    <p>Puede reprogramar hasta 72 horas antes de su cita. Cualquier cancelaci??n realizada con menos de 72 horas antes de su cita har?? que pierda su dep??sito. Puede reprogramar una vez sin incurrir en cargos adicionales. En el caso de una emergencia grave, sea comunicativo y haremos todo lo posible para resolver algo con usted.</p>
                </div>

                <button class="accordion">??Cu??l es su pol??tica sobre circunstancias de emergencia/cancelaciones de ??ltima hora?</button>
                <div class="panel">
                    <p>Si su cita se pospone debido a circunstancias fuera de nuestro control (es decir, clima, enfermedad extrema, etc.), el artista (Mario Solano) le ofrecer?? la pr??xima cita disponible m??s temprana en sus horarios.</p>
                </div><!-- comment -->

                <button class="accordion">??Puede traer un(a) amiga(o)?</button>
                <div class="panel">
                    <p>Preferimos siempre atender solo a la(s) persona(s) que se va(n) a tatuar, sin embargo sientase libre de explicar su situacion y con gusto le tomaremos en cuenta.</p>
                </div><!-- comment -->


                <button class="accordion">??Puedo encargar un dise??o si vivo lejos?</button>
                <div class="panel">
                    <p>Queremos darte el mejor tatuaje posible, y no podemos controlar lo que otros tatuadores fuera de nuestro estudio har??n con nuestros dise??os. Debido a esto, solo creamos dise??os para que los usen nuestros propios artistas.</p>
                </div>

                <button class="accordion">??Qu?? pasa si necesito un retoque?</button>
                <div class="panel">
                    <p>Antes de decidir si su tatuaje necesita un retoque, espere un m??nimo de un mes para que se cure por completo. Una vez que haya pasado ese tiempo, env??enos un correo electr??nico directamente con una foto de su tatuaje y las inquietudes que tiene. Responderemos y ofreceremos un tiempo para realizar el retoque si lo considera necesario. El primer retoque programado es gratuito. M??s retoques o alteraciones requerir??n tarifas adicionales.
                        Si otro tatuador realiza modificaciones al tatuaje original, el artista ya no es responsable de los retoques ni de continuar con ese proyecto.Tenga en cuenta que tiene 6 meses para hacer su reclamo, despues de este plazo no se haran retoques</p>
                </div>


                <button class="accordion">??Qu?? debo hacer despu??s de terminar mi tatuaje?</button>
                <div class="panel">
                    <p>Consulte las instrucciones de cuidado posterior para obtener m??s detalles con el artista encargado (Mario Solano).</p>
                </div>


                <button class="accordion">??C??mo afecta el tono de la piel a la coloraci??n del tatuaje?</button>
                <div class="panel">
                    <p>Despu??s de la curaci??n, ciertos colores pueden aparecer de manera diferente a lo esperado con tonos de piel m??s oscuros. Consulte con su artista del tatuaje (Mario Solano)sobre las opciones de color espec??ficas que pueda tener para su tatuaje.</p>
                </div><!-- comment -->

                <button class="accordion">??Se desvanecer??/cambiar?? mucho mi tatuaje?</button>
                <div class="panel">
                    <p>Si bien esto var??a un poco seg??n los diferentes tipos de piel, la mejor soluci??n para evitar la decoloraci??n y el cambio es seguir todas las instrucciones de cuidado posterior y mantener su tatuaje sano y limpio.</p>
                </div><!-- comment -->


                <button class="accordion">??Hay descansos durante la cita?</button>
                <div class="panel">
                    <p>El artista generalmente tomar?? un descanso cada 3-4 horas.</p>
                </div>


                <button class="accordion">Quiero hacerme un tatuaje. ??Debo cotizar o enviar un correo electr??nico directamente?</button>
                <div class="panel">
                    <p>Env??e una cotizacion primero a trav??s de nuestro sitio web. Cualquier otra comunicaci??n se realizar?? por correo electr??nico.</p>
                </div><!-- comment -->



                <!-- Grid -->
                <div class="w3-row-padding" id="about">
                    <div class="w3-center w3-padding-64">
                        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Quienes somos</span>
                    </div>



                    <div class="w3-center w3-padding-64" class="w3-third w3-margin-bottom">
                        <div class="w3-card-4">
                            <img src="vistas/img/9.JPG" alt="Mike" style="width:100%">
                            <div class="w3-container">
                                <h3>Mario Solano</h3>
                                <p class="w3-opacity">Artista del tatuaje y due??o de Artinta506</p>
                                <p class="w3-opacity">Ingeniero por profecion y dibujante por vocacion vengo a ofrecer mis servicios de artista del tatuaje.</p>
                                <p>Despues de muchos a??os en el estudio en dibujo anatomico humano y mas de 2 a??s tatuando, me dispongo a abrir Artinta506,</p>
                                <p>con el fin de dar una propuesta diferente, tanto en trabajos de linea fina como trabajos de realismo black and grey.</p>
                                
                                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Contact -->
                <div class="w3-center w3-padding-64" id="contact">
                    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Cotizar</span>
                </div>
















                <form enctype="multipart/form-data"  method="POST" action="/datos/cotizaciones/postCotizacion.php" class="w3-container" >
                    <div class="w3-section">
                        <label>Nombre</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="nombre" required>
                    </div>
                    <div class="w3-section">
                        <label>Primer Apellido</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="primerApellido" required>
                    </div>
                    <div class="w3-section">
                        <label>Segundo Apellido</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="segundoApellido" required>
                    </div><!-- comment -->
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
                    </div>
                    <div class="w3-section">
                        <label>Numero Telefonico</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="numeroTelefonico" required>
                    </div>
                    <div class="w3-section">
                        <label>Descripcion del Tatuaje</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="descripcionTatuaje"required >
                    </div>

                    <div class="w3-section">
                        <label>Imagenes de referencia</label>
                        <input type="hidden" name="size" value="1000000">
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image1" required>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image2" required>

                    </div>
                    <div class="w3-section">
                        <label>Fotos de la parte de la parte de SU cuerpo a tatuar</label>
                        <input type="hidden" name="size" value="1000000">
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image3" >
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image4" >
                    </div>




                    <div class="w3-section">
                        <label>Tama??o aproximado en centimetros</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="tamanho" required>
                    </div><!-- comment -->
                    <div class="w3-section">
                        <label>Parte del cuerpo a tatuar</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="parteDelCuerpo" required>
                    </div><!-- comment -->
                    <div class="w3-section">
                        <label>Preferencias Covid?</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="preferenciasCovid"required >
                    </div><!-- comment -->

                    <div class="w3-section">
                        <label>Disponibilidad</label>
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="disponibilidad" required>
                    </div><!-- comment -->
                    <div class="w3-section">
                        <input type="checkbox" name="autorizo" value="1" required>autorizo a este sitio a usar mi informacion para los propositos de esta cotizacion.
                        <div>
                            <div class="w3-section">
                                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display = 'block'"><i class="fa fa-rss"></i> Leer Terminos y condiciones</a>
                                <!--TERMINOS Y CONDICIONESS -->
                                <div id = "subscribe" class = "w3-modal">
                                    <div class = "w3-modal-content w3-animate-zoom w3-padding-large">
                                        <div class = "w3-container w3-white w3-center">
                                            <i onclick = "document.getElementById('subscribe').style.display = 'none'" class = "fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
                                            <h2 class = "w3-wide">Terminos Y Condiciones</h2>

                                            <div class = "w3-container">
                                                <hr>
                                                <p>Debe tener al menos 18 a??os de edad. Es contra la ley del estado de Nueva York (Secci??n 260.21) tatuar a un menor, incluso con el consentimiento de los padres. De acuerdo con esta ley, tenemos una estricta pol??tica de No Menores. No solo debe tener 18 a??os, sino que tambi??n debe demostrarlo con una identificaci??n con foto estatal o federal v??lida. Sin excepciones.



                                                    No atendemos a ni??os, este es un ambiente estrictamente "no menores de 18 a??os", por lo que no se permiten ni??os en el estudio.



                                                    Si viaja a Nueva York y planea pagar con su tarjeta, tenga en cuenta que a veces los bancos congelan las transacciones m??s grandes. Tenga opciones de pago de respaldo (efectivo, otra(s) tarjeta(s))



                                                    ??????Para reservar una cita es necesario dejar un dep??sito seg??n la tarifa del artista.



                                                    Todos los dep??sitos no son reembolsables ni transferibles.

                                                    La tienda requiere un aviso de al menos 72 horas para realizar cualquier cambio en su cita. Si no proporciona un aviso de 72 horas, perder?? su dep??sito. Si cancela o no se presenta a su cita, perder?? su dep??sito. Si necesita reprogramar su cita, puede transferir su dep??sito en UNA sola vez, siempre que avise con m??s de 72 horas de anticipaci??n. Si no puede asistir a su cita reprogramada, perder?? su dep??sito y necesitar?? un nuevo dep??sito para volver a reservar.



                                                    Su dep??sito se mantendr?? como garant??a durante la duraci??n de su tatuaje. Si su tatuaje requiere varias sesiones, el dep??sito se retendr?? hasta la ??ltima sesi??n.



                                                    Se puede reprogramar una cita a m??s tardar 6 meses despu??s del dep??sito inicial. Si la cita no se reprograma para entonces, el dep??sito se perder?? autom??ticamente.

                                                    ??????

                                                    El dise??o de su tatuaje se basar?? en la informaci??n que le envi?? al artista antes de reservar la cita y su material de referencia, y no en una r??plica exacta, ya que todos nuestros artistas proporcionan obras de arte originales.

                                                    ??????

                                                    La obra de arte se mostrar?? el d??a de su cita. Las citas se hacen en base al dise??o solicitado originalmente. Se pueden hacer cambios menores el d??a de la cita. Si se solicitan cambios dr??sticos que requieran volver a dibujar todo el dise??o o una parte mayor del mismo, se considera un proyecto separado y se requiere otro dep??sito.



                                                    En caso de emergencia, su cita puede posponerse a la primera disponible en el horario de apertura que sea conveniente tanto para un artista como para un cliente.

                                                    Si usted es de fuera de la ciudad y no puede venir ning??n otro d??a, se le reembolsar?? su dep??sito.



                                                    El artista puede detener tu sesi??n y programar una segunda si, en su opini??n, es lo mejor que se puede hacer en ese momento (limitaci??n de tiempo, tolerancia al dolor del cliente, cambio de tama??o del dise??o).

                                                    La segunda sesi??n se puede programar solo para el d??a siguiente o despu??s de que el tatuaje haya cicatrizado por completo.

                                                    Si no es local, tenga esto en cuenta cuando haga una cita.

                                                    Aseg??rese de no tener vacaciones planeadas (que impliquen nadar y tomar el sol) al menos 3 semanas despu??s de su cita.

                                                    ??????

                                                    Evite beber alcohol 24 horas antes del tatuaje. Si est?? bajo la influencia del alcohol o las drogas, le pediremos que se vaya y perder?? el dep??sito.



                                                    Evite las bebidas estimulantes como red bull, etc. </p>

                                                <p>A release form will be provided for you, this will ask you if you are under the influence of alcohol or drugs of any kind or pregnant. These are the main reasons for a tattoo to be refused. By signing our release form you have legally signed to say you don???t have any problems regarding your health.



                                                    Avoid sun tanning and tanning beds. Get a good night's sleep prior to your appointment. The healthier you are before your session, the easier it will be for you and the artist to complete your session.



                                                    If you have any type of skin diseases or scars a doctor's note is required confirming that tattooing is not dangerous for your health. 

                                                    ??????

                                                    Make sure that you eat before your appointment and stay hydrated during the appointment.

                                                    ??????

                                                    Occasionally, due to circumstances, the artist may fall behind schedule. This can be caused by a number of uncontrollable issues. If you are on a tight schedule, feel free to tell the artist about that beforehand.



                                                    Artists can take a food break every 4hrs.



                                                    ??????Cell phones of any kind must be shut off or put on silent before entering the studio. Cell phone conversations while getting a tattoo are not allowed. If there is an emergency,  just let your tattoo artist know that you need a phone break.

                                                    ??????

                                                    If you???d like to listen to music/watch videos on your phone/iPod during your appointment, please remember to bring headphones as to not distract the artist.



                                                    No photo/video recording without permission.



                                                    Remember to wear/bring appropriate clothing to your tattoo appointment (shorts, sweatpants, beaters, etc) so that the area being tattooed is easily accessible to the artist.



                                                    No people are allowed to stay in the waiting area during tattooing.



                                                    Service animals are not allowed in the tattooing area for sanitation purposes, but they can stay in the waiting area in case if their service is needed.



                                                    We do not undertake offensive / racist tattoos.

                                                    We are not responsible for the outcome after the tattoo is fully healed if the client didn't follow the aftercare instructions. 



                                                    If any alterations are done to the original tattoo by the other tattooer, the artist is no longer responsible for any touch-ups or continuing that project.

                                                    ??????

                                                    Communication is important. If you have any questions before, during, or after your tattoo, feel free to ask.</p>
                                                <input type="checkbox" name="leido" value="1"required onclick = "document.getElementById('subscribe').style.display = 'none'" >He ledio los terminos y condiciones.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>



































                                    <button type="submit" name="upload"class="w3-button w3-block w3-black">Send</button>
                                    </form>
                                </div>

















                                <!-- Footer -->

                                <footer class="w3-container w3-padding-32 w3-light-grey w3-center">

                                    <h4>No aceptamos por el momento: <i class = "fa fa-credit-card w3-large"></i> <i class = "fa fa-cc-mastercard w3-large"></i> <i class = "fa fa-cc-amex w3-large"></i> <i class = "fa fa-cc-cc-visa w3-large"></i><i class = "fa fa-cc-paypal w3-large"></i></h4>
                                    <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Volver arriba</a>
                                    <div class="w3-xlarge w3-section">
                                        <i class="fa fa-facebook-official w3-hover-opacity"></i>
                                        <i class="fa fa-instagram w3-hover-opacity"><a href="https://www.instagram.com/accounts/login/?next=/artinta506/">Artinta506</a></i>
                                    </div>
                                    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
                                </footer>




                                <script>
                                    //ACORDEON SCRIPT
                                    var acc = document.getElementsByClassName("accordion");
                                    var i;

                                    for (i = 0; i < acc.length; i++) {
                                        acc[i].addEventListener("click", function () {
                                            this.classList.toggle("active");
                                            var panel = this.nextElementSibling;
                                            if (panel.style.maxHeight) {
                                                panel.style.maxHeight = null;
                                            } else {
                                                panel.style.maxHeight = panel.scrollHeight + "px";
                                            }
                                        });
                                    }
                                </script>


                                <script>
                                    // Slideshow
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                        showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                        showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                        var i;
                                        var x = document.getElementsByClassName("mySlides");
                                        var dots = document.getElementsByClassName("demodots");
                                        if (n > x.length) {
                                            slideIndex = 1
                                        }
                                        if (n < 1) {
                                            slideIndex = x.length
                                        }
                                        ;
                                        for (i = 0; i < x.length; i++) {
                                            x[i].style.display = "none";
                                        }
                                        for (i = 0; i < dots.length; i++) {
                                            dots[i].className = dots[i].className.replace(" w3-white", "");
                                        }
                                        x[slideIndex - 1].style.display = "block";
                                        dots[slideIndex - 1].className += " w3-white";
                                    }
                                </script>

                            </div>
                            </body>
                            </html>
