@extends(backpack_view('blank'))

@section('header')
<section class="container-fluid">
  <h2>
    <span class="text-capitalize">Inventory</span>
    <small><a href="{{ url('admin/inventory/create') }}" class="btn btn-sm btn-primary">Add Inventory</a></small>
  </h2>
</section>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <!-- Month Card -->
      <div class="card mb-3 d-flex justify-content-between">
        <div class="card-body">
          <h5 class="card-title">Month</h5>
          <p class="card-text">1,000 lbs in volume</p>
          <p class="card-text">$30,000 in sales</p>
          <p class="card-text">$25,000 in revenue</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <!-- On Hand Card -->
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">On Hand</h5>
          <p class="card-text">{{ $onHand }} lbs</p>
          <p class="card-text">Dry Ice on hand</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <!-- Today Card -->
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Today</h5>
          <p class="card-text">50 lbs in volume</p>
          <p class="card-text">$1,500 in sales</p>
          <p class="card-text">$1,200 in revenue</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <!-- To Be Received Card -->
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">To Be Received</h5>
          <p class="card-text">{{ $toBeReceived }} lbs</p>
          <p class="card-text">Dry Ice to be received</p>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Start of Day</th>
        <th>Warehouse Orders</th>
        <th>Praxair Supply Orders</th>
        <th>Online Orders</th>
        <th>To be Received</th>
        <th>End of Day</th>
        <th>Sublimation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($entries as $entry)
      <tr>
        <td>{{ $entry->date }}</td>
        <td>{{ $entry->start_of_day }}</td>
        <td>{{ $entry->warehouse_orders }}</td>
        <td>{{ $entry->praxair_supply_orders }}</td>
        <td>{{ $entry->online_orders }}</td>
        <td>{{ $entry->to_be_received }}</td>
        <td>{{ $entry->end_of_day }}</td>
        <td>{{ $entry->sublimation }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection