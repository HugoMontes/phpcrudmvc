<?php require RUTA_APP.'/view/include/header.php'; ?>
    <a href="<?php echo URL_BASE; ?>usuario" class="btn btn-light"><span class="fa fa-backward"></span> Volver</a>
    <div class="card card-body bg-light mt-5">
        <h2>Adicionar usuario</h2>
        <form action="<?php echo URL_BASE; ?>usuario/adicionar" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:<sup>*</sup></label>
                <input type="text" name="nombre" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="email">Email:<sup>*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:<sup>*</sup></label>
                <input type="text" name="telefono" class="form-control form-control-lg">
            </div>
            <input type="submit" class="btn btn-success" value="Adicionar">
        </form>
    </div>    
<?php require RUTA_APP.'/view/include/footer.php'; ?>