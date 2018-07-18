@extends('Backend.layout.master')

@section('title','New Post')
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
                    <h2>New Post</h2>
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
                    <br />
					
                            <div>

                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="post-tab" role="tab" data-toggle="tab" aria-expanded="true">Post</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="Out-Source" data-toggle="tab" aria-expanded="false">Out-Source</a>
                                    </li>
                                    
                                  </ul>
                                  <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="post-tab">
<!---------in-source Tab  -------------------------------------------------------------------------------------------------------------->
                                        <form method="post" action="{{route('posts.store')}}" class="form-horizontal form-label-left" >
                                            {{csrf_field()}}

                                            <!------Category----------->
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="category">Category <span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select name="category" class=form-control col-md-7 col-xs-12">
                                                        @foreach($categories as $key=> $category)
                                                            <option  value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <!-----------Title---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" placeholder="post title" required="required" type="text">
                                                </div>
                                            </div>

                                            <!-----------Description---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Description <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="Description" required="required" name="Description" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>

                                            <!-----------Content---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Content <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="content" required="required" name="content" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>

                                            <!-----------Image---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Image">Post Image <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="img" id="Image" name="Image" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                                <!------Active----------->
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="active">Active <span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select name="active" class=form-control col-md-7 col-xs-12">
                                                        <option  value="1">Active</option>
                                                        <option  value="0">Passive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-----------Source URL---------------------------->
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="hidden" value="http://localhost" id="Source" name="Source" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                                <!-----------permalink---------------------------->
                                                <div class="item form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="hidden" value="http://localhost" id="permalink" name="permalink" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>

                                            <!-----------Author First Name---------------------------->
                                            <div class="item form-group">

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="authorFname" value="admin" type="hidden" name="authorFname"  class="optional form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------Author Last Name---------------------------->
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="authorLname" value="admin" type="hidden"  name="authorLname"  required="required" class="form-control col-md-7 col-xs-12" required="required">
                                                </div>
                                            </div>

                                            <!-----------Author Image---------------------------->
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input value="admin" type="hidden"  id="authImg" name="authImg" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------Buttons---------------------------->
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <a href="posts"><button class="btn btn-primary">Cancel</button></a>
                                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>



                                    </div>

 
<!---------Out-source Tab  -------------------------------------------------------------------------------------------------------------->                                   
                                    <div role="tabpanel"  class="tab-pane fade" id="tab_content2" aria-labelledby="Out-Source">
                                        <form method="post" action="{{route('posts.create')}}" class="form-horizontal form-label-left">

                                            <!-----------Category---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Category <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" list="category" id="category" name="category" required="required" class="form-control col-md-7 col-xs-12">
                                                    <datalist id="category">
                                                        <option value="Internet Explorer">
                                                        <option value="Firefox">
                                                        <option value="Chrome">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                    </datalist>
                                                </div>
                                            </div>

                                            <!-----------Title---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" placeholder="post title" required="required" type="text">
                                                </div>
                                            </div>

                                            <!-----------Description---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Description <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="Description" required="required" name="Description" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>

                                            <!-----------Content----------------------------
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Content">Content <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="Content" required="required" name="Content" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>-->

                                            <!-----------Image---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Image">Post Image <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="img" id="Image" name="Image" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------Source URL---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Source">Source URL <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="url" id="Source" name="Source" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------Author First Name---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="authorFname">Author First Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="authorFname" type="text" name="authorFname"  class="optional form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------permalink---------------------------->
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="hidden" value="http://localhost" id="permalink" name="permalink" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>


                                            <!-----------Author Last Name---------------------------->
                                            <div class="item form-group">
                                                <label for="authorLname" class="control-label col-md-3">Author Last Name <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="authorLname" type="text" name="authorLname"  required="required" class="form-control col-md-7 col-xs-12" required="required">
                                                </div>
                                            </div>

                                            <!-----------Author Image---------------------------->
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="authImg">Author Image <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="img" id="authImg" name="authImg" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!-----------Buttons---------------------------->
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <a href="posts"><button class="btn btn-primary">Cancel</button></a>
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