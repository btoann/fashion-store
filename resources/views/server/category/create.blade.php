
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Create</h6>
    <p class="mg-b-20 mg-sm-b-30">Create new category</p>

    <div class="form-layout">
        <form action="{{ route('category_insert') }}" method="post">
            @csrf
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="name" placeholder="">
                    </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Description: </label>
                        <textarea rows="4" class="form-control" name="description" placeholder="Enter your description"></textarea>
                    </div>
                </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-default mg-r-5" type="submit">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
        </form>
    </div><!-- form-layout -->
</div><!-- card -->