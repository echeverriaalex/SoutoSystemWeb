<div>
    <form class="form-product-register" action="<?php echo FRONT_ROOT?>Products/Add" method="POST">             
        <h2> Agregar un nuevo producto</h2>
        <div class="div-product-register"> 
            <!-- <label class="label" for="Producto"> Producto: </label> -->
            <input class="input" type="text" id="Producto" name="Producto" placeholder="Producto" required>
        </div>

        <div class="div-product-register">
            <!-- <label class="label" for="Stock"> Stock: </label> -->          
                <input class="input" type="number" id="Stock" name="Stock" placeholder="Stock" required> 
        </div>

        <div class="div-product-register"> 
            <!-- <label class="label" for="Codigo"> Codigo: </label> -->
            <input class="input" type="number" id="Codigo" name="Codigo" placeholder="Codigo" required>
        </div>

        <div class="div-product-register"> 
            <!-- <label class="label" for="Precio"> Precio por unidad: $ </label>  -->
           
            <input class="input" type="number" id="Precio" name="Precio" placeholder="Precio" required>
        </div>
           
        <div class="div-product-register"> 
            <button class="button-form" type="submit"> Agregar Producto </button> 
        </div>                    
    </form>
</div>