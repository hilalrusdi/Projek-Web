<section class="container tm-contact-section" id="contact">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-12 tm-contact-left">
          <div class="tm-contact-form-container ml-auto mr-0">
            <header>
              <h2 class="tm-contact-header">Contact Us</h2>
            </header>
            <form action="<?= BASEURL; ?>/contact/input_comment" class="tm-contact-form" method="POST">
              <div class="form-group">
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control"
                  placeholder="Name"
                  required
                />
              </div>
              <div class="form-group"><br>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group"><br>
                <textarea
                  rows="5"
                  id="massage"
                  name="massage"
                  class="form-control"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="tm-text-right"><br>


              <div class="row">
                <div>
                  <?php Flasher::flash();?>
                </div>
              </div>


              <button type="submit" class="btn btn-primary">Send It</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6 col-md-12 tm-contact-right">
          <div class="tm-contact-figure-block">
            <figure class="d-inline-block">
              <img src="img/kontak.jfif" alt="Image" class="img-fluid" />
              <figcaption class="tm-contact-figcaption">
                Jika Anda memiliki pertanyaan tentang lowongan pekerjaan atau produk, Silahkan hubungi kami <br>
                Alamat : Jl. BSD Boulevard Barat Green Office Park Kavling 3, BSD City, Tangerang – 15345 <br>
                Email : panda@gmail.com <br>
                Instagram : pandauwu <br>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
<!-- <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="JudulModal">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Suara Anda Didengar oleh Kami
      </div>
    </div>
  </div>
</div> -->