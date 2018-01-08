<?php
class Lists
{
	public static function enDisDel($table)
	{
		$database = new Database();
		$request = new Request();

		if($request->post('send')) {
			$url = $_SERVER['HTTP_REFERER'];
        	$refresh = header("Location: $url");

            $id = $request->post('check');
            if($request->post('select') == 'enable') {
                if(isset($id)) {
                    foreach($id as $i) {
                        $database->query("UPDATE $table SET visible='1' WHERE id=$i");
                        echo $refresh;
                    }
                }
            } elseif($request->post('select') == 'disable') {
                if(isset($id)) {
                    foreach($id as $i) {
                        $database->query("UPDATE $table SET visible='0' WHERE id=$i");
                        echo $refresh;
                    }
                }
            } elseif ($request->post('select') == 'delete') {
                if(isset($id)) {
                    foreach($id as $i) {
                        $database->query("DELETE FROM $table WHERE id=$i");
                        echo $refresh;
                    }
                }
            }
        }
	}

    public static function singleDel($table)
    {
        $database = new Database();

        $id = $_POST['del'][0];
        $database->query("DELETE FROM $table WHERE $table.id = '$id'");
        $url = $_SERVER['HTTP_REFERER'];
        header("Location: $url");
    }
}