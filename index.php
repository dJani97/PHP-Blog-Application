<?php require 'static/header.php';?>

<h1> Üdvözöllek a blog oldalamon! </h1>    

<h3> Legutóbbi poszt: </h3>

<?php
    
    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');
    
    $query="SELECT * FROM post ORDER BY posted_on DESC LIMIT 1";    
    $lista=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));

    $fresh=true;
    $teaser=true;

    while($sor=mysqli_fetch_array($lista)) {
        include __DIR__.'/posts/post.php';
    }
    mysqli_close($dbc);

?>

<?php require 'static/footer.php';?>
