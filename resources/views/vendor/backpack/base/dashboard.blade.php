@extends(backpack_view('blank'))

@section('header')
<section class="container-fluid header">
  <h2>
    <span class="title text-capitalize">Dashboard</span>
  </h2>
  <small><a href="{{ url('admin/orders/create') }}" class="btn btn-add btn-sm"><i class="la la-plus"></i> New Order</a></small>
</section>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row flex-row mb-3">
    <div class="col-md-3">
      <div class="card dashboard text-center">
        <div class="card-header">
          Total Sales
        </div>
        <div class="card-body">
          <h3>${{ number_format($totalSalesOnline, 2) }}</h3>
          <p class="card-text">via CC or online orders</p>
          <p class="card-text stat"><span>27.9% Up</span> from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card dashboard text-center">
        <div class="card-header">
          Total Sales
        </div>
        <div class="card-body">
          <h3>${{ number_format($totalSalesManual, 2) }}</h3>
          <p class="card-text">via Manual Payments</p>
          <p class="card-text stat"><span>26.6% Up</span> from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card dashboard text-center">
        <div class="card-header">
          Dry Ice Unit Sold
        </div>
        <div class="card-body">
          <h3>{{ number_format($dryIceUnitSold, 2) }} lbs</h3>
          <p class="card-text stat"><span>27.0% Up</span> from last year</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card dashboard text-center">
        <div class="card-header">
          Styrofoam Box Unit Sold
        </div>
        <div class="card-body">
          <h3>{{ $styrofoamBoxUnitSold }} boxes</h3>
          <p class="card-text stat"><span>17.4% Up</span> from last year</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="table">
        <div class="table-header">
          Last orders
        </div>
        <table>
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
              <td class="status">{{ $order->status }}</td>
              <td>{{ $order->total_cost }}</td>
              <td>{{ $order->origin }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-6">
      <div class="table mb-3">
        <div class="table-header">
          CC Orders
        </div>
        <table>
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

      <div class="table">
        <div class="table-header">
          Recurring Orders
        </div>
        <table>
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
              <td class="status">{{ $order->status }}</td>
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
@endsection

@section('after_styles')
@vite(['resources/scss/app.scss', 'resources/css/custom.css'])
@endsection

@section('after_scripts')
@vite(['resources/js/app.js'])
@endsection