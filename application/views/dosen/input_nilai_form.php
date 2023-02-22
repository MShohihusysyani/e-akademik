<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Input Nilai
    </div>

    <form action="<?php echo base_url('dosen/nilai/input_nilai_aksi')?>" method="post">
    <div class="form-group">
            <label>Tahun Akademik / Semester</label>
                <?php
                    $query = $this->db->query('SELECT id_thn_akad, semester, CONCAT(tahun_akademik, "/") 
                                                AS ta_semester FROM tahun_akademik');

                    $dropdowns = $query->result();

                    //untuk menampilkan data
                    foreach($dropdowns as $dropdown){

                        if($dropdown->semester == 1){
                            $tampilSemester = "Ganjil";
                        }else{
                            $tampilSemester = "Genap";
                        }
                        $dropDownList[$dropdown->id_thn_akad ] = $dropdown->ta_semester."".$tampilSemester;


                    }

                    echo form_dropdown('id_thn_akad', $dropDownList,'','class = "form-control"');
                ?>
        </div>

        <div class="form-group">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" Placeholder ="Masukkan Kode Matakuliah" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
</form>
</div>