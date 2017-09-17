<div>
    <table class="table table-inverse">
        <thead>
            <tr>
                <th>#</th>
                <th><a>Credentials</a></th>
                <th><a>Address</a></th>
                <th><a>Flavour</a></th>
                <th><a>Amount</a></th>
                <th><a>Cost</a></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $orders = new Orders;
            $orders->orders_query($_GET['p'], $_GET['s'], $_GET['q']); //page, sort, query

            for ($i = 0; $i < ORDERS_PER_PAGE; $i++) {
                $order = $orders->get_order($i);
                $credentials = $order->credentails;
                $address = $order->address;
                $flavour = $order->flavour;
                $amount = $order->amount;
                $cost = $order->getCost();
                include 'list.one.php';
            }
            ?>
        </tbody>
    </table>
</div>