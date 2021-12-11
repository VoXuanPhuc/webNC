<div id="comment">
    <div>
        <?php for ($i = 0; $i < count($voteSP); $i++) { ?>
        <div class="item-comment">
            <div class="user-name-vote">
                <div class="rounded-circle mr-2">
                    <img class="rounded-circle" style="width: 30px; height:30px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxrcAYVaceuXCp4dsCehYBkwyE01tfF71x_w&usqp=CAU" alt=" ">

                </div>
                <div class="name">
                    <label for=" ">
                        <?php
                            $nguoidung = $this->detail_model->selectKhachHang($voteSP[$i]['idNguoidung']);
                            echo $nguoidung['Ho']; echo ' '. $nguoidung['Ten'];
                        ?>
                    </label>
                </div>
            </div>
            <div class="rated_by_users">
                <label class="mx-3" for=" ">
                <?php for ($sao = 1; $sao <= $voteSP[$i]['sao']; $sao++) { ?>
                    <i class="fas fa-star" style="color: #FFC107;" ></i>
                <?php } ?>
                </label>
                <br>
                <div>
                    <label for=" "><?php echo $voteSP[$i]['noidung']; ?></label>
                </div>
                <label class="date_rate" for=" "><?php echo $voteSP[$i]['ngayVote']; ?></label>
            </div>
        </div>
        <?php } ?>
    </div>
</div>