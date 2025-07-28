<?php 
    require 'connection.php';
    $sql = "SELECT * FROM products";
    $run = mysqli_query($conn,$sql);
    if(!$run){
        echo "<h3>Query is not executed.</h3>";
    }
?>
<h1>All Products</h1>
<hr>
<table border="1" cellspacing="0" cellpadding="10px">
    <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Size</th>
        <th>Color</th>
    </tr>
    <?php 

        while($row = mysqli_fetch_assoc($run)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['size']."</td>";
            echo "<td>".$row['color']."</td>";
            echo "</tr>";
        }
    
    ?>
</table>
<?php 



?>