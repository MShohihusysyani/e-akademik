<div class="container-fluid">
    
    <center>
        <legend><strong>TRANSKRIP NILAI</strong></legend>

        <table>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $nim;?></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>: <?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>: <?php echo $prodi;?></td>
            </tr>
        </table>
    </center>

    <table class="table table-bordered table-hover table-striped mt-3">
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Kode </th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Nilai</th>
            <th>Total Bobot</th>
        </tr>

        <?php
            $no = 1;
            $jSks=0;
            $jSkor=0;

            foreach($transkrip as $tr) :?>

                <tr class="text-center">
                    <td width="3%"><?php echo $no++?></td>
                    <td><?php echo $tr->kode_matakuliah;?></td>
                    <td><?php echo $tr->nama_matakuliah;?></td>
                    <td><?php echo $tr->sks;?></td>
                    <td><?php echo $tr->nilai;?></td>
                    <td><?php echo skorNilai($tr->nilai,$tr->sks);?></td>

                    <?php 

                        $jSks+=$tr->sks;
                        $jSkor+=skorNilai($tr->nilai,$tr->sks);
                    ?>
                </tr>

            <?php endforeach;?>

            <tr>
                <th colspan="3" class="text-right">Jumlah</th>
                <th class="text-center"><?php echo $jSks ?></th>
                <th></th>
                <th class="text-center"><?php echo $jSkor ?></th>
            </tr>
            <tr>
                <th colspan="3" class="text-right"> Indeks Prestasi Kumulatif</th>
                <th colspan="3" class="text-center"><?php echo number_format($jSkor/$jSks,2);?> </th>
            </tr>
            
    </table>
</div>