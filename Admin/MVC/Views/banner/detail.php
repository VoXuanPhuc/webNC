<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Title: <?= $data['Id'] ?></h2>
    <h2>Hình Ảnh: </h2>
    <a><img src="<?php echo URL; ?>public/images/<?=$data['HinhAnh']?>" height="400px"></a>
    <textarea><?= $data['TenBN']?></textarea>
</table>