@extends(backpack_view('blank'))

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('header')
@include('vendor.backpack.base.inc.header')
<section class="container-fluid">
  <h2>
    <span class="text-capitalize">Inventory</span>
    <small><a href="{{ url('admin/inventory/create') }}" class="btn btn-sm btn-primary">+ Add Inventory</a></small>
  </h2>
</section>
@endsection

@section('content')
<div class="container">
  <div class="row mb-3">
    <div class="col-md-6">
      <div class="d-flex align-items-center">
        <span>Showing {{ $entries->count() }} of {{ $entries->total() }} entries</span>
        <form action="{{ url()->current() }}" method="GET" class="ml-3">
          <button type="submit" class="btn btn-sm btn-secondary">Reset</button>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <form action="{{ url()->current() }}" method="GET" class="form-inline float-right">
        <div class="form-group mx-sm-3 mb-2">
          <label for="search" class="sr-only">Search</label>
          <input type="text" class="form-control" id="search" name="search" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>
  </div>

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
        <th>Actions</th>
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
        <td>
          {!! $entry->getPreviewButton($crud) !!}
          {!! $entry->getEditButton($crud) !!}
          {!! $entry->getDeleteButton($crud) !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="{{ url()->current() }}" method="GET">
        <div class="form-group">
          <label for="per_page">Entries per page:</label>
          <select name="per_page" id="per_page" class="form-control" onchange="this.form.submit()">
            <option value="10" {{ request()->per_page == 10 ? 'selected' : '' }}>10</option>
            <option value="25" {{ request()->per_page == 25 ? 'selected' : '' }}>25</option>
            <option value="50" {{ request()->per_page == 50 ? 'selected' : '' }}>50</option>
            <option value="100" {{ request()->per_page == 100 ? 'selected' : '' }}>100</option>
          </select>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      {{ $entries->appends(request()->except('page'))->links() }} <!-- Pagination links -->
    </div>
  </div>
</div>

@endsection

@section('after_scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection