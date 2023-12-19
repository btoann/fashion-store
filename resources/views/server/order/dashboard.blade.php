@extends('server.layout.master')

@section('title', 'Orders')


@section('body')

<div class="kt-pagebody">

    <div class="row row-sm">
      
      <div class="col-lg-12">
        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pd-b-0">
                <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Total order</h6>
                <h2 class="tx-lato tx-inverse">{{ $orders['sumQty'] }}</h2>
                <p class="tx-12"><span class="tx-success">Bills</span></p>
              </div><!-- card-body -->
              <div id="rs2" class="ht-50 ht-sm-70 mg-r--1"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pd-b-0">
                <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success">Total price sold</h6>
                <h2 class="tx-lato tx-inverse">{{ $orders['sumPrice'] }}</h2>
                <p class="tx-12"><span class="tx-success">USDs</span></p>
              </div><!-- card-body -->
              <div id="rs1" class="ht-50 ht-sm-70 mg-r--1"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pd-b-0">
                <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Total product sold</h6>
                <h2 class="tx-lato tx-inverse">{{ $orders['sumProduct'] }}</h2>
                <p class="tx-12"><span class="tx-success">Products</span></p>
              </div><!-- card-body -->
              <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

      </div><!-- col-8 -->

    </div><!-- row -->

    <span class="mg-10"></span>

    <div class="row row-sm">
      
      <div class="col-lg-8">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Order list</h6>
          <p class="mg-b-20 mg-sm-b-30">List of orders</p>

          <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </th>
                  <th>#</th>
                  <th>email</th>
                  <th>payment method</th>
                  <th>date</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($orders['all'] as $order)
                  <tr>
                    <td>
                      <label class="ckbox mg-b-0">
                        <input type="checkbox"><span></span>
                      </label>
                    </td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ ($order->payment_method == 1) ? 'COD': 'Paypal' }}</td>
                    <td>{{ $order->created_at }}</td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div><!-- card -->
      </div>
    </div>

</div><!-- kt-pagebody -->

@endsection