<?php
    // connect to db
    $conn = mysqli_connect('localhost', 'ian', 'skipro242', 'ninja_pizza');

    // check connection
    if (!$conn) {
        echo 'connection error: ' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query and get results
    $res = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array

    $pizzas = mysqli_fetch_all($res, MYSQLI_ASSOC);

    // free result from memory and close connection
    mysqli_free_result($res);
    mysqli_close($conn);
    // print_r($pizzas);

    // print_r(explode(',', $pizzas[0]['ingredients']));
?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>

    <h4 class="center gre-text">Pizzas!</h4>

    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza) { ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                                    <li><?php echo htmlspecialchars($ing); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="#">more info</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>
    
</html>

