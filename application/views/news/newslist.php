<div class="col-sm-8 col-md-8">
<?php
    foreach ( $news as $berita ) {
        if( substr( $berita['tanggal'], 0, 10 ) == date('Y-m-d') ){
            $panel = 'panel-danger';
        } else {
            $panel = 'panel-info';
        }
?>
        <div class="panel <?=$panel?>">
            <div class="panel-heading">
                <h4><?= $berita['judul'] ?></h4>
                <?= $berita['namalengkap'] ." - ". $berita['tanggal']  ?>
            </div>
            <div class="panel-body">
                <?= $this->news_model->foreword($berita['isi'])?><br />
                <a href="<?=base_url()."news/".$berita['id_news']?>">
                    <button>Baca selengkapnya</button>
                </a>
            </div>
        </div>
<?php
    }
?>
</div>
