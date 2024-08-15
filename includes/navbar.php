 <!-- top contact detail -->
 <div class="container-fluid contact-top-line py-3 px-5 bg-black">
      <div
        class="row justify-content-center align-items-center text-center text-md-center px-5"
      >
        <!-- Left Section: Navigation Links -->
        <div
          class="col-md-4 d-flex justify-content-center justify-content-md-center mb-2 mb-md-0"
        >
          <ul class="list-unstyled d-flex m-0">
            <!-- Contact -->
            <li class="nav-item">
              <a
                class="nav-link text-white fw-bold me-3"
                aria-current="page"
                href="contact.php"
                >Contact</a
              >
            </li>
            <!-- FAQ's -->
            <li class="nav-item">
              <a
                class="nav-link text-white fw-bold"
                aria-current="page"
                href="faq.php"
                >FAQ's</a
              >
            </li>
          </ul>
        </div>
        <!-- Center Section: Welcome Message -->
        <div class="col-md-4 text-warning fw-bold mb-2 mb-md-0">
          <p class="m-0">Welcome To Rent Hives</p>
        </div>
        <!-- Right Section: Contact Information -->
        <div class="col-md-4 text-white fw-bold">
          <p class="m-0">
            <span class="navbar-contact">WhatsApp: +1-234-567-890</span>
          </p>
        </div>
      </div>
    </div>
    <!-- top contact detail -->

    <!--1. NAVBAR START HERE  -->
    <nav class="navbar navbar-expand-lg my-navbar navbar-light bg-white">
      <div class="container-fluid p-0">
        <!-- Navbar toggler on the left side -->
        <button
          class="my-navbar-toggler me-2 d-block d-lg-none px-3"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
        >
          <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <!-- Logo centered -->
        <a class="navbar-brand mx-lg-0" href="#">
          <img src="./images/image-removebg-preview (5).png" alt="Logo" />
        </a>
        <!-- Navigation links and button for large devices -->
        <div
          class="collapse navbar-collapse justify-content-center d-none d-lg-flex"
        >
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li> -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="womensDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Women's Woes
              </a>
              <ul
                class="dropdown-menu center-dropdown-items"
                aria-labelledby="womensDropdown"
              >
                <li><a class="dropdown-item" href="#">Lovely Looks </a></li>
                <li><a class="dropdown-item" href="#">Bridal Bliss</a></li>
                <li><a class="dropdown-item" href="#">Chic Campus</a></li>
                <li><a class="dropdown-item" href="#">Glam Galz</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="mensDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Men's Marry
              </a>
              <ul
                class="dropdown-menu center-dropdown-items"
                aria-labelledby="mensDropdown"
              >
                <li><a class="dropdown-item" href="#">Groom Gear</a></li>
                <li><a class="dropdown-item" href="#">Party Picks</a></li>
                <li><a class="dropdown-item" href="#">Campus Cool</a></li>
                <li>
                  <a class="dropdown-item" href="#">Office Officials</a>
                </li>
                <li><a class="dropdown-item" href="#">Travels Trends</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="specialOccasionsDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Special Occasions
              </a>
              <ul
                class="dropdown-menu center-dropdown-items"
                aria-labelledby="specialOccasionsDropdown"
              >
                <li>
                  <a class="dropdown-item" href="#">Bridal Bliss (Women's)</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Groom Gear (Men's) </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Party Picks (Both) </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="travelVacationsDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Celebrities Choice
              </a>
              <ul
                class="dropdown-menu center-dropdown-items"
                aria-labelledby="travelVacationsDropdown"
              >
                <li><a class="dropdown-item" href="#">Trendy Picks </a></li>
                <li><a class="dropdown-item" href="#">Trendy Picks </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Icon and button on the right side -->
        <div class="d-flex justify-content-end right-side-icons">
          <a href="#" class="nav-links px-0 m-0" id="searchIcon"
            ><i class="fas fa-search"></i
          ></a>
          <a href="signup.php" class="nav-links" id="userIcon"
            ><i class="fas fa-user"></i
          ></a>
          <button  id="earnNowBtn" class="btn ms-2">Earn now</button>
        </div>
      </div>
    </nav>
    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel"
    >
      <div class="offcanvas-header">
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="womensDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Women's Woes
            </a>
            <ul
              class="dropdown-menu center-dropdown-items"
              aria-labelledby="womensDropdown"
            >
              <li><a class="dropdown-item" href="#">Lovely Looks </a></li>
              <li><a class="dropdown-item" href="#">Bridal Bliss</a></li>
              <li><a class="dropdown-item" href="#">Chic Campus</a></li>
              <li><a class="dropdown-item" href="#">Glam Galz</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="mensDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Men's Marry
            </a>
            <ul
              class="dropdown-menu center-dropdown-items"
              aria-labelledby="mensDropdown"
            >
              <li><a class="dropdown-item" href="#">Groom Gear</a></li>
              <li><a class="dropdown-item" href="#">Party Picks</a></li>
              <li><a class="dropdown-item" href="#">Campus Cool</a></li>
              <li>
                <a class="dropdown-item" href="#">Office Officials</a>
              </li>
              <li><a class="dropdown-item" href="#">Travels Trends</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="specialOccasionsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Special Occasions
            </a>
            <ul
              class="dropdown-menu center-dropdown-items"
              aria-labelledby="specialOccasionsDropdown"
            >
              <li>
                <a class="dropdown-item" href="#">Bridal Bliss (Women's)</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Groom Gear (Men's) </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Party Picks (Both) </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="travelVacationsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Celebrities Choice
            </a>
            <ul
              class="dropdown-menu center-dropdown-items"
              aria-labelledby="travelVacationsDropdown"
            >
              <li><a class="dropdown-item" href="#">Trendy Picks </a></li>
              <li><a class="dropdown-item" href="#">Trendy Picks </a></li>
            </ul>
          </li>
        </ul>
        <!-- Icon and button on the right side -->
        <div class="d-flex justify-content-start mt-5 gap-3 icons-0ffacva">
          <a href="#" class="nav-links px-0 m-0" id="searchIcon"
            ><i class="fas fa-search"></i
          ></a>
          <a href="./signup.html" class="nav-links" id="userIcon"
            ><i class="fas fa-user"></i
          ></a>
          <button id="earnNowBtn" class="btn ms-2">Earn now</button>
        </div>
      </div>
    </div>
    <!--1. NAVBAR END HERE  -->