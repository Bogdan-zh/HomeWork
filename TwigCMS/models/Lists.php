<?php
class Lists extends Database
{
    public function enDisDel($table)
    {
        $request = new Request();
        $images = new Images();

        if($request->post('send')) {
            
            $id = $request->post('check');

            if($request->post('select') == 'enable') {
                if(isset($id)) {
                    foreach($id as $i) {
                        $this->query("UPDATE $table SET visible='1' WHERE id=$i");
                    }
                }
            } elseif($request->post('select') == 'disable') {
                if(isset($id)) {
                    foreach($id as $i) {
                        $this->query("UPDATE $table SET visible='0' WHERE id=$i");
                    }
                }
            } elseif ($request->post('select') == 'delete') {
                if(isset($id)) {
                    foreach($id as $i) {
                        switch($table) {
                            case 'products':
                            case 'categories':
                                $images->delImages($i, $table);
                                break;
                        }
                        
                        $this->query("DELETE FROM $table WHERE id=$i");
                    }
                }
            }
        }
    }

    public function singleDel($table)
    {
        $images = new Images();
        $id = $_POST['del'][0];
        switch($table) {
            case 'products':
            case 'categories':
                $images->delImages($i, $table);
                break;
        }
        $this->query("DELETE FROM $table WHERE $table.id = '$id'");
    }
}