
   
<div class="container-fluid">
<div class = "alert alert-warning" role="alert">
        <i class="fas fa-id-card-alt"></i> Mahasiswa
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <?php echo anchor('administrator/mahasiswa/tambah_mahasiswa',' <button class="btn btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>

    <table class="table table-striped table-bordered table-hover" id="example1">
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Program Studi</th>
            <th colspan="3">Aksi</th>
    </tr>
        
    <?php
            $no = 1; 
            foreach($mahasiswa as $mhs):?>
            <tr class="text-center">
                <td width="20px"><?php echo $no++?></td>
                <td><?php echo $mhs->nama_lengkap?></td>
                <td><?php echo $mhs->jenis_kelamin?></td>
                <td><?php echo $mhs->alamat?></td>
                <td><?php echo $mhs->email?></td>
                <td><?php echo $mhs->nama_prodi?></td>
                
                <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->id,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/delete/'.$mhs->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
            </tr>
            <?php endforeach;?>
    </table>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#example1").DataTable({
          dom: "Bfrtip",
          buttons: ["copy", "csv", "excel", "pdf", "print"],
        });
      });
    </script>
   

</div>