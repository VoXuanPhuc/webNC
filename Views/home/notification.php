<style>
    .notification {
        background: white;
        height: 120px;
        width: 300px;
        border-radius: 20px;
        position: absolute;
        right: 20px;
        top: 480px;
        z-index: 1000;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0;
        display: inline;
    }

    .notification .header {
        display: flex;
        padding: 10px 10px 5px 10px;
        border-radius: 20px 20px 0 0;
        justify-content: space-between;
        background-color: #8AB9C3;
        margin: 0;
    }

    .notification .content {
        padding: 10px 20px;
    }

    .dentrangquanly {
        font-size: 13px;
        margin-left: 130px;
    }
</style>
<div class="notification" id="notification">
    <div class="header">
        <h6>Thông báo </h6>
        <div>
            <i id="close" class="far fa-times-circle"></i>
        </div>
    </div>
    <div class="content">
        <span>
            Có <?php echo ($countDonHang['SL']); ?> đơn hàng chờ được duyệt
        </span>
        <div>
            <a class="dentrangquanly" href="http://localhost/baeshop.com/admin/?mod=hoadon&id=0">
                Đến trang quản lý
            </a>
        </div>
    </div>
</div>

<script>
    $("#close").click(function() {
        $('#notification').addClass('d-none');
    });

    $(window).on('load', function() {
        // $('#notification').fadeIn(10000);
    });
</script>