<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="nqiBR_4BjU4P4pg1u6hihB5cDmhubifJf3o9vbKANOs" />
    <title>TalasCare | Forum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>bootstrap/css/bootstrap.css">
    <script src="<?=base_url('assets/')?>bootstrap/js/bootstrap.js"></script>
</head>

<body>
<section>
        <div class="container-fluid">
            <div class="row mt-4 mb-1">
                <div class="col-12">
                <a class="text-dark" href="<?= base_url('Admin/Forum') ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg> Kembali</a>
                </div>
            </div>
            <div class="row mb-5 justify-content-center">
                <div class="col-12 col-xl-7">
                    <?php foreach ($forum as $frm):?>
                        <div class="card-upload mt-3">
                                <form action="<?= base_url('Admin/Forum/updateforum')?>" method="POST" enctype="multipart/form-data">
                                <div class="form-komen">
                                        <input type="hidden" name="id_forum" value="<?= $frm->id_forum ?>">
                                        <input type="text" class="input-post col-12" placeholder="Tulis sesuatu" name="isi" value="<?= $frm->isi ?>">
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="<?=base_url('assets/')?>image/upload.svg" type="button"/>
                                        </label>
                                        <input id="file-input" type="file" name="image" accept="image/*" onchange="loadFile(event)" onclick="hide()"/>
                                    </div>                                    
                                    <button type="submit" class="btn btn-purple">Buat Postingan</button>
                                </div>
                                </form>
                                <div>
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <?php if ($frm->image != NULL) : ?>
                                        <div class="foto-forum">
                                            <img class="img-fluid" id="hilang" src="<?=base_url('assets/img/forum/').$frm->image?>" alt="">
                                        </div>
                                        <?php endif ?>
                                        <div class="col-8" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="300">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                </div>
            </div>
        </div>
    </section>
        

    <script>
    function likeForum(button) {
    var forumId = $(button).data('forum-id');

    $.ajax({
        url: '<?= base_url('Forum/likeForum') ?>',
        type: 'POST',
        data: { forum_id: forumId },
        dataType: 'json',
        success: function(response) {
            var likeCountSpan = $(button).find('.like-count');
            likeCountSpan.text(response.jumlah_like);
            if (response.liked_status === 1) {
                $(button).addClass('liked');
                $(button).css('color', 'red');
            } else {
                $(button).removeClass('liked');
                $(button).css('color', 'black');
            }
        }
    });
}



    </script>

</script>

<script>
        function hide() {
            $('#show ').css("display", "block");
            $('#hilang ').css("display", "none");
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
</body>
</html>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
    
    </html>