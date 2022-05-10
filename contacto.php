<?php include('cabecera.inc.html') ?>
<title>Hostal Casa La Picota - Contacto</title>
</head>
<body>
<?php include('navegacion.inc.html') ?>
<main>
<br>
<h1 class="form-labels">¿Tienes alguna duda?</h1>
<br>
    <form action="confirma.php" method="post" id="form-contacto">
    <div class="grupo-label"><label for="nombre" class="form-labels">Nombre : </label></div>
    <input type="text" id="nombre" placeholder="Nombre y/o apellido" required>
    <br>
    <div class="grupo-label"><label for="telefono" class="form-labels">Telefono contacto : </label></div>
    <input type="text" id="telefono" pattern="[0-9]{11}" required>
    <br>
    <div class="grupo-label"><label for="email" class="form-labels">E-mail : </label></div>
    <input type="text" id="email" placeholder="email@serv.com">
    <br>
    <div class="grupo-label"><label for="consulta" class="form-labels">Consulta</label></div><br>
    <textarea name="consulta" id="consulta" cols="60" rows="10" required></textarea>
    <br>
    <button type="submit">Enviar consulta</button>
</form>

<br>
<p class="form-labels">Si lo prefiere puede enviarnos un email a <a href="mailto:info@casalapicota.com">info@casalapicota.com</a> </p>
<br>
<p class="form-labels">Gracias</p>

</main>
    <?php include('pie.inc.html') ?>