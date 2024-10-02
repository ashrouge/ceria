<?php 
include 'header.php';
?>
<!-- IMAGE -->

<div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="fun-facts" id="kategori">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="section-heading text-center">
                <h2>Kategori</h2>
              </div>
              <div class="col-lg-4">
                  <div class="counter" style="background: url('assets/images/kategori1.png') center/cover no-repeat; width: 100%; height: 200px;"></div>
              </div>
              <div class="col-lg-4">
                  <div class="counter" style="background: url('assets/images/kategori2.png') center/cover no-repeat; width: 100%; height: 200px;"></div>
              </div>
              <div class="col-lg-4">
                  <div class="counter" style="background: url('assets/images/kategori3.png') center/cover no-repeat; width: 100%; height: 200px;"></div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Best Seller!</h2>
        </div>
        <div class="row properties-box">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM produk ORDER BY kode_produk DESC LIMIT 6");

            // Check if the query executed successfully
            if ($result === false) {
                die(mysqli_error($conn)); // Display the MySQL error and exit
            }

            // Check if there are rows in the result set
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                        <div class="item">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>"><img src="image/produk/<?= $row['image']; ?>" alt="" width="200"></a>
                            <span class="category"><?= $row['kategori']; ?></span>
                            <h6>Rp. <?= number_format($row['harga']); ?></h6>
                            <h4><a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>"><?= $row['nama']; ?></a></h4>
							<ul>
								<li>Rating: <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span></li>
							</ul>
                            <div class="main-button">
                                <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No products found.";
            }

            // Free the result set
            mysqli_free_result($result);
            ?>
        </div>
    </div>
</div>
<div class="section-heading text-center">
                <h2>Kata Mereka</h2>
              </div>
              <div class="container mt-5">
    <?php
    // Include the database connection file

    // Retrieve the latest 5 comments from the database
    $query = "SELECT * FROM comments ORDER BY date_added DESC LIMIT 5";
    $result = mysqli_query($conn, $query);

    // Loop through the results and display each comment
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card mb-3">
            <div class="card-header">
                <?= htmlspecialchars($row['username']); ?>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <?= htmlspecialchars($row['comment']); ?>
                </p>
            </div>
        </div>
    <?php
    }

    // Close the database connection
    ?>
</div>
<div class="contact-page section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Contact Us</h6>
            <h2>Get In Touch</h2>
          </div>
          <p> Toko Ceria Menyediakan Beberapa Macam Makanan dan minuman serta dessert yang enak </p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>tokoceria@gmail<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="proses/order.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <fieldset>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>

        </div>
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.260076218397!2d114.367691!3d-8.2213497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14532ca02e0f1%3A0x487748494ecef50b!2sSekolah%20Tinggi%20Ilmu%20Komputer%20PGRI%20Banyuwangi!5e0!3m2!1sid!2sid!4v1703387101739!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php 
include 'footer.php';
?>