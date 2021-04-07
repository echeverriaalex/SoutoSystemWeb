<div>
    <form action="<?php echo FRONT_ROOT?>Products/Edit" method="POST">
        <h1> Editar Producto </h1>

        <div>
            <input name="currentDescription" type="hidden" value="<?php echo $product->getDescription();?>">
            <input name="Description" type="text" placeholder="Descripcion" value="<?php echo $product->getDescription(); ?>">
        </div>

        <div>
            <input name="Stock" type="number" placeholder="Stock" value="<?php echo $product->getStock(); ?>">
        </div>

        <div>
            <input name="Code" type="number" placeholder="Codigo" value="<?php echo $product->getCode(); ?>">
        </div>

        <div>
            <input name="Price" type="number" placeholder="Precio" value="<?php echo $product->getPrice(); ?>">
        </div>

        <button type="button"> Guardar Cambios </button>
    </form>
</div>