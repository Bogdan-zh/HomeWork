<?php
class Images
{
    public static function getImages($id)
    {
        $database = new Database();

        $query = "SELECT filename FROM images WHERE product_id = $id";
        $this->res = $database->query($query);
        return $this->res;
    }

    public static function delImages($id, $table) // удаляет физически картинку
    { 
        $database = new Database();

        $query = "SELECT image FROM $table WHERE id='$id'";
        $result = $database->query($query);
        $res = $result->fetch_assoc();
        $old_image = $res['image'];
        
        if(isset($old_image) && file_exists('../uploads/'.$old_image) && $old_image != 'noimage.png') {
            unlink('../uploads/'.$old_image);
        }

        $query = "UPDATE $table SET image='noimage.png' WHERE id='$id'";
        $database->query($query);
    }

    public static function uploadImage($id, $table) 
    {
        $coreadmin = new CoreAdmin();
        $request = new Request();
        $database = new Database();

        if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {

            $array_ext = array('jpg','jpeg','png','gif');
            $files = $_FILES['files'];
            $cnt = count($files['name']);

            $uri = parse_url($_SERVER['REQUEST_URI']);
            $parts = explode('/', $uri['path']);

            for($i=0; $i < $cnt; $i++) {
                $name = pathinfo($files['name'][$i], PATHINFO_FILENAME);
                $ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
                if(in_array($ext, $array_ext)) {
                    $hash = substr(md5($name.date('Y-m-d-h-i-s').rand(1,1000)),0,10);
                    $filename = 'id'.$request->post('id').'_'."$parts[2]".'__'.$coreadmin->filesTranslit($name)."_".$hash.".".$ext;
                    if(move_uploaded_file($files['tmp_name'][$i], '../uploads/'.$filename)) {
                        
                        Images::delImages($id, $table);
                        $query = "UPDATE $table SET image='$filename' WHERE id=$id";
                        $database->query($query);
                    } else {
                        echo 'ERROR';
                    }

                } 
            }
        }
    }

}