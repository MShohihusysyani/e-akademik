<?php 
    #get instance adalah untuk memanggil objek utama
    $nilai = get_instance();
    #panggil model matakuliah
    $nilai->load->model('matakuliah_model');
    #panggil model thn akad
    $nilai->load->model('tahunakademik_model');
?>

<div class="container-fluid">

    <?php
        
        if($list_nilai == null){
            $thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
            $semester = $thn->semester == 1;

            if($semester == 1){
                $tampilSemester = "Ganjil";
            }else{
                $tampilSemester = "Genap";
            }
        
    ?>

    <div class="alert alert-danger">
        Maaf, Kode Matakuliah null ditahun ajaran<?php echo $thn->tahun_akademik."(".$tampilSemester.")"; ?>
    
    </div>
    <?php echo anchor('dosen/nilai/input_nilai','<div class ="btn btn-primary">Kembali</div>')?>

    <?php
    }else{

    ?>

    <center>
        <legend><strong>Masukkan Nilai Akhir</strong></legend>

        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>: <?php echo $kode_matakuliah; ?></td>
            </tr>

            <tr>
                <td>Nama Mata Kuliah</td>
                <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>
            </tr>

            <tr>
                <td>SKS</td>
                <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
            </tr>

            <?php
                    $thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
                    $semester = $thn->semester==1;

                    if($semester == 1){
                        $tampilSemester = "Ganjil";
                    }else{
                        $tampilSemester = "Genap";
                    }


                ?>
            <tr>
                
                    <td>
                        Tahun Akademik
                        <td>: <?php echo $thn->tahun_akademik."(".$tampilSemester.")"; ?></td>
                    </td>
            </tr>
        </table>
    </center>

    <form action="<?php echo base_url('dosen/nilai/simpan_nilai')?>" method="post">

            <table class="table table-bordered table-hover table-striped mt-4">

                    <tr style="background-color:#c9d3ff; text-align:center;">
                        <th width="20px">No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai</th>
                    </tr>

                    <?php
                        $no = 1;
                        foreach($list_nilai as $row) : ?>

                        <tr class="text-center">
                            <td><?php echo $no++?></td>
                            <td><?php echo $row->nim?></td>
                            <td><?php echo $row->nama_lengkap?></td>
                            <input type="hidden"name="id_krs[]" value="<?php echo $row->id_krs?>" >
                            <td width="5%"><input type="text" name="nilai[]" class="form-control" value="<?php echo $row->nilai; ?>"></td>
                        </tr>
                    <?php endforeach;?>
            </table>
            <button type="submit" class="btn btn-primary">Proses</button>
    </form>

    <?php }?>
</div>