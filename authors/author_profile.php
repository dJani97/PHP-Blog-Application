<!--
    PHP paraméterek:
    $line -> author neve
-->

<?php

    $author_details=$list->fetch_row();
    $author_name=$author_details[0];
    $post_count=$author_details[1];

    if($author_name != "") {
        $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
        mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');
    
        $teaser=true;
        $query="SELECT * 
                FROM post 
                WHERE author = '". $_GET['author'] . "'
                ORDER BY posted_on DESC";
        
        $list=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));
        mysqli_close($dbc);
?>

<article>
    <header>
        <h1>Üdvözöllek <strong><?= $author_name ?></strong> profilján!</h1>
        <p>Bejegyzések száma: <?= $post_count ?></p>
    </header>
    <hr/>
</article>

<article>
    <header>
        <h3>Szerző bejegyzései:</h3>
    </header>
    <section>
        <?php
            while($line=mysqli_fetch_array($list)) {
                include __DIR__.'/../posts/post.php';
            }
        ?>
    </section>
    <hr/>
</article>

<?php
} else {
    echo "<h1>Nincs ilyen szerző :(</h1>";
    header('Location: ' . ROOT . '/authors/');
}
?>