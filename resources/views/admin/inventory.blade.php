@extends(backpack_view('blank'))

@section('header')
<section class="container-fluid header">
  <h2>
    <span class="title text-capitalize">Inventory</span>
  </h2>
  <small><a href="{{ url('admin/inventory/create') }}" class="btn btn-add btn-sm btn-primary"><i class="la la-plus"></i> Add Inventory</a></small>
</section>
@endsection

@section('content')
<div class="container-fluid">
  <!-- <div class="row flex-row mb-3">
    <div class="col-md-6">
      <div class="d-flex align-items-center">
        <span>Showing {{ $entries->count() }} of {{ $entries->total() }} entries</span>
        <form action="{{ url()->current() }}" method="GET" class="ml-3">
          <button type="submit" class="btn btn-sm btn-secondary">Reset</button>
        </form>
      </div>
    </div>
  </div> -->

  <div class="row flex-row">
    <div class="col-md-8">
      <div class="card text-center">
        <div class="card-header">
          Month
        </div>
        <div class="card-body inventory">
          <div class="d-flex align-items-center">
            <div class="stat">
              <h5><span>1,000 lbs</span> in volume</h5>
              <h5><span>$30,000</span> in sales</h5>
              <h5><span>$25,000</span> in revenue</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-header">
          On Hand
        </div>
        <div class="card-body inventory">
          <div class="stat right">
            <h5><span>{{ $onHand }} lbs</span> Dry Ice on hand</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card text-center">
        <div class="card-header">
          Today
        </div>
        <div class="card-body inventory">
          <div class="d-flex align-items-center">
            <div class="stat">
              <h5><span>50 lbs</span> in volume</h5>
              <h5><span>$1,500</span> in sales</h5>
              <h5><span>$1,200</span> in revenue</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-header">
          To Be Received
        </div>
        <div class="card-body inventory">
          <div class="stat right">
            <h5><span>{{ $toBeReceived }} lbs</span> Dry Ice to be received</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table>
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
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-3">
      <form action="{{ url()->current() }}" method="GET">
        <div class="form-group entries">
          <label for="per_page">entries per page</label>
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

@section('after_styles')
@vite(['resources/scss/app.scss', 'resources/css/custom.css'])
@endsection

@section('after_scripts')
@vite(['resources/js/app.js'])
@endsection