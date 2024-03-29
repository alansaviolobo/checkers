<?php
class Order_m extends Model {
	function orders_list() {
		$this->db->select ( '*' );
		$this->db->from ( 'orders' );
		$this->db->where_in ( 'status', 'open' );
		$this->db->like ( 'source', $this->session->userdata ( 'source_type' ), 'after' );
		$this->db->order_by ( 'source', 'asc' );

		return $this->db->get ()->result_array ();
	}

	function orders_list_source($source) {
		$this->db->where ( 'source', $source );
		$this->db->where_in ( 'status', 'open' );

		return $this->db->get ( 'orders' )->result_array ();
	}

	function new_order($menu, $source, $quantity, $kot) {
		$query_bill = $this->db->get_where ( 'bill', array ('source' => $source, 'paid' => 'print' ) )->row ();
		if ($query_bill == null) {
			$query_menu = $this->db->get_where ( 'menu', array ('name' => $menu ) )->row ();
			$query_ticket = $this->db->get_where ( 'ticket', array ('menu' => $menu ) )->last_row ();

			$this->db->where ( 'source', $source );
			$this->db->where ( 'menu', $menu );
			$this->db->where_in ( 'status', 'open' );

			$orders = $this->db->get ( 'orders' )->row ();

			if ($query_menu->section == 'Bar') {
				if ($query_ticket != null) {
					if ($query_ticket->total == 0) {
						return 'Alert. No Quantity To Add. Items Remaining - 0';
					} else if ($query_ticket->total <= 7 && $query_ticket->total > 0) {
						$this->new_order_details ( $query_menu, $query_ticket, $orders, $menu, $source, $quantity, $kot );
						return $message = 'Alert. Quantity Remaining, ' . $quantity;
					} else if ($query_ticket->total > 7) {
						$this->new_order_details ( $query_menu, $query_ticket, $orders, $menu, $source, $quantity, $kot );
					} else if ($quantity > $query_ticket->total) {
						return 'Alert. There Is No Enough Quantity Remaining.';
					}
				} else {
					return 'No Items Purchased For ' . $menu;
				}
			} else if ($query_menu->section == 'Beverages' || $query_menu->section == 'Food') {
				$this->new_order_details ( $query_menu, $query_ticket, $orders, $menu, $source, $quantity, $kot );
			}
		} else {
			return 'Bill Already Printed. Please Close the Bill and start new one.';
		}

	}

	function new_order_details($query_menu, $query_ticket, $orders, $menu, $source, $quantity, $kot) {
		if ($orders == null) {
			$status = 'open';
			$data = array ('menu' => $menu, 'quantity' => $quantity, 'cost' => intval ( $query_menu->cost ) * intval ( $quantity ), 'source' => $source, 'status' => $status, 'kot_numbers' => $kot );
			$this->db->insert ( 'orders', $data );
		} else {
			$quantity_new = intval ( $quantity ) + intval ( $orders->quantity );
			$data = array ('quantity' => $quantity_new, 'kot_numbers' => "$orders->kot_numbers,$kot", 'cost' => intval ( $query_menu->cost ) * intval ( $quantity_new ) );

			$this->db->where ( 'id', $orders->id );
			$this->db->update ( 'orders', $data );
		}

		if ($query_menu->section == 'Bar') {
			$data = array ('total' => intval ( $query_ticket->total ) - intval ( $quantity ) );
			$this->db->where ( 'menu', $menu );
			$this->db->update ( 'ticket', $data );
		}
	}

	function order_delete($id) {
		$query_order = $this->db->get_where ( 'orders', array ('id' => $id ) )->row ();
		$query_menu = $this->db->get_where ( 'menu', array ('name' => $query_order->menu ) )->row ();
		$query_ticket = $this->db->get_where ( 'ticket', array ('menu' => $query_order->menu ) )->last_row ();

		if ($query_menu != null && $query_ticket != null && $query_menu->section == 'Bar') {
			$data = array ('total' => intval ( $query_ticket->total ) + intval ( $query_order->quantity ) );
			$this->db->where ( 'menu', $query_order->menu );
			$this->db->update ( 'ticket', $data );
		}

		$this->db->where ( 'id', $id );
		if ($this->db->delete ( 'orders' )) {
			return 'Order Item Deleted Successfully.';
		}
		return null;
	}

