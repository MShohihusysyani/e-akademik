<div class="container-fluid">
    
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-book"></i> Update KRS
    </div>

    <form method="post"  action="<?php echo base_url('user/krs/update_aksi')?>">

        <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="hidden" name="id_thn_akad" class="form-control" value="<?php echo $id_thn_akad; ?>">
            <input type="hidden" name="id_krs" class="form-control" value="<?php echo $id_krs; ?>">
            <input type="text" name="thn_akad_smt" class="form-control" value="<?php echo $thn_akad_smt. '/'.$semester; ?>" readonly/ >
        </div>

        <div class="form-group">
            <label>NIM Mahasiswa</label>
            <input type="text" name="nim" class="form-control" value="<?php echo $nim; ?>" readonly/>
        </div>

        <!--mengambil data mata kuliah dari table matakuliah-->
        <div class="form-group">
            <label>Mata Kuliah</label>
            <?php 
                $query = $this->db->query('SELECT kode_matakuliah,nama_matakuliah FROM matakuliah');

                //menampilkan data mata kuliah dalam bentuk dropdown
                $dropdowns = $query->result();
                //foreach untuk menampilkan data
                foreach($dropdowns as $dropdown){
                    $dropDownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
                }
                echo form_dropdown('kode_matakuliah', $dropDownList, $kode_matakuliah, 'class="form-control" id="kode_matakuliah"');            
                ?>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo anchor('user/krs/krs_aksi','<div class="btn btn-danger"> Cancel</div>') ?>
    </form>
</div>