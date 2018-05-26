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
    $lista=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés!\n' . mysqli_error($dbc));
?>



<ol class="breadcrumb">
    <li><a href="<?= ROOT ?>">Home</a></li>
    <?php
        if(isset($_GET['post'])){
            echo '<li><a href="' . ROOT . '/posts">Bejegyzsek</a></li>'
                . '<li class="active">' . $lista->fetch_row()[2] . '</li>';
        } else {
            echo '<li class="active">Bejegyzsek</li>';
        }
    ?>
</ol>

<?php
/*
    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');

    $query="SELECT * FROM post";
    $lista=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés!\n' . mysqli_error($dbc));
*/
    $lista->data_seek(0);

    while($sor=mysqli_fetch_array($lista)) {
        include __DIR__.'/post.php';
    }
    mysqli_close($dbc);
?>


<?php include '../static/footer.php';?>