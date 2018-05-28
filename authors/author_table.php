<!--
    PHP paraméterek:
    $line -> [author, postok száma]
-->

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
                <td>
                    <a href="<?= ROOT . '/authors?author=' . $line['author'] ?>">
                        <?= $line['author'] ?> 
                    </a>
                </td>
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