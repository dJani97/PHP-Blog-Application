<!--
    PHP paraméterek:
    $teaser = true, ha a teljes post helyett csak a teaser-t akarjuk megjeleníteni
    $teaser = true, ha "Friss!" postról van szó
-->

<blockquote class="blockquote">
    <header>            
        <h2> <?= $sor['title'] ?>
            <?php if (isset($fresh) && $fresh) {
                echo '<span class="label label-default">Friss!</span>';
            }?>
        </h2>
        <p> <small> <?= $sor['posted_on'] ?> </small> </p>
    </header>
    <section>
        <?php
            if (isset($teaser) && $teaser) {
                echo $sor['teaser']
                    . '<br>'
                    . '<a href="' . ROOT . '/posts?post=' . $sor['id'] . '">Olvasd tovább &gt&gt</a>';
            }
            else {
                echo $sor['body'];
            }
        ?>
    </section>
    
    <br><br>

    <footer class="blockquote-footer">
        Szerző: 
        <a>
            <?= $sor['author'] ?> 
        </a>
    </footer>
</blockquote>
<hr/>