<?php
require_once("./Models/home.php");
require_once('./Models/login.php');
class HomeController
{
    var $home_model;
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
        $this->home_model = new Home();
    }

    function loginWithgg()
    {
        require_once './Views/login/login.php';

        $oAuth = new Google_Service_Oauth2($client);
        $userData = $oAuth->userinfo_v2_me->get();
        $this->login_model->insertDataGG($userData);
        exit();

        if (isset($token["error"]) && ($token["error"] != "invalid_grant")) {
            // get data from google
            // $oAuth = new Google_Service_Oauth2($client);
            // $userData = $oAuth->userinfo_v2_me->get();
            // $this->login_model->insertDataGG($userData);
        } else {
            header('Location: ../../baeshop.com');
            exit();
        }
    }

    function list()
    {
        $data_danhmuc = $this->home_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 0; $i < count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->home_model->chitietdanhmuc($i);
        }

        $data_random = $this->home_model->random(2);

        $data_banner = $this->home_model->banner(0, 4);

        $data_sanpham1 = $this->home_model->top_sp_moinhat();
        $data_sanpham2 = $this->home_model->top_sp_banchay();

        if (isset($_SESSION['login'])) {
            $countDonHang = $this->home_model->countDonHang();
        }

        require_once('Views/index.php');
    }

    function search() {

        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $result = $this->home_model->search($search);
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li style="cursor: context-menu;" class="list-group-item d-flex justify-content-between">
                    <span>' . $row['TenSP'] . '</span>
                    <img style="border-radius:10px; width="60" height="30" src=" http://localhost/baeshop.com/public/images/' . $row['HinhAnh1'] . '">
                    </li>';
                }
            }
        }
    }
}
