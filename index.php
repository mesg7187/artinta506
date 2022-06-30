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
                        <a href="#about" class="w3-button w3-block">About</a>
                    </div>
                    <div class="w3-col s3">
                        <a href="#contact" class="w3-button w3-block">Cotizar</a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

                <div class="w3-panel">
                    <h1><b>MARKETING</b></h1>
                </div>

                <!-- Slideshow -->
                <div class="w3-container">
                    <div class="w3-display-container mySlides">
                        <img src="https://www.w3schools.com/w3images/coffee.jpg" style="width:100%">
                        <div class="w3-display-topleft w3-container w3-padding-32">
                            <span class="w3-white w3-padding-large w3-animate-bottom">Lorem ipsum</span>
                        </div>
                    </div>
                    <div class="w3-display-container mySlides">
                        <img src="https://www.w3schools.com/w3images/workbench.jpg" style="width:100%">
                        <div class="w3-display-middle w3-container w3-padding-32">
                            <span class="w3-white w3-padding-large w3-animate-bottom">Klorim tipsum</span>
                        </div>
                    </div>
                    <div class="w3-display-container mySlides">
                        <img src="https://www.w3schools.com/w3images/sound.jpg" style="width:100%">
                        <div class="w3-display-topright w3-container w3-padding-32">
                            <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
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
                        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
                    </div>
                    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                        <h3>Design</h3>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    </div>

                    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
                        <h3>Branding</h3>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    </div>

                    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
                        <h3>Consultation</h3>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    </div>

                    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16"  >
                        <h3>Promises</h3>
                        <p id=preguntas >Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    </div>
                </div>




                <h2 >Preguntas Frecuentes </h2>

                <button class="accordion">¿Cómo reservo una cita?</button>
                <div class="panel">
                    <p>Si desea reservar una cita para tatuarse en nuestro estudio, vaya a la *Página de reservas* en el sitio y complete el formulario de envío. Esto incluirá tu información de contacto, el artista al que te gustaría tatuarte y una descripción breve pero específica de tu idea de tatuaje. Debido al alto volumen de envíos, espere hasta 2-3 semanas para recibir una respuesta.</p>
                </div>

                <button class="accordion">¿Qué edad debo tener para hacerme un tatuaje?</button>
                <div class="panel">
                    <p>Debe tener al menos 18 años de edad. Es contra la ley de Costa Rica tatuar a un menor.De acuerdo con esta ley, tenemos una estricta política de No Menores. No solo debe tener 18 años, sino que también debe demostrarlo con una identificación con foto válida. Sin excepciones.</p>
                </div>

                <button class="accordion">¿Cuánto cobra usted?</button>
                <div class="panel">
                    <p>Cobramos una tarifa por hora de tatuaje, que se aplica por cada pieza en una sesión. Por ejemplo, si solicita un diseño adicional en otra parte del cuerpo durante la misma sesión, se le cobrarán ambos individualmente. Después de enviar su solicitud de cita, el artista se comunicará con usted con sus tarifas individuales y horarios disponibles.</p>
                </div>

                <button class="accordion">¿Se requiere un depósito para reservar una cita?</button>
                <div class="panel">
                    <p>Una vez que usted y el artista hayan resuelto todos los detalles relacionados con la programación de su cita y su idea de tatuaje, se le pedirá que envíe un depósito equivalente a una hora de tatuaje. El depósito se aplicará al total final de la cita. Para obtener más información sobre los depósitos, consulte nuestros términos y condiciones.</p>
                </div><!-- comment -->

                <button class="accordion">Envié una solicitud de cita y no he recibido respuesta.</button>
                <div class="panel">
                    <p>Debido a un gran volumen de solicitudes, es posible que necesitemos algunos dias para procesar todos los envíos. Si no ha recibido noticias nuestras en 2 semanas, no dude en enviar un correo electrónico de seguimiento.</p>
                </div><!-- comment -->


                <button class="accordion">¿Dónde te encuentras?</button>
                <div class="panel">
                    <p>Nuestro estudio está ubicado en Heredia cerca de la ESPH. Una vez que haya reservado una cita, le enviaremos la dirección junto con la información de preparación para su cita.</p>
                </div>  


                <button class="accordion">¿Qué formas de pago aceptan?</button>
                <div class="panel">
                    <p>Aceptamos tanto tarjetas de crédito como efectivo. Si es necesario, se aceptará PayPal con una tarifa adicional adjunta.</p>
                </div>

                <button class="accordion">¿Qué debo mencionar al describir el diseño de mi tatuaje?</button>
                <div class="panel">
                    <p>Cuando explique el diseño de su tatuaje, sea lo más detallado posible. Por ejemplo, si quieres un tatuaje de una flor, dinos qué tipo de flor es. Sea explícito en su descripción, pero trate de ser breve. Envíanos las fotos de referencia que tengas para el tatuaje. También especifica si quieres tu tatuaje a color o en blanco y negro (no todos los artistas hacen ambas cosas). Indícanos dónde pretendes hacerte el tatuaje, así como el tamaño aproximado.</p>
                </div>

                <button class="accordion">¿Qué tipo de estilos haces?</button>
                <div class="panel">
                    <p>Cada uno de nuestros artistas se especializa en diferentes estilos. Para ver ejemplos de su trabajo, consulte la página de *Artistas* para ver sus galerías individuales.</p>
                </div>

                <button class="accordion">Encontré un diseño en internet y lo quiero como tatuaje. ¿Harian eso?</button>
                <div class="panel">
                    <p>Nuestros artistas solo trabajan con diseños originales; sin embargo, ciertamente pueden usar el diseño que encontraste como referencia para crear un diseño personalizado.</p>
                </div><!-- comment -->

                <button class="accordion">¿Cobran una tarifa por dibujar mi tatuaje?</button>
                <div class="panel">
                    <p>No cobramos una tarifa por adelantado por los diseños de dibujo. Sin embargo, si el artista ya terminó el diseño y usted decide hacer cambios que requieran una reelaboración drástica, se agregará un cargo adicional de una hora al total final de la cita.</p>
                </div><!-- comment -->


                <button class="accordion">¿Puedo cambiar mi diseño?</button>
                <div class="panel">
                    <p>La obra de arte se mostrará el día de su cita. Las citas se hacen en base al diseño solicitado originalmente. Se pueden realizar cambios/ajustes menores (al diseño acordado) el día de la cita. Si se solicitan cambios por el concepto, se considera un proyecto aparte y se requiere otro depósito.</p>
                </div>


                <button class="accordion">¿Cuándo puedo ver el diseño terminado?</button>
                <div class="panel">
                    <p>Normalmente no verá el diseño completo hasta que llegue a su cita. Si es necesario hacer algún ajuste, se hará cuando se presente a su cita.</p>
                </div>

                <button class="accordion">¿Necesitaré más de una sesión?</button>
                <div class="panel">
                    <p>Dependiendo del tamaño del tatuaje, el artista puede necesitar más de una sesión para completar la pieza. El artista también puede decidir interrumpir la sesión durante la cita (debido a limitaciones de tiempo, tolerancia al dolor de los clientes y/o cambios de diseño). Si se requieren varias sesiones, el artista continuará al día siguiente dependiendo de la disponibilidad, o deberá esperar hasta que el tatuaje esté completamente curado (2 a 4 semanas). Si no es local, tenga en cuenta esta posibilidad al programar su cita.</p>
                </div>

                <button class="accordion">¿Qué pasa si no puedo llegar a mi cita?</button>
                <div class="panel">
                    <p>Puede reprogramar hasta 72 horas antes de su cita. Cualquier cancelación realizada con menos de 72 horas antes de su cita hará que pierda su depósito. Puede reprogramar una vez sin incurrir en cargos adicionales. En el caso de una emergencia grave, sea comunicativo y haremos todo lo posible para resolver algo con usted.</p>
                </div>

                <button class="accordion">¿Cuál es su política sobre circunstancias de emergencia/cancelaciones de última hora?</button>
                <div class="panel">
                    <p>Si su cita se pospone debido a circunstancias fuera de nuestro control (es decir, clima, enfermedad extrema, etc.), el artista le ofrecerá la próxima cita disponible más temprana en sus horarios.</p>
                </div><!-- comment -->

                <button class="accordion">¿Puede traer un(a) amiga(o)?</button>
                <div class="panel">
                    <p>Si bien su amigo (o familiar) puede acompañarlo a la cita y regresar para recogerlo, no podemos acomodar a más personas en el estudio durante el proceso de tatuaje.</p>
                </div><!-- comment -->


                <button class="accordion">¿Puedo encargar un diseño si vivo lejos?</button>
                <div class="panel">
                    <p>Queremos darte el mejor tatuaje posible, y no podemos controlar lo que otros tatuadores fuera de nuestro estudio harán con nuestros diseños. Debido a esto, solo creamos diseños para que los usen nuestros propios artistas.</p>
                </div>

                <button class="accordion">¿Qué pasa si necesito un retoque?</button>
                <div class="panel">
                    <p>Antes de decidir si su tatuaje necesita un retoque, espere un mínimo de un mes para que se cure por completo. Una vez que haya pasado ese tiempo, envíenos un correo electrónico directamente con una foto de su tatuaje y las inquietudes que tiene. Su artista responderá y ofrecerá un tiempo para realizar el retoque si lo considera necesario. El primer retoque programado es gratuito. Más retoques o alteraciones requerirán tarifas adicionales.
                        Si el otro tatuador realiza modificaciones al tatuaje original, el artista ya no es responsable de los retoques ni de continuar con ese proyecto.</p>
                </div>


                <button class="accordion">¿Qué debo hacer después de terminar mi tatuaje?</button>
                <div class="panel">
                    <p>Consulte las instrucciones de cuidado posterior para obtener más detalles.</p>
                </div>

                <button class="accordion">¿Dónde me dolerá menos mi tatuaje?</button>
                <div class="panel">
                    <p>Consulte esta tabla de tolerancia al dolor para obtener más detalles.</p>
                </div>

                <button class="accordion">¿Cómo afecta el tono de la piel a la coloración del tatuaje?</button>
                <div class="panel">
                    <p>Después de la curación, ciertos colores pueden aparecer de manera diferente a lo esperado con tonos de piel más oscuros. Consulte con su artista del tatuaje sobre las opciones de color específicas que pueda tener para su tatuaje.</p>
                </div><!-- comment -->

                <button class="accordion">¿Se desvanecerá/cambiará mucho mi tatuaje?</button>
                <div class="panel">
                    <p>Si bien esto varía un poco según los diferentes tipos de piel, la mejor solución para evitar la decoloración y el cambio es seguir todas las instrucciones de cuidado posterior y mantener su tatuaje sano y limpio.</p>
                </div><!-- comment -->


                <button class="accordion">¿Hay descansos durante la cita?</button>
                <div class="panel">
                    <p>El artista generalmente tomará un descanso cada 3-4 horas.</p>
                </div>


                <button class="accordion">Quiero hacerme un tatuaje. ¿Debo enviar una solicitud de reserva o enviar un correo electrónico directamente?</button>
                <div class="panel">
                    <p>Envíe una solicitud de reserva primero a través de nuestro sitio web. Cualquier otra comunicación se realizará por correo electrónico.</p>
                </div><!-- comment -->



                <!-- Grid -->
                <div class="w3-row-padding" id="about">
                    <div class="w3-center w3-padding-64">
                        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card-4">
                            <img src="https://www.w3schools.com/w3images/team1.jpg" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h3>Jane Doe</h3>
                                <p class="w3-opacity">CEO & Founder</p>
                                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card-4">
                            <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
                            <div class="w3-container">
                                <h3>Mike Ross</h3>
                                <p class="w3-opacity">Art Director</p>
                                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <div class="w3-card-4">
                            <img src="https://www.w3schools.com/w3images/team3.jpg" alt="Jane" style="width:100%">
                            <div class="w3-container">
                                <h3>John Doe</h3>
                                <p class="w3-opacity">Designer</p>
                                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
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
                        <label>imagen referencia1</label>
                        <input type="hidden" name="size" value="1000000">
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image1" >
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image2" >
                        <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" value= " "type="file" name="image3" >
                    </div>

                    <div class="w3-section">
                        <label>Tamanho aproximado en centimetros</label>
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
                                <input type="checkbox" name="leido" value="1"required >He ledio los terminos y condiciones.
                                <div>
                                    <button type="submit" name="upload"class="w3-button w3-block w3-black">Send</button>
                                    </form>
                                </div>

                                <!-- Footer -->

                                <footer class="w3-container w3-padding-32 w3-light-grey w3-center">
                                    <h4>Footer</h4>
                                    <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
                                    <div class="w3-xlarge w3-section">
                                        <i class="fa fa-facebook-official w3-hover-opacity"></i>
                                        <i class="fa fa-instagram w3-hover-opacity"></i>
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
                            </div>
                            </body>
                            </html>
