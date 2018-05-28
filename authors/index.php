<?php 
    include '../static/header.php';
    echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>';

    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');

    if(isset($_GET['author'])){
        $query="SELECT author, count(author) as posts
                FROM post
                WHERE author = '". $_GET['author'] . "'
                GROUP BY author";
        
    } else {
        $query="SELECT author, count(author) as posts
                FROM post
                GROUP BY author
                ORDER BY count(author) DESC";
        
    }
    $list=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));
    mysqli_close($dbc);
    ?>

    <ol class="breadcrumb">
        <li><a href="<?= ROOT ?>">Kezdőlap</a></li>
        <?php
            if(isset($_GET['author'])){
                echo '<li><a href="' . ROOT . '/authors">Szerzők</a></li>'
                    . '<li class="active">' . $list->fetch_row()[0] . '</li>';
            } else {
                echo '<li class="active">Szerzők</li>';
            }
            // reset list:
            $list->data_seek(0);
        ?>
    </ol>

    <?php
    if(!isset($_GET['author']))
    {
        include 'author_table.php';
    }
    else // IF AUTHOR IS SET:
    {
        include 'author_profile.php';
    }

include '../static/footer.php';?>