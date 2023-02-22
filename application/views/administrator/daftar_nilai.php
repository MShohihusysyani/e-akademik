<?php
$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

#panggil get by id dari krs model
$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;
$id_thn_akad = $krs->id_thn_akad;
?>

<div class="container-fluid">
    <div class="alert alert-warning" >
        <i class = "fas fa-book"> Daftar Nilai Mahasiswa</i>
    </div>

    <center>
        <legend><strong>Daftar Nilai Mahasiswa</strong></legend>
        <table>
            <tr>
                <td>Kode Matakuliah</td>
                <td>: <?php echo $kode_matakuliah;?></td>
            </tr>

            <tr>
                <td>Nama Matakuliah</td>
                <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah;?></td>
            </tr>

            <tr>
                <td>SKS</td>
                <td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks;?></td>
            </tr>

            <?php

                $thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
                $semester = $thn->semester==1;

                if($semester){

                    $tampilSemester = "Ganjil";
                }else{

                    $tampilSemester = "Genap";
                }
            ?>
            <tr>
               <td>
                Tahun Akademik(Semester)
               </td>
               <td>
                    : <?php echo $thn->tahun_akademik."(".$tampilSemester.")" ?>
               </td>
            </tr>
        </table>
    </center>

    <table class="table table-bordered table-hover table-striped mt-3">
                <tr style="background-color:#c9d3ff; text-align:center;">
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th width="5%">Nilai</th>
                </tr>

                <?php
                    $no = 1;
                    for($i=0; $i<sizeof($id_krs); $i++){

                    
                ?>

                <tr class="text-center">
                    <td><?php echo $no++?></td>
                    <?php $nim = $nilai->krs_model->get_by_id($id_krs[$i])->nim?>
                    <td><?php echo $nim;?></td>
                    <td><?php echo $nilai->mahasiswa_model->get_by_id($nim)->nama_lengkap;?></td>
                    <td><?php echo $nilai->krs_model->get_by_id($id_krs[$i])->nilai?></td>
                </tr>
                <?php }?>
    </table>
    <?php echo anchor('administrator/nilai/input_nilai_aksi','<div class="btn  btn-primary">Kembali</div>')?>
</div>