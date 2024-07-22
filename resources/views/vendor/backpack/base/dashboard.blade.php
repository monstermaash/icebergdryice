@extends(backpack_view('blank'))

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('header')
@include('vendor.backpack.base.inc.header')
<section class="container-fluid">
  <h2>
    <span class="text-capitalize">Dashboard</span>
    <small><a href="{{ url('admin/orders/create') }}" class="btn btn-sm btn-primary">+ New Order</a></small>
  </h2>
</section>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row mb-3">
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Total Sales</h5>
          <p class="card-text">${{ number_format($totalSalesOnline, 2) }} via CC or online orders</p>
          <p class="card-text">27.9% Up from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Total Sales</h5>
          <p class="card-text">${{ number_format($totalSalesManual, 2) }} via Manual Payments</p>
          <p class="card-text">26.6% Up from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Dry Ice Unit Sold</h5>
          <p class="card-text">{{ number_format($dryIceUnitSold, 2) }} lbs</p>
          <p class="card-text">27.0% Up from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Styrofoam Box Unit Sold</h5>
          <p class="card-text">{{ $styrofoamBoxUnitSold }} boxes</p>
          <p class="card-text">17.4% Up from last year</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Last orders
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Order #</th>
                <th>Customer</th>
                <th>Delivery Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Origin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($lastOrders as $order)
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->delivery_date }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->total_cost }}</td>
                <td>{{ $order->origin }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-3">
        <div class="card-header">
          CC Orders
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Customer</th>
                <th>Delivery Date</th>
                <th>Ice</th>
                <th>Box</th>
                <th>Address</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($ccOrders as $order)
              <tr>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->delivery_date }}</td>
                <td>{{ $order->amount_of_ice }}</td>
                <td>{{ $order->amount_of_boxes }}</td>
                <td>{{ $order->address }}</td>
                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Recurring Orders
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Order #</th>
                <th>Customer</th>
                <th>Delivery Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Origin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($recurringOrders as $order)
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->delivery_date }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->total_cost }}</td>
                <td>{{ $order->origin }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection