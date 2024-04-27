<?php include("header.php") ?>

<section class="contact-form" style="display: flex; align-content:center; flex-flow:column wrap;">
        <h2> Contacto</h2>
        <form action="enviar_consulta.php" method="post">
                <div style="display:flex;flex-flow:row wrap;justify-content: space-between;">
                    <p style="display: flex;flex-flow: column;flex-grow:1;margin-right:5px;">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre">
                    </p>
                    <p style="display: flex;flex-flow: column;flex-grow:1.5;">
                        <label for="email">Correo</label>
                        <input type="email" name="email">
                    </p>
                </div>
            <label for="mensaje">Mensaje</label>
            <p class="mensaje"><textarea name="mensaje" id="" cols="58" rows="10"></textarea></p>
            <input class="submit-btn" type="submit" value="Enviar consulta" style="font-size: 1.5rem;background-color:transparent;color:inherit;">
        </form>
</section>
<?php if(isset($_GET['ok'])){
    echo "<h3>Mensaje enviado correctamente.</h3>";
} ?>
<?php include("footer.php") ?>