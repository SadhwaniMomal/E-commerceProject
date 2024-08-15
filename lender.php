<!-- Header -->
<?php include 'includes/header.php' ?>
<!-- Main content -->
    <div class="container-fluid text-center body">
      <img src="images/image-removebg-preview (5).png" alt="" width="200px" />
    </div>
    <div class="container-fluid px-md-5 pb-5">
      <div class="contact-box p-2 mx-md-5">
        <h6 class="text-center pt-2 top-header">Submit Your Dress</h6>
        <h4 class="mx-4 pb-3 text-center heading">
          <span class="first"> Welcome</span>, Please fill the following fields
        </h4>

        <div class="row px-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">First Name</label>
              <input
                type="text"
                class="form-control input"
                id="formGroupInput"
                placeholder="First Name"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">Last Name</label>
              <input
                type="text"
                class="form-control"
                id="formGroupInput"
                placeholder="Last Name"
              />
            </div>
          </div>
        </div>
        <div class="row px-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label"
                >Contact Number</label
              >
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+92</span>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Contact Number"
                  aria-label="Contact Number"
                  aria-describedby="addon-wrapping"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label"
                >Email Address (Optional)</label
              >
              <input
                type="email"
                class="form-control"
                id="formGroupInput"
                placeholder="Email Address"
              />
            </div>
          </div>
        </div>
        <div class="row px-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">City</label>
              <input
                type="text"
                class="form-control"
                id="City"
                placeholder="City"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">Dress Type</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Dress Type</option>
                <option value="1">Bridal</option>
                <option value="2">Formal</option>
                <option value="3">Men's Wear</option>
                <option value="4">Both (Bridal & Formal)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row px-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label"
                >Price of a dress</label
              >
              <input
                type="number"
                class="form-control"
                id="Price of a dress"
                placeholder="Price of a dress"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">Brand</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Brand</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row px-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label">Size</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Size</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="formGroupInput" class="form-label"
                >Date of purchase</label
              >
              <input
                type="datetime-local"
                class="form-control"
                id="datetime-local"
                placeholder="dd/mm/yy"
              />
            </div>
          </div>
        </div>

        <div class="mb-3 px-4">
          <label for="exampleFormControlTextarea1" class="form-label">
            Any other details that you'd like to share:</label
          >
          <textarea class="form-control h-100" id="message" rows="4"></textarea>
        </div>
        <div class="mb-3 px-4">
          <label for="formFile" class="form-label"
            >Maximum file upload size 5MB.</label
          >
          <input class="form-control border-0" type="file" id="formFile" />
        </div>
        <div class="button text-center mb-5">
          <button type="button" class="btn btn-primary px-4">Submit</button>
        </div>
      </div>
    </div>
<!-- footer -->
<?php include 'includes/footer.php' ?>