<?php require RUTA_APP.'/view/include/header.php'; ?>
    <h2><?php echo $data['title']; ?></h2>
    <a href="<?php echo URL_BASE;?>usuario/adicionar" class="btn btn-primary">Nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['usuarios'] as $usuario): ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->email; ?></td>
                <td><?php echo $usuario->telefono; ?></td>
                <td>
                    <a href="<?php echo URL_BASE;?>usuario/editar/<?php echo $usuario->id; ?>">Editar</a>
                    <a href="<?php echo URL_BASE;?>usuario/eliminar/<?php echo $usuario->id; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>    
<?php require RUTA_APP.'/view/include/footer.php'; ?>