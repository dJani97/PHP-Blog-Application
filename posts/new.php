<?php 
    include '../static/header.php';
    $showForm = true;

    function check($string) {
        /* && preg_match('/[^a-z0-9_]/i', $string) */
        if (!empty($string) && strlen($string) > 1 && preg_match('/[a-zA-Z]/', $string))  {
           return true;
        } else {
           return false;
        }
     }

    function echoIfSet(&$var) {
        echo isset($var) ? $var : '';
    }

    if(isset($_POST['submit'])) {
        $title=$_POST['title'];
        $teaser=$_POST['teaser'];
        $body=$_POST['body'];
        $author=$_POST['author'];

        if(check($title) && check($teaser) 
                && check($body) && check($author)) {
            
            $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
            $query="INSERT INTO post(author, title, teaser, body, posted_on)"
                . "VALUES('$author', '$title', '$teaser', '$body', NOW())";
            
            mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');
            mysqli_query($dbc, $query) or die('Sikertelen insert: <br>' . mysqli_error($dbc));
            mysqli_close($dbc);

            $showForm = false;
        }
    }
?>

<ol class="breadcrumb">
    <li><a href="<?= ROOT ?>">Kezdőlap</a></li>
    <li><a href="<?= ROOT ?>/posts">Bejegyzések</a></li>
    <li class="active">Új bejegyzés</li>
</ol>

<!-- SIKERTELEN ALERT -->
<div class="alert alert-danger alert-dismissible fade in hidden" id=failure_alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sikertelen mentés!</strong> Kérlek nézd át újra az űrlapot!
</div>
<!-- SIKERES ALERT -->
<div class="alert alert-success alert-dismissible fade in <?php if($showForm){echo 'hidden';} ?>" id="success_alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sikeres mentés!</strong> Hamarosan átirányítalak a főoldalra, hogy láthasd az új postot :)
</div>
<!-- FADE ALERT -->
<script src="../static/js/fade_alert.js"></script>


<?php
    if($showForm) {
        include 'form.php';
    }

    include '../static/footer.php';
?>
