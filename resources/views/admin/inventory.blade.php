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
<div class="row">
  <!-- Month Cards -->
  <div class="col-md-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Month</h5>
        <div class="d-flex justify-content-between">
          <div class="p-2">
            <p><strong>1,000 lbs</strong></p>
            <p>IN VOLUME</p>
          </div>
          <div class="p-2">
            <p><strong>$30,000</strong></p>
            <p>IN SALES</p>
          </div>
          <div class="p-2">
            <p><strong>$25,000</strong></p>
            <p>IN REVENUE</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- On Hand Card -->
  <div class="col-md-4">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">On Hand</h5>
        <p><strong>1,405 lbs</strong></p>
        <p>DRY ICE ON HAND</p>
      </div>
    </div>
  </div>

  <!-- Today Cards -->
  <div class="col-md-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Today</h5>
        <div class="d-flex justify-content-between">
          <div class="p-2">
            <p><strong>50 lbs</strong></p>
            <p>IN VOLUME</p>
          </div>
          <div class="p-2">
            <p><strong>$1,500</strong></p>
            <p>IN SALES</p>
          </div>
          <div class="p-2">
            <p><strong>$1,200</strong></p>
            <p>IN REVENUE</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- To Be Received Card -->
  <div class="col-md-4">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">To Be Received</h5>
        <p><strong>1,200 lbs</strong></p>
        <p>DRY ICE TO BE RECEIVED</p>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md-12">
    @include('crud::inc.grouped_errors')
    <table id="crudTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>Start of Day</th>
          <th>Warehouse Orders</th>
          <th>Praxair Supply Orders</th>
          <th>Online Orders</th>
          <th>To Be Received</th>
          <th>End of Day</th>
          <th>Sublimation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>07/10/2024</td>
          <td>1405</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>1405</td>
          <td>56</td>
        </tr>
        <tr>
          <td>07/09/2024</td>
          <td>1349</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>1349</td>
          <td>54</td>
        </tr>
        <!-- Add more static rows as needed -->
      </tbody>
    </table>
  </div>
</div>
@endsection