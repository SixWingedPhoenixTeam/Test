<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'db_connect.php';
/*include_once 'order.php';
include_once '../configs/orders_config.php';*/

class Orders {

    private $orders = array();

    public function add_order($order) {
        array_push($this->orders, $order);
    }

    public function get_order($index) {
        return $this->orders[$index];
    }

    public function orders_query($page, $sort_by, $query) {
        if ($sort_by == null) {
            $sort_by = 'id';
        }

        if ($page == null) {
            $page = 0;
        }

        if ($query == null) {
            $query = '';
        }

        $conn = new Conn ();
        $sql = file_get_contents(dirname(dirname(__FILE__))."/queries/get_order.sql");
        $prep = $conn->prepare($sql);
        if ($prep->execute([
                    $query,
                    $sort_by,
                    ORDERS_PER_PAGE,
                    $page * ORDERS_PER_PAGE
                ])) {
            while ($row = $prep->fetch()) {
                $order = new Order;
                $order->credentials = $row['credentials'];
                $order->adress = $row['address'];
                $order->flavour = $row['flavour'];
                $order->amount = $row['amount'];
                $this->add_order($order);
            }
        }
        $conn->disconnect();
    }

}
