            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Talas Care 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Sign Out" di bawah ini jika Anda yakin ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Admin/Auth/Login/logout')?>">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hide() {
            $('#show').css("display", "block");
            $('#hilang').css("display", "none");
        }
    </script>
    <script>
        function shareContent() {
            var urlToShare = "<?=base_url('Forum/').$frm->id_forum ?>";
            var titleToShare = "Contoh Halaman Bagikan";
            if (navigator.share) {
                navigator.share({
                    title: titleToShare,
                    url: urlToShare
                })
                .then(() => console.log('Berhasil membagikan.'))
                .catch((error) => console.error('Gagal membagikan: ', error));
            } else {
                alert("Maaf, browser Anda tidak mendukung fitur berbagi.");
            }
        }
    </script>
    <script>
        new DataTable('#example');
    </script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/')?>js/sb-admin-2.min.js"></script>
    

</body>

</html>