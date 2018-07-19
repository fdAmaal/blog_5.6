@extends('Backend.layout.master')
@section('title','Posts')
@section('content')
 <!-- page content -->
 <div  role="main">
            <div class="clearfix"></div>

			 <!--------------------------------------------------------------------------->
			 <!------------- Left side content ------------------------------------------>

			   <!-------------------- /post ------------------------------------>
        	  
              <div class="x_panel">
              <div class="x_title">
              <a href="{{route('posts.create')}}"><button type="button" class="btn btn-danger btn-lg">New Post</button><a>
                    <div class="clearfix"></div>
                  </div>


                <div class="x_content">
                   <!-- start project list -->
                   <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th>Post Image</th>
                          <th >Category</th>   
                          <th>Post Title</th>
                          <th>Active</th>
                          <th style="width: 20%">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!---------table row---------->
                      @foreach($posts as $key=> $post)

                          <tr>
                          <!--#------> <td>{{$key+1}}</td>
                          <!--Image--> <td> <img src="{{asset('storage/img/'.$post->img)}}" style="max-width: 100px; height: 50px;"  alt="Avatar"> </td>
                          <!--category------> <td>{{$post->name}}</td>
                          <!--Title--------><td><a>{{$post->title}}</a><br/> </td>
                          <!--Active------>  <td> 
                          @if($post->active === 1)
                            <button type="button" class="btn btn-success btn-xs">Active</button>        
                          @else
                            <button type="button" class="btn btn-default btn-xs">Passive</button>
                          @endif
                          </td>
                          <td>
                          <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info"> Edit </a>
                          <a href="{{route('posts.show',$post->id)}}" class="btn btn-danger"> View </a>
                              @if($post->active === 1)
                                  <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-default" >Passive</a>
                              @else
                                  <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-success">Active</a>
                              @endif

                          
                          
                          </td>
                        </tr>
                        <!---------/table row---------->
                       
                      @endforeach
                      
                      
                      </tbody> 
                    </table>
                    <div class="clearfix"></div>
              </div>	  
		   <!------------- /Right side content ------------------------------------------>
		   <!-------------------------------------------------------------------------->

			    <div class="clearfix"></div>
			
            </div>
        </div>

        <!-- /page content -->

 
@endsection