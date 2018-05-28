<?php 
    include '../static/header.php';
    require_once '../auth.php';

    if(isset($_GET['id'])) {
        $id=$_GET['id'];

        $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
        $query="DELETE FROM post
                WHERE id=" . $id;
        
        mysqli_query($dbc, $query) or die('Sikertelen delete: <br>' . mysqli_error($dbc));
        mysqli_close($dbc);
    }
?>

<!-- SIKERES ALERT -->
<div class="alert alert-success alert-dismissible fade in <?php if($showForm){echo 'hidden';} ?>" id="success_alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sikeres törlés!</strong> Hamarosan visszairányítalak az előző oldalra!
</div>
<!-- VISSZAKÜLD -->
<script src="../static/js/back_to_previous.js"></script>


<?php
    include '../static/footer.php';
?>
