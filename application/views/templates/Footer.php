    
    <!-- ========================= footer start ========================= -->
    <footer id="footer" class="footer">
    <br><br>
      <!-- <div class="footer-shape"><img
          src="assets/img/footer/asd.png"
          alt=""
          class="shape shape-1"
        /></div> -->
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="footer-widget">
                <div class="logo">
                  <a href="#">
                    <img src="<?= base_url('assets/')?>img/logo/logo2.png" alt="" class="logo-2" />
                    <img src="<?= base_url('assets/')?>img/logo/logo.png" alt="" class="logo-1" />
                  </a>
                  <div class="accordion-body">
                    <p> Sumber informasi dan komunitas peduli tanaman talas di Bogor. Tempat berbagi pengalaman dan belajar untuk mendapatkan wawasan baru dalam menjaga kesehatan tanaman talas. </p>
                    <p>© TalasCare 2023</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Alamat</h3>
                <p>Jln Kumbang No. 14, RT.02/RW.06, Babakan, Kec. Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Kontak</h3>
                <p>Email: sv@apps.ipb.ac.id
                <p>
                <p>No Telp: (0251) 8376845
                <p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3></h3>
                <ul class="socials">
                  <li>
                    <a href="facebook.com">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="twitter.com">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="instagram.com">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copy-right-wrapper">
          <p> Designed and Developed by <a href="#" rel="nofollow" target="_blank">Net Think</a>
          </p>
        </div>
      </div>
    </footer>
    <!-- ========================= footer end ========================= -->
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>
    <script>
    var map = L.map('map').setView([-6.592799367624613, 106.78570711553688], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
// buat variabel berisi fugnsi L.popup 
var popup = L.popup();

// buat fungsi popup saat map diklik
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)

        document.getElementById('latlong').value = e.latlng //value pada form latitde, longitude akan berganti secara otomatis
    }
    map.on('click', onMapClick); //jalankan fungsi

    // Add a marker for the user's current location
    var userIcon = L.icon({
    iconUrl: '<?=base_url('assets/img/upload/location.png') ?>', // Provide the path to your user icon
    iconSize: [32, 32],
    iconAnchor: [16, 32],
    popupAnchor: [0, -32]
});
function onLocationFound(e) {
    L.marker(e.latlng, { icon: userIcon })
        .addTo(map)
        .bindPopup("Kamu disini!")
        .openPopup();
}

// Handle errors if geolocation is not available
function onLocationError(e) {
    alert(e.message);
}

// Request the user's location
map.on('locationfound', onLocationFound);
map.on('locationerror', onLocationError);
map.locate({ setView: true, maxZoom: 13 });

    <?php foreach($tokomap as $map) :?>
      var customIcon = L.icon({
        iconUrl: '<?=base_url('assets/img/upload/'. $map['gambar']) ?>',
        iconSize: [32, 32], // Adjust the size of your icon
        iconAnchor: [16, 32], // Adjust the anchor point of your icon
        popupAnchor: [0, -32] // Adjust the popup anchor of your icon

        
    });
      L.marker([<?= $map['lattitude'] ?>, <?= $map['longitude']?>],{ icon: customIcon }).addTo(map)
      .bindPopup(`
      <div class="popup-content">
        <div class="popup-header">
          <h5 class="popup-title"><?= $map['nama_toko'] ?></h5>
          <p class="popup-rating">Rating: <?= $map['rating'] ?></p>
        </div>
        <div class="popup-body">
          <p class="popup-address">Alamat: <?= $map['alamat'] ?></p>
          <img src="<?=base_url('assets/img/upload/'. $map['gambar']) ?>" alt="Toko Image" class="popup-image img-fluid rounded">
        </div>
        <div class="popup-footer">
          <a href="<?= base_url('TalasMaps/detailtoko/' . $map['id_toko']) ?>" class="btn btn-small btn-main btn-round-full text-white mt-2 col-12">Detail</a>
        </div>
      </div>
    `);
    <?php endforeach ?>

</script>
    <script src="<?=base_url('assets/ai/')?>script.js"></script>
    <!-- ========================= JS here ========================= -->
    <script src="<?= base_url('assets/')?>js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="<?= base_url('assets/')?>js/count-up.min.js"></script>
    <script src="<?= base_url('assets/')?>js/wow.min.js"></script>
    <script src="<?= base_url('assets/')?>js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  </body>
</html>