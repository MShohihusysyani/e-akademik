<div class="container-fluid">

`   <div class = "alert alert-warning" role="alert">
        <i class="fas fa-university"></i> Input User
    </div>

    <form action="<?php echo base_url('administrator/user/tambah_user_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" class="form-control">

            <?php echo form_error('username','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Masukkan Password" class="form-control">

            <?php echo form_error('password','<div class="text-danger small" ml-3>')?>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" class="form-control">

            <?php echo form_error('email','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Level</label>
            <select name="level" class="form-control">

                <?php

                    if($level == 'admin'){
                    
                ?>
                <option value="admin" Selected>Admin</option>
                <option value="users">Mahasiswa</option>
                <option value="dosen">Dosen</option>
                <?php
                    }elseif($level == 'users'){
                    
                ?>
                 <option value="admin">Admin</option>
                <option value="users" Selected>Mahasiswa</option>
                <option value="dosen">Dosen</option>

                <?php
                    }elseif($level == 'dosen'){
                ?>
                <option value="admin">Admin</option>
                <option value="users">Mahasiswa</option>
                <option value="dosen" selected>Dosen</option>

                <?php 
                    }else{
                ?>
                <option value="admin">Admin</option>
                <option value="users">Mahasiswa</option>
                <option value="dosen">Dosen</option>

                <?php } ?>
            </select>
            <?php echo form_error('level','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Blokir</label>
            <select name="blokir" class="form-control">

                <?php

                    if($blokir == 'Y'){
                    
                ?>
                <option value="Y" Selected>Ya</option>
                <option value="N">Tidak</option>
                <?php
                    }elseif($blokir == 'N'){
                    
                ?>
                  <option value="Y">Ya</option>
                <option value="N">Tidak</option>

                <?php 
                    }else{
                ?>
                 <option value="Y">Ya</option>
                <option value="N">Tidak</option>

                <?php } ?>
            </select>
            <?php echo form_error('blokir','<div class="text-danger small" ml-3>')?>
        </div>

        

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('administrator/user','<div class="btn btn-primary">Kembali</div>')?>
    </form>

</div>