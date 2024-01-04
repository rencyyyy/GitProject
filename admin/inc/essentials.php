<?php

    //FRONTEND PURPOSE DATA
    define('SITE_URL','http://127.0.0.1/newProject/');
    define('ABOUT_IMG_PATH',SITE_URL.'webimages/aboutimg/');
    define('CAROUSEL_IMG_PATH',SITE_URL.'webimages/carousel/');
    define('FACILITIES_IMG_PATH',SITE_URL.'webimages/facilities/');
    define('ROOMS_IMG_PATH',SITE_URL.'webimages/rooms/');


    //BACKEND UPLOAD PROCESS NEED THIS DATA
    define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/newProject/webimages/');
    define('ABOUT_FOLDER','aboutimg/');
    define('CAROUSEL_FOLDER','carousel/');
    define('FACILITIES_FOLDER','facilities/');
    define('ROOMS_FOLDER','rooms/');

    function adminLogin(){
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            echo"<script>
                window.location.href='index.php';
            </script>";
            exit;
        }

    }

    function redirect($url){
        echo"<script>
            window.location.href='$url';
        </script>";
        exit;
    }

    function alert($type,$msg){
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
    }

    function uploadImage($image,$folder){
        $valid_mime = ['image/jpeg','image/jpg','image/png','image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){
            return 'inv_img'; //INVALID IMAGE MIME OR FORMAT
        } else if(($image['size']/(1024*1024))>2){
            return 'inv_size'; //INVALID SIZE (GREATER THAN 2MB)
        }else {
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999)."$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }else {
                return 'upd_failed';
            }
        }
    }

    function deleteImage($image, $folder){
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }else {
            return false;
        }
    }

    function uploadSVGImage($image,$folder){
        $valid_mime = ['image/svg+xml'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){
            return 'inv_img'; //INVALID IMAGE MIME OR FORMAT
        } else if(($image['size']/(1024*1024))>1){
            return 'inv_size'; //INVALID SIZE (GREATER THAN 1MB)
        }else {
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999)."$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }else {
                return 'upd_failed';
            }
        }
    }


 ?>