<div>
    <table>
        <h2> Productos registrados en el Sistema </h2>
        <thead>
            <th> Product </th>
            <th> Code </th>
            <th> Quantity </th>
            <th> Action </th>
        </thead>

        <tbody>
            <?php foreach($products as $product){ ?>  

                <tr>
                    <td> <?php echo $product->getProduct(); ?></td>
                    <td> <?php echo $product->getCode(); ?></td>              
                
                    <td>
                        <form action="<?php echo FRONT_ROOT?>Order/Add" method="POST">
                            <input type="hidden" name="product" id="product"  value="<?php echo $product->getProduct(); ?>">
                            <input type="hidden" name="code" id="code" value="<?php echo $product->getCode(); ?>" >
                            <input type="number" name="quantity" id="quantity" value="1" min="1">
                            <td> <button type="submit"> Agregar </button> </td>
                        </form>        
                    </td>
                </tr>
            <?php } ?>    
        </tbody>
    </table>

    <div>
        <form action="<?php echo FRONT_ROOT?>Order/List" method="POST">
            <button class="button-form" type="submit" > Confirm order </button>            
        </form>            
    </div>
</div>