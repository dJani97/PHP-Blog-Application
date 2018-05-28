<?php 
    include '../static/header.php';

    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');

    if(isset($_GET['post'])){
        $query="SELECT * FROM post WHERE id = " . $_GET['post'];
        
    } else {
        $query="SELECT * FROM post ORDER BY posted_on DESC";
        $teaser=true;
    } 
    $list=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));
    mysqli_close($dbc);
?>



<ol class="breadcrumb">
    <li><a href="<?= ROOT ?>">Kezdőlap</a></li>
    <?php
        if(isset($_GET['post'])){
            echo '<li><a href="' . ROOT . '/posts">Bejegyzések</a></li>'
                . '<li class="active">' . $list->fetch_row()[2] . '</li>';
        } else {
            echo '<li class="active">Bejegyzések</li>';
        }
    ?>
</ol>

<?php
    $list->data_seek(0);

    if (mysqli_num_rows($list) != 0) { 
        while($line=mysqli_fetch_array($list)) {
            include __DIR__.'/post.php';
        }
    }
    else {
        if (isset($_GET['post'])) {
            echo "<h1>Nincs ilyen post :(</h1>";
            header('Location: ' . ROOT . '/posts/');
        }
        echo "<h1 class='text-center'>Még nincsenek postok :(</h1>";
    }
?>


<?php include '../static/footer.php';?>
