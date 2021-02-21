<?php
    use Models\Product;

    $addproduct = new Product($_POST['product'], "", $_POST['code'], "", $_POST['quantity']);
    $_SESSION['order'] = null;
    array_push($_SESSION, $addproduct);
    $orderList = $_SESSION['order'];
    var_dump($orderList);
?>

<div>
    <table>
        <h2> Listado del pedido</h2>
        <thead>
            <th> Product </th>
            <th> Code </th>
            <th> Quantity</th>
            <th> Options</th>
        </thead>

        <tbody>
            <?php foreach($orderList as $product){?>
                    <tr>
                        <td> <?php echo $product->getProduct(); ?></td>
                        <td> <?php echo $product->getCode(); ?></td>
                        <td> <?php echo $_POST['quantity']; ?></td>
                        <td>
                            <form action="<?php echo FRONT_ROOT?>/Order/Delete">
                                <input type="hidden" name="ProductDelete" value="<?php echo $product->getCode(); ?>">
                                <button type="submit"> Eliminar </button>
                            </form>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>