@extends('Backend.layout.master')

@section('title','Edit Post')
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
                <h2>Edit Post</h2>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <br />

                <div>

                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="post-tab">

                        <!---------edit form  -------------------------------------------------------------------------------------------------------------->
                        <form class="form-horizontal form-label-left" method="post"  action="{{route('posts.update',$post->id)}}" novalidate>
                          @csrf
                          <input name="_method" value="PUT" type="hidden">

                          <!--Image---------------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="category">Image <span class="required">*</span></label>
                          <img src="{{asset('storage/img/'.$post->img)}}" class="col-md-6 col-sm-6 col-xs-12" alt="{{$post->img}}">
                          </div>

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

                          <!------Title----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Title">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="Title" class="form-control col-md-7 col-xs-12" value="{{$post->title}}" data-validate-words="1" name="Title" placeholder="category name" required="required" type="text">
                            </div>
                          </div>

                          <!------Description----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="Description" name="Description" required="required" class="form-control col-md-7 col-xs-12">{{$post->description}}</textarea>
                            </div>
                          </div>

                          <!------Content----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Content <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="content" name="content" required="required" class="form-control col-md-7 col-xs-12">{{$post->content}}</textarea>
                            </div>
                          </div>

                          <!------Author_firstName----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Author_firstName">Author FirstName <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Author_firstName" name="Author_firstName" value="{{$post->author_firstName}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!------Author_lastName----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Author_lastName">Author LastName <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Author_lastName" name="Author_lastName" value="{{$post->author_lastName}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!------Author_img----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Author_img">Author img <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Author_img" name="Author_img" value="{{$post->author_img}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!------source_url----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="source_url">Source URL <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="source_url" name="source_url" value="{{$post->source_url}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!------perma_link----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img">Perma Link <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="perma_link" name="perma_link" value="{{$post->perma_link}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!------Img----------->
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img">Image <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="img" name="img" value="{{$post->img}}" required="required" class="form-control col-md-7 col-xs-12">
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

                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <a href="{{route('posts.index')}}"><button  class="btn btn-primary">Cancel</button></a>
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