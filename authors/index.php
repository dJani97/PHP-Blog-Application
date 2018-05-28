<?php 
    include '../static/header.php';
    echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>';

    $dbc=mysqli_connect(HOST, USER, PASSWD, DB) or die('Nincs adatbázis kapcsolat!');
    mysqli_query($dbc, "set names 'utf8'") or die('Nem sikerült UTF-8 módba váltani!');

    if(isset($_GET['author'])){
        $query="SELECT author FROM post WHERE author = " . $_GET['author'];
        
    } else {
        $query="SELECT author, count(author) as posts
                FROM post
                GROUP BY author
                ORDER BY count(author) DESC";
        
    }
    $list=mysqli_query($dbc, $query) or die('Sikertelen lekérdezés: <br>' . mysqli_error($dbc));
    mysqli_close($dbc);
    ?>
        <table id="author_table" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Név</th>
                <th>Bejegyzések száma</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($line=mysqli_fetch_array($list)) { ?>
                <tr>
                    <td><?= $line['author'] ?></td>
                    <td><?= $line['posts'] ?></td>
                </tr>
            <?php }
        ?>
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#author_table').DataTable( {
                "order": [[ 1, "desc" ]]
            });
        });
    </script>


<?php include '../static/footer.php';?>