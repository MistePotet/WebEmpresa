<?php

if ($_POST) {
    $nombre = "";
    $email = "";
    $departamento = "";
    $asunto = "";
    $contenido = "";

    if(isset($_POST['nombre'])) {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
         
    if(isset($_POST['asunto'])) {
        $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['departamento'])) {
        $departamento = filter_var($_POST['departamento'], FILTER_SANITIZE_STRING);
    }
     
    if($departamento == "mantenimiento") {
        $tecnico = "delahozperezhugo@gmail.com";
    }
    else if($departamento == "academia") {
        $tecnico = "delahozperezhugo@gmail.com";
    }
    else if($departamento == "servicio tecnico") {
        $tecnico = "delahozperezhugo@gmail.com";
    }
    else {
        $tecnico = "delahozperezhugo@gmail.com";
    }

    if(isset($_POST['contenido'])) {
        $contenido = htmlspecialchars($_POST['contenido']);
    }
     
    $cabecera  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
     
    if(mail($tecnico, $asunto, $contenido, $cabecera)) {
        echo "
        <!DOCTYPE html>
        <html lang='es'>
          <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../css/style_con_2.css'>
            <title>Work & Chill</title>
            <link rel='icon' type='image/png' href='../images/logo2.png'>
          </head>
          <body>
          <input type='checkbox' id='btn-nav' class='checkbox'>
          <header>
            <div class='header-container'>
              <img class='header-logo' src='../images/logo2.png'>
              <label for='btn-nav' class='btn-label'>
                <div class='header-button'></div>
              </label>
            </div>
          </header>
          <nav class='menu'>
            <ul>
              <li><a href='../index.html'>Inicio</a></li>
              <li><a href='../nosotros/nosotros.html'>Sobre Nosotros</a></li>
              <li><a href='../formacion/formacion.html'>Formación</a></li>
              <li><a href='../contacto/contactanos.html'>Contáctanos</a></li>
            </ul> 
          </nav>
          <div class='banner'>
            <div class='navbar'>
              <img src='../images/logo.png' class='logo1' alt='logo'>
              <ul>
                <li><a href='../index.html'>Inicio</a></li>
                <li><a href='../nosotros/nosotros.html'>Sobre Nosotros</a></li>
                <li><a href='../formacion/formacion.html'>Formación</a></li>
                <li><a href='../contacto/contactanos.html'>Contáctanos</a></li>
              </ul>
            </div>
            <h3>
              Tu mensaje ha sido envido y recibido con éxito.<br>
              Nos pondremos en contacto contigo con la mayor brevedad posible.<br>
              Gracias por contar con nosotros &lt3.
            </h3>
            <form name='formulario' action='contacto.php' method='post'>
              <fieldset>
                <legend>Cuestionario de consulta</legend>
                <div class='elemento'>
                  <label for='name'>Tu nombre</label>
                  <input type='text' id='name' name='nombre' placeholder='Maria José' pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class='elemento'>
                  <label for='email'>Tu E-mail</label>
                  <input type='email' id='email' name='email' placeholder='maria.jose@email.com' required>
                </div>
                <div class='elemento'>
                  <label for='department-selection'>Elige el departamento al que te quieres dirigir</label>
                  <select id='department-selection' name='departamento' required>
                    <option value=''>Selecciona departamento</option>
                    <option value='mantenimiento'>Mantenimiento</option>
                    <option value='academia'>Academia</option>
                    <option value='servicio tecnico'>Soporte técnico</option>
                  </select>
                </div>
                <div class='elemento'>
                  <label for='title'>La razón de la consulta</label>
                  <input type='text' id='title' name='asunto' required placeholder='Unable to Reset my Password' pattern=[A-Za-z0-9\s]{8,60}>
                </div>
                <div class='elemento'>
                  <label for='message'>¿Cual tu consulta?</label>
                  <textarea id='message' name='contenido' placeholder='Escribe tu consulta' required></textarea>
                </div>
                <button type='submit'>Send Message</button>
              </fieldset>
            </form>
          </body>
        </html>
        ";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>