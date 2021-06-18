<div class="container d-flex flex-row justify-content-center align-items-center mb-5 mt-5" style="padding-top: 50px;">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h2 class=" mb-5" >Donation to Save Panda</h2>
            <p>Dengan berdonasi anda dapat membantu dalam melindungi spesies yang terancam dan habitatnya.<br> 
            Dukungan anda membantu kami dalam mengelola konservasi global terutama spesies panda.<br>
            Mulai komitmen anda sekarang untuk menyelamatkan fauna yang terancam seperti panda dengan cara berdonasi
            sekarang juga. </p>
        </div>
        <img src="img/donate_panda_img.jpg" alt="">
    </div>

    <div class="row">
        <div class="container">
            <?php Flasher::flash();?>
        </div>
    </div>
    
    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <h3>Informasi Pendonor</h3>
            <form action="<?= BASEURL; ?>/donate/input_donation" method="POST"">
                <div class="d-flex flex-row">
                    <div style="width: 50%; padding-right: 2%" class="mr-3" >
                        <div class="form-group">
                            <label for="Nama Depan">Nama Depan</label>
                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="Nama Belakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="Negara">Negara</label>
                            <input type="text" class="form-control" id="negara" name="negara" required>
                        </div>
                    </div>
                    <div style="width: 50%;">
                        <div class="form-group">
                            <label for="Kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="Kode Pos">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h3><br>Informasi Pembayaran</h3>
                    <div class="d-flex flex-column">
                            <label for="bank">Pilih Metode Pembayaran</label>
                            <div class="d-flex flex-row align-items-center">
                                <input type="radio" id="BRI" name="bank" value="BRI">
                                <label class="ml-2 mr-4" for="BRI">BRI <br></label><br>
                                <input type="radio" id="BCA" name="bank" value="BCA">
                                <label class="ml-2 mr-4" for="BCA">BCA <br></label><br>
                                <input type="radio" id="Mandiri" name="bank" value="Mandiri">
                                <label class="ml-2 mr-4" for="Mandiri">Mandiri <br></label>
                            </div>
                            <div style="width: 500px;">
                                <div class="form-group">
                                    <label for="Nomor Rekening">Nomor Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" required>
                                </div>
                                <div class="form-group"><br>
                                    <label for="Jumlah Donasi">Jumlah Donasi</label>
                                    <input type="text" class="form-control" id="jumlah_donasi" name="jumlah_donasi" required>
                                </div><br>
                                <button type="submit" class="btn btn-primary">Send It</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                

            </form>
            </div>
    </div>
    <!-- <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $(".scrolltop:hidden")
          .stop(true, true)
          .fadeIn();
      } else {
        $(".scrolltop")
          .stop(true, true)
          .fadeOut();
      }

      if ($(this).scrollTop() > 230) {
        $(".tm-nav-section").addClass("sticky");
      } else {
        $(".tm-nav-section").removeClass("sticky");
      }
    });
    </script> -->
    
</body>