@extends('server.layout.master')

@section('title', 'Categories')


@section('body')

<div class="kt-pagebody">

    <div class="row row-sm">
        <div class="col-lg-4">
          <div class="card pd-20">
            <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-15">TOTAL SOLD</h6>
            <div class="d-flex mg-b-10">
              <div class="bd-r pd-r-10">
                <label class="tx-12">&ensp;</label>
                <p class="tx-gray tx-12 pd-t-2">Categories</p>
                <p class="tx-gray tx-12 pd-t-2">Products</p>
              </div>
              <div class="bd-r pd-x-10">
                <label class="tx-12">Today</label>
                <p class="tx-lato tx-inverse tx-bold">4</p>
                <p class="tx-lato tx-inverse tx-bold">200</p>
              </div>
              <div class="bd-r pd-x-10">
                <label class="tx-12">This Week</label>
                <p class="tx-lato tx-inverse tx-bold">6</p>
                <p class="tx-lato tx-inverse tx-bold">500</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">This Month</label>
                <p class="tx-lato tx-inverse tx-bold">10</p>
                <p class="tx-lato tx-inverse tx-bold">7000</p>
              </div>
            </div><!-- d-flex -->
            <div class="progress mg-b-10">
              <div class="progress-bar wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">KPI (60%)</div>
            </div>
            <p class="tx-12 mg-b-0">Total selling categories's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="card pd-20 bg-app-primary bd-0 tx-white-6">
            <h6 class="tx-12 tx-uppercase tx-white mg-b-15">MOST SOLD CATEGORY</h6>
            <div class="d-flex mg-b-10">
              <div class="bd-r bd-white-2 pd-r-10">
                <label class="tx-12">&ensp;</label>
                <p class="tx-gray tx-12 pd-t-2">Category</p>
                <p class="tx-gray tx-12 pd-t-2">Products</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">Today</label>
                <p class="tx-lato tx-white tx-bold">Category 1</p>
                <p class="tx-lato tx-white tx-bold">98</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">This Week</label>
                <p class="tx-lato tx-white tx-bold">Category 2</p>
                <p class="tx-lato tx-white tx-bold">112</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">This Month</label>
                <p class="tx-lato tx-white tx-bold">Category 3</p>
                <p class="tx-lato tx-white tx-bold">1067</p>
              </div>
            </div><!-- d-flex -->
            <div class="progress bg-white-2 mg-b-10">
              <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">(KPI) 50%</div>
            </div>
            <p class="tx-12 mg-b-0">List of best selling category's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="card pd-20 bg-dark bd-0 tx-white-6">
            <h6 class="tx-12 tx-uppercase tx-white mg-b-15">LEAST SOLD CATEGORY</h6>
            <div class="d-flex mg-b-10">
              <div class="bd-r bd-white-2 pd-r-10">
                <label class="tx-12">&ensp;</label>
                <p class="tx-gray tx-12 pd-t-2">Category</p>
                <p class="tx-gray tx-12 pd-t-2">Products</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">Today</label>
                <p class="tx-lato tx-white tx-bold">Category 4</p>
                <p class="tx-lato tx-white tx-bold">9</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">This Week</label>
                <p class="tx-lato tx-white tx-bold">Category 5</p>
                <p class="tx-lato tx-white tx-bold">98</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">This Month</label>
                <p class="tx-lato tx-white tx-bold">Category 6</p>
                <p class="tx-lato tx-white tx-bold">516</p>
              </div>
            </div><!-- d-flex -->
            <div class="progress bg-white-2 mg-b-10">
              <div class="progress-bar bg-info  wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">(KPI) 30%</div>
            </div>
            <p class="tx-12 mg-b-0">List of worst selling category's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
        <div class="col-lg-4">
          <div class="card bg-gray-200 pd-20">
            <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-15">TOTAL CATEGORIES</h6>
            <div class="d-flex mg-b-10">
                <div class="bd-r pd-r-10">
                  <label class="tx-12">&ensp;</label>
                  <p class="tx-gray tx-12 pd-t-2">Category(es)</p>
                  <p class="tx-gray tx-12 pd-t-2">Products</p>
                </div>
                <div class="bd-r pd-x-10">
                <label class="tx-12">Total</label>
                <p class="tx-lato tx-inverse tx-bold">30</p>
                <p class="tx-lato tx-inverse tx-bold">600</p>
              </div>
              <div class="bd-r pd-x-10">
                <label class="tx-12">Most products</label>
                <p class="tx-lato tx-inverse tx-bold">Category 2</p>
                <p class="tx-lato tx-inverse tx-bold">98</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">Least products</label>
                <p class="tx-lato tx-inverse tx-bold">Category 9</p>
                <p class="tx-lato tx-inverse tx-bold">2</p>
              </div>
            </div><!-- d-flex -->
            <p class="tx-12 mg-b-0">Total categories's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="card pd-20 bg-gray-200 bd-0 tx-white-6">
            <h6 class="tx-12 tx-uppercase tx-white mg-b-15">MOST SOLD CATEGORY</h6>
            <div class="d-flex mg-b-10">
              <div class="bd-r bd-white-2 pd-r-10">
                <label class="tx-12">Today</label>
                <p class="tx-lato tx-white tx-bold">Category 1</p>
                <p class="tx-lato tx-white tx-bold">98</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">This Week</label>
                <p class="tx-lato tx-white tx-bold">Category 2</p>
                <p class="tx-lato tx-white tx-bold">112</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">This Month</label>
                <p class="tx-lato tx-white tx-bold">Category 3</p>
                <p class="tx-lato tx-white tx-bold">1067</p>
              </div>
            </div><!-- d-flex -->
            <p class="tx-12 mg-b-0">List of best selling category's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="card pd-20 bg-gray-200 bd-0 tx-white-6">
            <h6 class="tx-12 tx-uppercase tx-white mg-b-15">LEAST SOLD CATEGORY</h6>
            <div class="d-flex mg-b-10">
              <div class="bd-r bd-white-2 pd-r-10">
                <label class="tx-12">Today</label>
                <p class="tx-lato tx-white tx-bold">Category 4</p>
                <p class="tx-lato tx-white tx-bold">9</p>
              </div>
              <div class="bd-r bd-white-2 pd-x-10">
                <label class="tx-12">This Week</label>
                <p class="tx-lato tx-white tx-bold">Category 5</p>
                <p class="tx-lato tx-white tx-bold">98</p>
              </div>
              <div class="pd-l-10">
                <label class="tx-12">This Month</label>
                <p class="tx-lato tx-white tx-bold">Category 6</p>
                <p class="tx-lato tx-white tx-bold">516</p>
              </div>
            </div><!-- d-flex -->
            <p class="tx-12 mg-b-0">List of worst selling category's products</p>
          </div><!-- card -->
        </div><!-- col-4 -->
    </div><!-- row -->

</div><!-- kt-pagebody -->

@endsection