<div class="container-fluid">

<div class = "alert alert-warning" role="alert">
        <i class="fas fa-book"></i> Kartu Hasil Studi
    </div>

    <center class="mb-4">
        <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>

        <table>
            <tr>
                <td><strong>NIM</strong></td>
                <td>&nbsp;: <?php echo $mhs_nim?></td>
            </tr>

            <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td>&nbsp;: <?php echo $mhs_nama?></td>
            </tr>
            
            <tr>
                <td><strong>Program Studi</strong></td>
                <td>&nbsp;: <?php echo $mhs_prodi?></td>
            </tr>

            <tr>
                <td><strong>Tahun Akademik(Semester)</strong></td>
                <td>&nbsp;: <?php echo $thn_akad?></td>
            </tr>

        </table>
    </center>

    
    <!--<?php echo anchor('administrator/krs/print',' <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm">Print</i></button>')?>-->

    <table class="table table-bordered table-hover table-striped"> 
            <tr style="background-color:#c9d3ff; text-align:center;">
                <th>NO</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Bobot</th>
            </tr>
             <?php
                    $no = 1; 
                    $jumlahSks = 0;
                    $jumlahSkor=0;
                    foreach($mhs_data as $row):?>
                    <tr class="text-center">
                        <td width="20px"><?php echo $no++?></td>
                        <td><?php echo $row->kode_matakuliah; ?></td>
                        <td><?php echo $row->nama_matakuliah; ?></td>
                        <td><?php echo $row->sks; ?></td>
                        <td><?php echo $row->nilai; ?></td>
                        <td><?php echo skorNilai($row->nilai,$row->sks);?></td>
                        <?php
                            $jumlahSks+=$row->sks;
                           
                            $jumlahSkor+=skorNilai($row->nilai,$row->sks);
                        ?>
                    </tr>

                    
            <?php endforeach;?>
           
            <tr>
                <th colspan ="3" class="text-center"> Jumlah</th>
                <th class="text-center"><?php echo $jumlahSks ?></th>
                <th></th>
                <<th class="text-center"><?php echo $jumlahSkor ?></th>
            </tr>
            <tr>
                <th colspan="3" class="text-center"> Indeks Prestasi Semester</th>
                <th colspan="3" class="text-center"> <?php echo number_format($jumlahSkor/$jumlahSks,2);?></th>
            </tr>

    </table>
   

    <?php echo anchor('user/nilai','<div class="btn  btn-primary">Kembali</div>')?><br>
</div>