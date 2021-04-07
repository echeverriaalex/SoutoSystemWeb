 <?php
    require_once(VIEWS_PATH."nav.php");
 ?>
    <div>
        <h2> Listado de Productos </h2>
        <table class="table-display-products">
            <thead>
                <th> Producto </th>  
                <th> Precio por unidad </th>
                <th> Codigo </th>
                <th> Stock </th>
                <th> Opciones </th>
            </thead>
                
            <tbody>    
                <?php 
                    if(sizeof($products) > 0){                        
                        foreach($products as $product){ ?>
                        <tr>
                            <td> <?php echo $product->getDescription(); ?>  </td>
                            <td> <?php echo "$ ". $product->getPrice(); ?>  </td>
                            <td> <?php echo $product->getCode(); ?>  </td>
                            <td> <?php echo $product->getStock(); ?>  </td>
                            <td>
                                <form method="POST" action="<?php echo FRONT_ROOT?>Products/Delete">
                                    <input type="hidden" name="productDescription" value="<?php echo $product->getDescription();?>">
                                    <button type="submit"> Borrar </button>
                                </form>
                                
                                <form method="POST", action="<?php echo FRONT_ROOT?>Products/ShowEditView">
                                    <input type="hidden" name="productDescription" value="<?php echo $product->getDescription();?>">
                                    <button type="submit"> Editar </button>
                                </form>                           
                            </td>
                        </tr>
                <?php   } 
                    }
                ?>  
            </tbody>
        </table>
    </div>