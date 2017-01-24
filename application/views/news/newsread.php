<?php
    $_SESSION['idnews'] = $news['id_news'];
?>
<div class="col-sm-8 col-md-8">
    <h2><?= $news['judul'] ?></h2>
    <p>dibaca <?= $news['view'] ?> kali</p>
    <p class="text-right huge">

        <i class="fa fa-fw fa-thumbs-o-up" id="likenews"></i>
        <span id="jumlahlike"><?= $news['like'] ?></span>
    </p>
    <p>
        <?php
            $isi = str_replace( array("\r\n", "\n", "\r"), '<br />' , $news['isi'] ) ;
            echo $isi;
        ?>
    </p>
</div>
