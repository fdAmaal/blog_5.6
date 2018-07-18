@extends('Backend.layout.master')

@section('title','Edit Category')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit Category</h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <br />

                                <div>

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="post-tab">
                                                <!---------edit form  -------------------------------------------------------------------------------------------------------------->
                                                <form class="form-horizontal form-label-left" method="post"  action="{{route('categories.update',$category->id)}}" novalidate>
                                                    @csrf
                                                    <input name="_method" value="PUT" type="hidden">

                                                    <!--Image---------------->
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="category">Image <span class="required">*</span></label>
                                                        <img src="{{asset('storage/img/'.$category->img)}}" class="col-md-6 col-sm-6 col-xs-12" alt="{{$category->img}}">
                                                    </div>

                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" value="{{$category->name}}" data-validate-words="1" name="name" placeholder="category name" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img">Image <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="img" name="img" value="{{$category->img}}" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="category">Active <span class="required">*</span></label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select name="active" class=form-control col-md-7 col-xs-12">
                                                                <option  value="1">Active</option>
                                                                <option  value="0">Passive</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <a href="posts"><button  class="btn btn-primary">Cancel</button></a>
                                                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>


                                            </div>



                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>




            </div>




        </div>
    </div>
    <!-- /page content -->

@endsection