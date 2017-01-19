<div class="row">
    <div class="col-lg-6">

        <form role="form" action="<?= base_url()?>news/submit" method="post">

            <label>Judul:</label>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <input type="text" class="form-control" placeholder="Judul" name="judul" required="required">
            </div>

            <label>Isi Berita:</label>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <textarea class="form-control" name="isinews" rows='10' cols="80">-- Isi Berita --</textarea>
            </div>

            <label>File Foto:</label>
            <div class="form-group input-group">
                <span class="input-group-addon"></span>
                <input type="file" class="form-control" name="foto">
            </div>

            <input type="submit" class="btn btn-default" value="Submit News">
        </form>

    </div>
</div>
