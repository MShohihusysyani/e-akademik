<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> DASHBOARD
    </div>

    <div class = "alert alert-success" role="alert">
       <h4 class="alert-heading">Selamat Datang</h4>
       <p>Selamat Datang <strong> <?php echo $username?></strong> di E-Akademik Universitas Harapan Bunda sebagai <strong><?php echo $level?></strong></p>
       <hr>
       <button type="button" class="btn  btn-info" data-toggle="modal" data-target="#exampleModal"> <i class="fa-solid fa-gear"></i>Control Panel </button>
    </div>

    <!--Modal--> 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-lablledby="exampleModelLabeL" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Control Panel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                        <span aria-hidden="true">&time; </span>
                    </button>
                </div>
                <div class="modal-body">
                 <div class="row">

                    <div class="col-md-3 text-success text-center">
                        <a href="<?php echo base_url('user/krs') ?> "> <p class="nav-link small text-success">KRS</p></a>
                        <i class="fas fa-3x fa-book"></i>
                    </div>

                    <div class="col-md-3 text-success text-center">
                        <a href="<?php echo base_url('user/nilai') ?> "> <p class="nav-link small text-success">KHS</p></a>
                        <i class="fas fa-3x fa-file-alt"></i>
                    </div>

                    <div class="col-md-3 text-success text-center">
                        <a href="<?php echo base_url('user/transkrip_nilai') ?> "> <p class="nav-link small text-success">TRANSKRIP NILAI</p></a>
                        <i class="fas fa-3x fa-print"></i>
                    </div>
                 </div>
</div>

                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Close
                </div>
            </div>
        </div>
    </div>
</div>



            <!-- End of Footer -->

         <!-- </div> -->
        <!-- End of Content Wrapper -->

    <!--</div> -->
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin Akan Logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('user/auth/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 3  2022</span>
                    </div>
                </div>
            </footer>

   