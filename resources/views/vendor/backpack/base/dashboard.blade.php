@extends(backpack_view('blank'))

@section('content')
<div class="row">
  <h1 class="mt-4">Dashboard</h1>
  <div class="col-md-3">
    <div class="card text-center h-100">
      <div class="card-body">
        <h5 class="card-title">Total Sales</h5>
        <p class="card-text">$41.5K</p>
        <p class="card-text"><small class="text-muted">via CC or online orders</small></p>
        <p class="card-text text-success">27.9% Up from last year</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center h-100">
      <div class="card-body">
        <h5 class="card-title">Total Sales</h5>
        <p class="card-text">$35.2K</p>
        <p class="card-text"><small class="text-muted">via Manual Payments</small></p>
        <p class="card-text text-success">26.6% Up from last year</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center h-100">
      <div class="card-body">
        <h5 class="card-title">Dry Ice Unit Sold</h5>
        <p class="card-text">1,405 lbs</p>
        <p class="card-text text-success">27.0% Up from last year</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center h-100">
      <div class="card-body">
        <h5 class="card-title">Styrofoam Box Unit Sold</h5>
        <p class="card-text">142 boxes</p>
        <p class="card-text text-success">17.4% Up from last year</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row mt-5">
        <div class="col-md-6">
          <h2>Last orders</h2>
          <table class="table table-striped">
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
              <tr>
                <td>00002</td>
                <td>Chris</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$316.25</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>00003</td>
                <td>Dr. Hong</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$405.18</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00004</td>
                <td>Diane</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$42.18</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00005</td>
                <td>Innovatek</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$61.68</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>00006</td>
                <td>Speedy</td>
                <td>07/10/2024</td>
                <td class="text-success">Valid</td>
                <td>$277.568</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00007</td>
                <td>Kintetsu</td>
                <td>07/10/2024</td>
                <td class="text-success">Valid</td>
                <td>$532.68</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>00008</td>
                <td>Glover</td>
                <td>07/10/2024</td>
                <td class="text-success">Valid</td>
                <td>$150.18</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00009</td>
                <td>Chris</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$316.25</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>00010</td>
                <td>Dr. Hong</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$405.18</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00011</td>
                <td>Diane</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$42.18</td>
                <td>Manual</td>
              </tr>
              <tr>
                <td>00012</td>
                <td>Innovatek</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$61.68</td>
                <td>Online</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <h2>CC orders</h2>
          <table class="table table-striped">
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
              <tr>
                <td>Chidinma</td>
                <td>08/23/2024</td>
                <td>10</td>
                <td>0</td>
                <td>3414 King Edward Ave, Vancouver (V6T1M3)</td>
                <td class="actions">
                  <button class="btn btn-primary btn-sm">View</button>
                </td>
              </tr>
              <tr>
                <td>David Lavallee</td>
                <td>07/31/2024</td>
                <td>10</td>
                <td>1</td>
                <td>PO Box 2427, GARIBALDI HIGHLAN (V0N1T0)</td>
                <td class="actions">
                  <button class="btn btn-primary btn-sm">View</button>
                </td>
              </tr>
              <tr>
                <td>Talitha</td>
                <td>07/15/2024</td>
                <td>12</td>
                <td>0</td>
                <td>Day care and out of school 7505 Arbutus Street, Vancouver (V6P3T3)</td>
                <td class="actions">
                  <button class="btn btn-primary btn-sm">View</button>
                </td>
              </tr>
            </tbody>
          </table>

          <h2 class="mt-5">Recurring orders</h2>
          <table class="table table-striped">
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
              <tr>
                <td>00004</td>
                <td>Diane</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$42.18</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>00005</td>
                <td>Innovatek</td>
                <td>07/09/2024</td>
                <td class="text-success">Valid</td>
                <td>$61.68</td>
                <td>Online</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection