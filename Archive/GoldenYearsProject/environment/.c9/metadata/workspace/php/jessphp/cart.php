{"changed":true,"filter":false,"title":"cart.php","tooltip":"/php/jessphp/cart.php","value":"<?php \n  \n    if(isset($_POST['submit'])){ \n          \n        foreach($_POST['quantity'] as $key => $val) { \n            if($val==0) { \n                unset($_SESSION['cart'][$key]); \n            }else{ \n                $_SESSION['cart'][$key]['quantity']=$val; \n            } \n        } \n          \n    } \n  \n?> \n  \n<h1>View cart</h1> \n<a href=\"index.php?page=products\">Go back to the products page please.</a> \n<form method=\"post\" action=\"index.php?page=cart\"> \n      \n    <table> \n          \n        <tr> \n            <th>Disco Night</th> \n            <th>Quantity</th> \n            <th>Price</th> \n            <th>Items Price</th> \n        </tr> \n          \n\n                    <tr> \n                        <td colspan=\"4\">Total Price: <?php echo $totalprice ?></td> \n                    </tr> \n          \n    </table> \n    <br /> \n    <button type=\"submit\" name=\"submit\">Update Cart</button> \n</form> \n<br /> \n<span>To remove an item set its quantity to 0 if you change your mind. </span>\n<span> Happy shopping </span>","undoManager":{"mark":-2,"position":17,"stack":[[{"start":{"row":29,"column":0},"end":{"row":53,"column":11},"action":"remove","lines":["        <?php ","          ","            $sql=\"SELECT * FROM products WHERE id_product IN (\"; ","                      ","                    foreach($_SESSION['cart'] as $id => $value) { ","                        $sql.=$id.\",\"; ","                    } ","                      ","                    $sql=substr($sql, 0, -1).\") ORDER BY name ASC\"; ","                    $query=mysql_query($sql); ","                    $totalprice=0; ","                    while($row=mysql_fetch_array($query)){ ","                        $subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price']; ","                        $totalprice+=$subtotal; ","                    ?> ","                        <tr> ","                            <td><?php echo $row['name'] ?></td> ","                            <td><input type=\"text\" name=\"quantity[<?php echo $row['id_product'] ?>]\" size=\"5\" value=\"<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>\" /></td> ","                            <td><?php echo $row['price'] ?>$</td> ","                            <td><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?>$</td> ","                        </tr> ","                    <?php ","                          ","                    } ","        ?> "],"id":2,"ignore":true}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"remove","lines":["e"],"id":3}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"remove","lines":["m"],"id":4}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":["a"],"id":5}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"remove","lines":["N"],"id":6}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["D"],"id":7}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["i"],"id":8}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["s"],"id":9}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["c"],"id":10}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["i"],"id":11}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"remove","lines":["i"],"id":12}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["o"],"id":13}],[{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":[" "],"id":14}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["N"],"id":15}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["i"],"id":16}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["g"],"id":17}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["h"],"id":18}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["t"],"id":19}]]},"ace":{"folds":[],"scrolltop":208.5,"scrollleft":0,"selection":{"start":{"row":40,"column":29},"end":{"row":40,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/php"}},"timestamp":1511436199788}