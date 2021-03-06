<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * from nguoidung  WHERE taikhoan = '" . $data['taikhoan'] . "' AND matkhau = '" . $data['matkhau'] . "' AND trangthai = 1";

        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if ($login['MaQuyen'] == 2) {
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
            } else {
                if ($login['MaQuyen'] == 3) {
                    $_SESSION['isLogin_Nhanvien'] = true;
                    $_SESSION['login'] = $login;
                } else {
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                }
            }
            header('Location: ../../');
        } else {
            setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
            header('Location: ../../buyer/login-signup/?act=taikhoan#dangnhap');
        }
    }
    function logout()
    {
        if (isset($_SESSION['isLogin_Admin'])) {
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['isLogin_Nhanvien'])) {
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['isLogin'])) {
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ../../');
    }
    function check_account()
    {
        $query =  "SELECT * from nguoidung";

        require("result.php");

        return $data;
    }
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO nguoidung($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location: ../../buyer/login-signup/?act=taikhoan#dangky');
    }
    function account()
    {
        if (isset($_SESSION['login']['MaND'])) {
            $id = $_SESSION['login']['MaND'];
            return $this->conn->query("SELECT * from nguoidung where MaND = $id")->fetch_assoc();
        } else {
            echo('no user');
            exit();
        }
    }
    function update_account($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE nguoidung SET  $v   WHERE  MaND = " . $_SESSION['login']['MaND'];

        $result = $this->conn->query($query);

        if ($result == true) {
            $id = $_SESSION['login']['MaND'];
            $data = $this->conn->query("SELECT * from nguoidung where MaND = $id")->fetch_assoc();
            $_SESSION['login'] = $data;
            header('Location: ../../buyer/login-signup/?act=taikhoan&xuli=info');
        }
    }

    function generateCode($length)
    {
        $chars = "vwxyzABCD02789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }

    function insertDataGG($data)
    {
        $email = $data['email'];
        $name = $data['name'];
        $fisrtname = $data['given_name'];
        $lastname = $data['family_name'];
        $gender = $data['gender'];


        $query = "SELECT * from nguoidung  WHERE Email = '" . $email . "'";

        $info = $this->conn->query($query)->fetch_assoc();

        if (!$info['MaND']) {
            $session = $this->generateCode(10);
            $sql = "INSERT INTO `nguoidung` (`Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`, `session`) VALUES
            ('$lastname','$fisrtname', '$gender', '', '$email', '', '$name' , 'e10adc3949ba59abbe56e057f20f883e', 1, 1,'$session');
            ";
            $status = $this->conn->query($sql);

            if ($status) {

                $query = "SELECT * from nguoidung  WHERE Email = '" . $email . "'";

                $login = $this->conn->query($query)->fetch_assoc();


                if ($login != null) {
                    if ($login['MaQuyen'] == 2) {
                        $_SESSION['isLogin_Admin'] = true;
                        $_SESSION['login'] = $login;
                    } else {
                        if ($login['MaQuyen'] == 3) {
                            $_SESSION['isLogin_Nhanvien'] = true;
                            $_SESSION['login'] = $login;
                        } else {
                            $_SESSION['isLogin'] = true;
                            $_SESSION['login'] = $login;
                        }
                    }
                }
                header('Location: ../../baeshop.com');
            } else {
                setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
                header('Location: ../../baeshop.com/buyer/login-signup/?act=taikhoan#dangnhap');
            }
        } else {
            $query = "SELECT * from nguoidung  WHERE Email = '" . $email . "'";
            $login = $this->conn->query($query)->fetch_assoc();

            if ($login != null) {
                if ($login['MaQuyen'] == 2) {
                    $_SESSION['isLogin_Admin'] = true;
                    $_SESSION['login'] = $login;
                } else {
                    if ($login['MaQuyen'] == 3) {
                        $_SESSION['isLogin_Nhanvien'] = true;
                        $_SESSION['login'] = $login;
                    } else {
                        $_SESSION['isLogin'] = true;
                        $_SESSION['login'] = $login;
                    }
                }
            }

            header('Location: ../../baeshop.com');

            exit();
        }
    }

    function error()
    {
        header('location: ?act=errors');
    }
}
