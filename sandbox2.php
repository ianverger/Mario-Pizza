<?php
    include('ninjas.php');
    
    echo 'ninnj end';

    $name = 'Link';
    $age = 32;

    // define('FOOD', 'sushi');
    $string1 = 'my email is ';
    $string2 = 'ian.verger@gmail.com';

    // echo $name[0];
    // echo strlen($name);
    // echo strtoupper($name);
    // echo str_replace('L', 'w', $name);

    // $radius = 25;
    // $pi = 3.14;

    // echo floor($pi);
    // echo ceil($pi);

    $people1 = ['Zelda', 'Tingle', 'Darunia', $name];
    $people2 = array('barbie', 'ken');
    $ages = [20, 24, 145, $age];
    // echo $people1[3];
    // echo $people2[1];
    // print_r($ages);
    $ages[1] = 25;
    $ages[] = 60;
    array_push($ages, 666);
    // print_r($ages);
    // echo count($ages);
    // print_r(array_merge($people1, $people2));

    $ninjas1 = ['shinji'=>14, 'rei'=>'14', 'asuka'=>15, 'misato'=>29];
    // echo $ninjas1['misato'];
    // print_r($ninjas1);
    $ninjas2 = array('toad'=>'first', 'boo'=>'second', 'waluigi'=>'fourth');
    $ninjas2['bowser'] = 'thurd';
    // print_r($ninjas2);
    // echo count($ninjas2);
    // $full_ninj = array_merge($ninjas1, $ninjas2);
    // print_r($full_ninj);

    $blogs = [
        ['title'=> 'mario party', 'author' => 'luigi', 'content' => 'sfwerwe', 'likes' => 30], 
        ['title'=> 'mario kart cheats', 'author' => 'toad', 'content' => 'xxxx', 'likes' => 25],
        ['title'=> 'zelda hidden chests', 'author' => 'link', 'content' => 'tttt', 'likes' => 50],
    ];

    // echo $blogs[2]['author'];
    // echo count($blogs);
    // array_pop($blogs);
    $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>69];
    // print_r($blogs);

    // $price = 20;
    // $price = 30;
    // if ($price < 30) {
    //     echo 'it is';
    // } else if ($price == 30) {
    //     echo 'tis\' 30';
    // } else {
    //     echo 'it aint';
    // }

    // foreach ($blogs as $blog) {
        
    //     if ($blog['likes'] == 50) {
    //         continue;
    //     }
    //     echo $blog['title'].'<br>';
    // }

    function sayHello($namez) {
        echo "Good Morning, $namez";
    }
    // sayHello('yoshi');
    // sayHello('mario');

    function formatProduct($product) {
        return "{$product['name']} costs \${$product['price']} to buy <br>";
    }

    $bloop = formatProduct(['name'=>'gold star', 'price'=> 20]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>
    <!-- <h1><?php echo $string1.$string2; ?></h1>
    <p><?php echo "Hey, my name is $name"; ?></p>
    <p><?php echo "the ninja screamed \"okurrr\""; ?></p> -->
    <!-- <?php foreach($blogs as $blog){ ?>
        <h2><?php echo $blog['title']; ?></h2>
        <h3><?php echo $blog['author']; ?></h3>
        <p><?php echo $blog['content']; ?></p>
        <p><?php echo $blog['likes']; ?></p>

    <?php } ?> -->
    <h2><?php echo $bloop ?></h2>
</body>
</html>