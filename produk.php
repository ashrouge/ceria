<?php 
	include 'header.php';
 ?>

<div class="section properties">
    <div class="container">
        <ul class="properties-filter">
		<div class="section-heading text-center">
            <h3>Semua Product</h3>
        </div>
            <li>
                <a class="is_active" href="#!" data-filter="*">Show All</a>
            </li>
            <li>  
                <a href="#!" data-filter=".adv">Makanan Ringan</a>
            </li>
            <li>
                <a href="#!" data-filter=".str">Jus</a>
            </li>
            <li>
                <a href="#!" data-filter=".rac">Salad Buah</a>
            </li>
        </ul>
        <div class="row properties-box" id="isotope-container">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM produk");
            while ($row = mysqli_fetch_assoc($result)) {
                $categories = ''; // Initialize an empty string for categories

                // Assuming your database has a 'kategori' column for the category of each product
                $kategori = $row['kategori'];

                // Add category class based on the kategori value
                switch ($kategori) {
                    case 'makanan ringan':
                        $categories = 'adv';
                        break;
                    case 'jus':
                        $categories = 'str';
                        break;
                    case 'salad':
                        $categories = 'rac';
                        break;
                    // Add more cases for additional categories if needed
                    // ...

                    default:
                        break;
                }
            ?>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 <?php echo $categories; ?>">
                    <div class="item">
                        <a href="property-details.html"><img src="image/produk/<?= $row['image']; ?>" alt=""></a>
                        <span class="category"><?= $kategori; ?></span>
                        <h6>Rp. <?= number_format($row['harga']); ?></h6>
                        <h4><a href="property-details.html"><?= $row['nama']; ?></a></h4>
                        <ul>
                            
                        </ul>
                        <div class="main-button">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>">Detail Produk</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a class="is_active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/isotope@3.0.6/dist/isotope.pkgd.min.js"></script>
<script>
	$(document).ready(function () {
    // Initialize Isotope
    var $isotopeContainer = $('#isotope-container').isotope({
        itemSelector: '.properties-items',
        layoutMode: 'fitRows'
    });

    // Filter items on button click
    $('.properties-filter').on('click', 'a', function (e) {
        e.preventDefault();
        var filterValue = $(this).attr('data-filter');
        $isotopeContainer.isotope({ filter: filterValue });
        $('.properties-filter a').removeClass('is_active');
        $(this).addClass('is_active');
    });
});

</script>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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