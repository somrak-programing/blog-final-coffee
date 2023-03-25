<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $image_name = $_POST['data_file'];
        if($_FILES['file']['name'] != ''){
            $temp =  explode('.',$_FILES['file']['name']);
            $image_name = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../../assets/images/blog/'.$image_name;
            if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
                $image_delete = ROOT_PATH . $base_path_blog . pathinfo($_POST['data_file'], PATHINFO_BASENAME);
                unlink($image_delete);
            }else{
                echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>'; 
                header('Refresh:0; url=index.php'); 
            }
        }
        $tag = 'all,'. join(',', $_POST['tags']);
        $status = isset($_POST['status']) ? 'true': 'false'; 
        $detail = str_replace('../../../', './', $_POST['detail'] );

        $sql = "UPDATE `articles` 
                SET subject = '".$_POST['subject']."', 
                    sub_title = '".$_POST['sub_title']."', 
                    detail = '".$detail."',  
                    image = '".$image_name."', 
                    tag = '".$tag."', 
                    status = '".$status."', 
                    updated_at = '".date("Y-m-d H:i:s")."'
                    WHERE id = '".$_POST['id']."'; ";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Refresh:0; url=index.php');
    }
?>