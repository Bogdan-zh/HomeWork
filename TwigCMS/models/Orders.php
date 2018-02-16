<?php
class Orders extends Database
{
    public function addOrder($order)
    {
        if(empty($order)) {
            return false;
        }
        foreach ($order as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO orders ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    
    public function getOrder($id)
    {
        if(empty($id)) {
            return false;
        }

        if(is_integer($id)) {
            $id = 'id = '.$id;
        } elseif(is_string($id)) {
            $id = "url = '$id'";
        }

        $query = "SELECT id, order_time, total_cost, user_id, first_name, last_name, email, phone, status_id, url FROM orders WHERE $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getOrders($status = 0, $start = 0, $num = 0)
    {
        // вывод по статусу
        $filter = '';
        if(!empty($status)) {
            $filter = "WHERE status_id = $status";
        }

        // для пагинации
        $limit = '';
        if(!empty($start) || !empty($num)) {
            $limit = "LIMIT $start, $num";
        }

        $query = "SELECT id, order_time, total_cost, user_id, first_name, last_name, email, phone, status_id, url FROM orders $filter ORDER BY id DESC $limit";
        $this->query($query);
        return $this->results();
    }

    public function updateOrder($id, $order)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($order as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE orders SET $colum_sql WHERE id='$id'";
        $this->query($query);
        return $id;
    }

    public function deleteOrder($id)
    {
        if(empty($id)) {
            return false;
        }
        $this->query("DELETE FROM orders WHERE id = '$id'");
        $this->query("DELETE FROM purchases WHERE order_id = '$id'");
        header("Location: /admin/orders");
    }

    public function getStatusOrder($id)
    {
        if (empty($id))
        {
            return false;
        }
        $query = "SELECT o.status_id, s.id, s.name FROM orders o INNER JOIN statuses s ON o.status_id = s.id WHERE o.id='$id' LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getStatuses()
    {
        $query = "SELECT id, name FROM statuses";
        $this->query($query);
        return $this->results();
    }

    public function updateStatus($order_id, $status_id)
    {
        if (empty($order_id) || empty($status_id))
        {
            return false;
        }
        $query = "UPDATE orders SET status_id = $status_id WHERE id='$order_id'";
        $this->query($query);
    }

}