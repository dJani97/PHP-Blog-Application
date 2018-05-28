<?php 
    include '../static/header.php';

    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');

    if(isset($_GET['author'])){
        $query="SELECT * FROM post WHERE id = " . $_GET['post'];
        
    } else {
        $query="SELECT * FROM post ORDER BY posted_on DESC";
        $teaser=true;
    } 
    $lista=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));
?>


<?php include '../static/footer.php';?>
