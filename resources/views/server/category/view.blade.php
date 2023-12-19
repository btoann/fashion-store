@extends('server.layout.master')

@section('title', 'Categories')


@section('body')

<div class="kt-pagebody">

    <div class="content-wrapper">
        <div class="content-left">
          <button class="btn btn-default btn-block mg-b-20" id="insert_category" data-href="{{ route('category_create') }}" style="cursor: pointer">Add new</button>

            <script>
                $(document).ready(function () {
                    
					$(document).on('click', '#insert_category', function (event) {
						event.preventDefault();

                        var href = $(this).attr('data-href');
						create_view(href);
                    });

					function create_view(href)
					{
						$.ajax({
							// type: "method",
							url: href,
							// data: "data",
							// dataType: "dataType",
							success: function (response) {
								$('#category_fetch-response').html(response);
							},
							error: function (data) {
							}
						});
						return;
					}

                });
            </script>

          <label class="content-left-label">Options</label>
          <ul class="nav mg-t-1-force">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>...</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>...</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>...</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>...</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>...</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- content-left -->

        <div class="content-body" id="category_fetch-response">
          <div class="content-body-header">
            <div class="d-flex">
              <div class="btn-group mg-b-0 mg-r-10 hidden-lg-up">
                <button id="btnContentLeft" class="btn btn-secondary"><i class="icon ion-navicon-round tx-20"></i></button>
              </div><!-- btn-group -->

              <div class="content-checkall">
                <label class="ckbox mg-b-0">
                  <input type="checkbox"><span></span>
                </label>
              </div>
              <div class="btn-group mg-b-0 hidden-xs-down">
                <button class="btn btn-secondary"><i class="icon ion-ios-compose-outline tx-24"></i></button>
                <button class="btn btn-secondary" id="trash_data"><i class="icon ion-ios-trash-outline tx-20"></i></button>
                <button class="btn btn-secondary"><i class="icon ion-ios-pricetags-outline tx-20"></i></button>
              </div><!-- btn-group -->
            </div>
            <div class="mg-l-auto">
              <div class="btn-group mg-b-0">
                <button class="btn btn-secondary disabled"><i class="icon ion-ios-arrow-back tx-20"></i></button>
                <button class="btn btn-secondary"><i class="icon ion-ios-arrow-forward tx-20"></i></button>
              </div><!-- btn-group -->

              <div class="btn-group mg-b-0 mg-l-5">
                <button class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-20"></i></button>
              </div><!-- btn-group -->
            </div>
          </div><!-- content-body-header -->

          <table class="table table-striped mg-b-0 mg-t-20">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th>Name</th>
                <th class="hidden-xs-down">Description</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th class="wd-5p"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories['all'] as $category)
                    <tr>
                        <td class="valign-middle">
                            <label class="ckbox mg-b-0">
                                <input type="checkbox"><span></span>
                            </label>
                        </td>
                        <td>
                            <span class="pd-l-5">{{ $category->name }}</span>
                        </td>
                        <td class="hidden-xs-down">{!! $category->description ?? '<small><i>no description</i></small>' !!}</td>
                        <td>
                            <span class="pd-l-5">{{ $category->created_at ?? '...' }}</span>
                        </td>
                        <td>
                            <span class="pd-l-5">{{ $category->updated_at ?? '...' }}</span>
                        </td>
                        <td class="dropdown">
                            <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                            <div class="dropdown-menu dropdown-menu-right pd-10">
                                <nav class="nav nav-style-1 flex-column options_for_category" data-id="{{ $category->id }}">
                                    {{-- <a href="" class="nav-link">Info</a>
                                    <a href="" class="nav-link">Download</a>
                                    <a href="" class="nav-link">Rename</a>
                                    <a href="" class="nav-link">Move</a>
                                    <a href="" class="nav-link">Copy</a> --}}
                                    <a href="#" class="nav-link" data-option="edit">Edit</a>
                                    <a href="" class="nav-link" data-option="delete">Delete</a>
                                </nav>
                            </div><!-- dropdown-menu -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
            <script>
                $(document).ready(function () {
                    
					$(document).on('click', '.options_for_category a', function (event) {
						event.preventDefault();

                        var id = $(this).parent().attr('data-id'),
                            option = $(this).attr('data-option');

                        console.log(id, option);
                        switch (option) {
                            case 'edit':
						        edit_view(id);
                                break;
                            case 'delete':
						        delete_category(id);
                                break;
                            default:
                                break;
                        }
                    });

					function edit_view(id) {
						$.ajax({
							url: "administrator/categories/edit/" + id,
							success: function (response) {
								$('#category_fetch-response').html(response);
							},
							error: function (data) {
                                //console.log(data.responseText);
							}
						});
						return;
					}

                    function delete_category(id) {
						$.ajax({
							url: "administrator/categories/delete/" + id,
							success: function (response) {
								window.location.reload();
							},
							error: function (data) {
                                //console.log(data.responseText);
							}
						});
						return;
                    }

                });
            </script>

          </table>
        </div><!-- content-body -->
      </div><!-- content-wrapper -->

</div><!-- kt-pagebody -->

@endsection