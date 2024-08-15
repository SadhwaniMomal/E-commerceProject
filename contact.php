<!-- Header -->
<?php include 'includes/header.php' ?>
<!-- Navbar -->
<?php include 'includes/navbar.php' ?>

 <!-- MAIN CONTENT START -->
 <div
      class="h-100 py-5"
      style="
        background-image: url('./images/hero11.webp');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        opacity: 1 !important;
      "
    >
      <div
        class="container h-100 d-flex justify-content-center align-items-center"
      >
        <div class="text-center text-white p-5 right-side-title">
          <h2 class="text-black fw-bold">Contact Us</h2>
          <a
            href="#"
            class="btn text-decoration-none px-4 py-2 rounded text-white earnnowbtn"
            >Earn Now</a
          >
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT END -->

    <div class="container-fluid my-form-container">
      <div class="row justify-content-center py-4 px-2">
        <div
          style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px"
          class="col-md-3 col-sm-4 contact-side py-3 my-2"
        >
          <h2 class="text-center">Contact Us</h2>
          <p class="text-center">
            Grursus mal suada faci lisis Lorem ipsum consectetur the Vesti.
          </p>
          <div class="form-contact-info mt-4">
            <div class="d-flex py-4">
              <i class="fas fa-phone fs-5 px-3 py-3"></i>
              <div>
                <h5 class="m-0">Office Phone</h5>
                <p>(+011) 948-5481</p>
              </div>
            </div>
            <div class="d-flex py-4">
              <i class="fas fa-envelope fs-5 px-3 py-3"></i>
              <div>
                <h5 class="m-0">Mail Us</h5>
                <p>support@ example. com</p>
              </div>
            </div>

            <div class="py-4 d-flex">
              <i class="fas fa-map-marker-alt fs-5 px-3 py-3"></i>
              <div>
                <h5 class="m-0">Address</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
        <div
          style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px"
          class="col-md-8 col-sm-7 mx-2 py-3 px-4 bg-white my-2"
        >
          <h2>Send us a Message</h2>
          <p>
            Grursus mal suada faci lisis Lorem ipsum ametion consectetur elit.
            The Vesti at bulum ipsumm ipsum that dolocons
          </p>
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="inputName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="inputName" />
              </div>
              <div class="col-md-6">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" />
              </div>
            </div>
            <div class="mb-3">
              <label for="inputSubject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="inputSubject" />
            </div>
            <div class="mb-3">
              <label for="inputMessage" class="form-label">Send Message</label>
              <textarea
                class="form-control"
                id="inputMessage"
                rows="4"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-custom px-2 py-2 mb-3">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- Form End here  -->
    <!-- Map Start here  -->
    <div class="container mb-3">
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14483.495767564544!2d67.0710968!3d24.8339842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dcd4f59a199%3A0x2803dc549d61192b!2sMap%20Law%20Firm!5e0!3m2!1sen!2s!4v1720035391878!5m2!1sen!2s"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
    <!-- Map end here  -->
<!-- Footer -->
<?php include 'includes/footer.php' ?>
