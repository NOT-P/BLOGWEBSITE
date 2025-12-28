@extends('layout.admin-app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Category</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Fill The Form</h4>
                            <hr>

                        <form>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Category Name</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div> 
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Please select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div> 
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                                </div>

                            </div>

                        </form>

                    </div> 
                </div> 
            </div>
        </div>
        <!-- end row-->

    </div> 
@endsection
