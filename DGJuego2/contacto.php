<?php
include('validar.php');

if ($_POST) {
    validarContacto($_POST['nombre'], $_POST['email'], $_POST['telefono']);
};

$nombre = '';
$email = '';
$telefono = '';
if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
}

?>
<?php
function titulo()
{
    echo "Burn Quiz | Contacto";
}
?>

<?php include("header.php"); ?>
<div class="container-fluid fondoama">
    <p class="descripcion" id="contacto">CONTACTANOS</p>
    <main class="row">
        <div id="left" class="container py-5">
            <form action="contacto.php" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" size=30 value="<?= $nombre ?>">

                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" size=30 value="<?= $email ?>">

                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput3">Telefono</label>
                    <input type="text" class="form-control" id="formGroupExampleInput3" name="telefono" size=30 value="<?= $telefono ?>">

                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2"></label>
                    <textarea name="comentario" id="" cols="90" rows="20"></textarea>
                </div>
                <button class="btn btn-dark" type="submit">Enviar</button>
            </form>

        </div>

        <div class="container py-5">
            <section>
                <iframe class="container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.282049390131!2d-60.65268828599803!3d-32.94356205604301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab3f847dc269%3A0xa8a707d0dded8c7e!2sC%C3%B3rdoba%202035%2C%20S2000AXG%20Rosario%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1569074935124!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </section>
        </div>
    </main>
    <?php include("footer.php"); ?>

    </body>

    </html>