	function create_bill($discount, $tax, $waiter, $source, $name) {
		$this->db->where ( 'source', $source );
		$this->db->where_in ( 'status', 'open' );
		$query_order = $this->db->get ( 'orders' )->result_array ();

		$query_menu = $this->db->get ( 'menu' )->result_array ();

		$query_bill = $this->db->get_where ( 'bill', array ('source' => $source, 'paid' => 'print' ) )->row ();
		if ($query_bill == null) {
			$subtotal = intval ( $this->session->userdata ( 'subtotal' ) );
			$discount = $subtotal * ($discount / 100);
			$subtotal = $subtotal - $discount;
			$tax = $subtotal * ($tax / 100);
			$total = $subtotal + $tax;
			$beverages = 0;
			$bar = 0;
			$food = 0;
			foreach ( $query_order as $q_o ) {
				foreach ( $query_menu as $q_m ) {
					if ($q_o ['menu'] === $q_m ['name']) {
						switch ($q_m ['section']) {
							case 'Beverages' :
								$beverages = $beverages + intval ( $q_o ['cost'] );
								break;
							case 'Bar' :
								$bar = $bar + intval ( $q_o ['cost'] );
								break;
							case 'Food' :
								$food = $food + intval ( $q_o ['cost'] );
								break;
						}
					}
				}
			}
			$disp_no_cat = stripos ( $source, 'room' ) === false ? 'rest' : 'room';
			$data = array ('beverages' => $beverages, 'bar' => $bar, 'food' => $food, 'subtotal' => $this->session->userdata ( 'subtotal' ), 'discount' => $discount, 'tax' => $tax, 'total' => $total, 'paid' => 'print', 'name' => $name, 'waiter' => $waiter, 'disp_no_cat' => $disp_no_cat, 'disp_no_num' => 1 + intval ( current ( $this->db->select_max ( 'disp_no_num' )->from ( 'bill' )->where ( 'disp_no_cat', $disp_no_cat )->get ()->result_object () )->disp_no_num ), 'source' => $source );

			$this->db->insert ( 'bill', $data );
			$this->db->where ( array ('source' => $source, 'status' => 'open' ) )->update ( 'orders', array ('bill_number' => $this->db->insert_id () ) );
		}

		return $query_order;
	}

	function bill_details($source) {
		$data = array ('source' => $source, 'paid' => 'print' );
		return $this->db->get_where ( 'bill', $data )->row ();
	}

	function close_bill($source, $paid) {
		$query_bill = $this->db->get_where ( 'bill', array ('source' => $source, 'paid' => 'print' ) )->row ();
		if ($query_bill == null) {
			return "Please Print The Bill Before Closing";
		} else {
			$this->db->where ( array ('source' => $source, 'status' => 'open' ) )->update ( 'orders', array ('status' => 'close' ) );

			$this->db->where ( array ('source' => $source, 'paid' => 'print' ) )->update ( 'bill', array ('paid' => $paid ) );

			return "Bill Closed Successfully.";
		}
	}

	function orders_source() {
		$this->db->select ( 'source' );
		$this->db->where ( 'paid', 'room' );
		$this->db->from ( 'bill' );
		return $this->db->get ()->result_array ();
	}

	function room_payment($source, $payment) {
		$this->db->where ( array ('source' => $source, 'paid' => 'room' ) )->update ( 'bill', array ('paid' => $payment ) );
		return "Bill Closed Successfully.";
	}

	function bill_details_from_id($billId) {
		$details = $this->db->select ( '*' )->from ( 'bill' )->join ( 'orders', 'number = bill_number', 'left outer' )->where ( 'number', $billId )->get ()->result_array ();
		if (! count ( $details ))
			return 0;
		$bill = $kots = null;
		foreach ( $details as $detail ) {
			$bill->number = $detail ['number'];
			$bill->date = $detail ['dated'];
			$bill->subtotal = $detail ['subtotal'];
			$bill->discount = $detail ['discount'];
			$bill->tax = $detail ['tax'];
			$bill->paymentmode = $detail ['paid'];
			$bill->dispnocat = $detail ['disp_no_cat'];
			$bill->dispnonum = $detail ['disp_no_num'];
			$kots .= $detail ['kot_numbers'] . ',';
			if (is_null ( $detail ['id'] ))
				continue;
			$bill->items [$detail ['id']]->name = $detail ['menu'];
			$bill->items [$detail ['id']]->quantity = $detail ['quantity'];
			$bill->items [$detail ['id']]->cost = $detail ['cost'];
		}
		$kots = array_unique ( array_filter ( explode ( ',', $kots ) ) );
		sort ( $kots );
		$bill->kots = implode ( ',', $kots );
		return $bill;
	}
}
?>
