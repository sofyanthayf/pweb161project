<div class="col-sm-8 col-md-8">
    <h2><?= $news['judul'] ?></h2>
    <p>
        <?php
            $isi = str_replace( array("\r\n", "\n", "\r"), '<br />' , $news['isi'] ) ;
            echo $isi;
        ?>
    </p>
</div>
