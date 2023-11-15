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
                <a class="text-dark" href="<?= base_url('Admin/Dashboard') ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg> Kembali</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-xl-7">
                    <?php foreach ($forum as $frm):?>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-forum">
                                <div class="display-name">
                                    <img src="<?= base_url('assets/image/').$frm->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                    <div class="text-name">
                                        <span class="name"><?= $frm->username ?> <span class="upload-time">• <?= $frm->tanggal ?></span></span>
                                    </div>
                                </div>
                                <span class="title-forum"><?= $frm->isi ?></span>
                                <?php if ($frm->image != NULL) : ?>
                                <div class="foto-forum">
                                    <img class="img-fluid" src="<?=base_url('assets/img/forum/').$frm->image?>" alt="">
                                </div>
                                <?php else : ?>
                                <?php endif ?>
                                <div class="action">
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample<?= $frm->id_forum ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $frm->jumlah_komentar ?>
                                    </button>
                                    <a href="<?= base_url('Admin/Forum/hapusForum/' . $frm->id_forum) ?>" class="btn btn-action" onclick="return confirm('Anda yakin ingin menghapus forum ini?')">
                                        <img src="<?= base_url('assets/image/trash.svg') ?>" alt="Hapus">
                                        Hapus
                                    </a>
                                    <a href="<?= base_url('Admin/Forum/editForum/' . $frm->id_forum) ?>" class="btn btn-action">
                                        <img src="<?= base_url('assets/image/pencil.svg') ?>" width="24" alt="Edit">
                                        Edit
                                    </a>
                                </div>
                                <div class="collapse col-12" id="collapseExample<?=$frm->id_forum?>">
                                    <div class="card-komen">
                                        <?php $id_forum = $frm->id_forum;
                                        $query = $this->db->query("SELECT *, (SELECT COUNT(*) FROM tbl_balasan WHERE tbl_balasan.id_komentar = tbl_komentar.id_komentar) AS jumlah_balasan FROM tbl_komentar LEFT JOIN tbl_user ON tbl_komentar.id_user=tbl_user.id_user WHERE id_forum='$id_forum' ORDER BY id_komentar desc");
                                        foreach ($query->result() as $komentar) :?>
                                        <div class="komentar col-12">
                                            <img src="<?= base_url('assets/image/').$komentar->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name"><?= $komentar->username ?> <span class="upload-time">• <?= $komentar->tanggal ?></span></span>
                                                </div>
                                                <span class="komen-text"><?= $komentar->isi ?></span>
                                                <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseBalasan<?= $komentar->id_komentar?>" aria-expanded="false" aria-controls="collapseBalasan"><img src="<?=base_url('assets/')?>image/komen.svg" alt=""> <?= $komentar->jumlah_balasan?></button>
                                            </div>
                                        </div>
                                        <div class="collapse col-12" id="collapseBalasan<?=$komentar->id_komentar?>">
                                    <div class="card-komen col-12">
                                        <?php $id_komentar = $komentar->id_komentar;
                                        $query = $this->db->query("SELECT * FROM tbl_balasan LEFT JOIN tbl_user ON tbl_balasan.id_user=tbl_user.id_user WHERE id_komentar='$id_komentar' ORDER BY id_balasan desc");
                                        foreach ($query->result() as $balasan) :?>
                                        <div class="komentar col-12">
                                            <img src="<?= base_url('assets/image/').$balasan->avatar ?>" alt="avatar" width="30" height="30" class="rounded-circle">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name"><?= $balasan->username ?> <span class="upload-time">• <?= $balasan->tanggal ?></span></span>
                                                </div>
                                                <span class="komen-text"><?= $balasan->isi ?></span>
                                            </div>
                                        </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
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