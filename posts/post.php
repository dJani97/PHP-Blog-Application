<!--
    PHP paraméterek:
    $teaser = true, ha a teljes post helyett csak a teaser-t akarjuk megjeleníteni
    $teaser = true, ha "Friss!" postról van szó
    $line -> a post tartalma
-->

<blockquote class="blockquote">
    <header>   
        <a href="<?= ROOT . '/posts/delete.php?id=' . $line['id'] ?>"
           class="btn btn-danger btn pull-right" role="button">
          <i class="glyphicon glyphicon-trash"></i> Törlés
        </a>         
        <h2> <?= $line['title'] ?>
            <?php if (isset($fresh) && $fresh) {
                echo '<span class="label label-default">Friss!</span>';
            }?>
        </h2>
        

        <p> <small> <?= $line['posted_on'] ?> </small> </p>
    </header>
    <section>
        <?php
            if (isset($teaser) && $teaser) {
                echo $line['teaser']
                    . '<br>'
                    . '<a href="' . ROOT . '/posts?post=' . $line['id'] . '">Olvasd tovább &gt&gt</a>';
            }
            else {
                echo $line['body'];
            }
        ?>
    </section>
    
    <br><br>

    <footer class="blockquote-footer">
        Szerző: 
        <a 
            href="<?= ROOT . '/authors?author=' . $line['author'] ?>">
            <?= $line['author'] ?> 
        </a>
    </footer>
</blockquote>
<hr/>