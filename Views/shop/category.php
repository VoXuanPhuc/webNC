<div class="col-lg-3 col-md-3 col-sm-0 filter-col" id="filter-col">
    <div class="box filter-toggle-box">
        <button class="btn-flat btn-hover" id="filter-close">close</button>
    </div>
    <div class="box p-0">
        <span class="filter-header px-5 ">
            DANH SÁCH
        </span>
        <ul class="filter-list list-group">
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-nike") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-nike&sp=1&page=1">Giày Nike</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-adidas") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-adidas&sp=2&page=1">Giày Adidas</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-vans") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-vans&sp=3&page=1">Giày vans</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-the-thao") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-the-thao&sp=4&page=1">Giày thể thao</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-nam") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-nam&sp=4&page=1">Giày Nam</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-nu") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=giay-nu&sp=1&page=1">Giày Nữ</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "giay-doi") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?giay-doi&sp=2&page=1">Giày đôi</a>
            </li>
            <li class="<?php if(isset($_GET['loai'])) {
                if ($_GET['loai'] == "khong-ten") {echo "list-group-item active";} else {echo "list-group-item-info";}} ?> px-5 py-2 m-0">
                <a style="text-transform: capitalize;" href="<?php echo URL; ?>danhmuc?loai=khong-ten&sp=3&page=1">Không tên</a>
            </li>
        </ul>
    </div>
</div>