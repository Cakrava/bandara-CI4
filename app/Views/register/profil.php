<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>
<div class="container">
    <h1>Profil</h1>

    <form method="post" action="<?php echo site_url('home/update_profil') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $user->nama ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $user->username ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->email ?>">
        </div>
        <div class="form-group">
            <label for="image">Ganti Foto Profil</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?=$this->endSection('')?>7