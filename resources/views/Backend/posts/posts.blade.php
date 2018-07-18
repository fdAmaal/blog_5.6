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
                          <th>Post Description</th>
                          <th>Author Name</th>
                          <th >Perma Link</th>
                          <th>Souece URL</th>
                          <th>Active</th>
                          <th style="width: 15%">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!---------table row---------->
                      @foreach($posts as $key=> $post)

                          <tr>
                          <!--#------> <td>{{$key+1}}</td>
                          <!--Image--> <td> <img src="{{asset('storage/img/'.$post->img)}}" style="max-width: 100px; height: 50px;"  alt="Avatar"> </td>
                          <!--category------> <td>{{$post->name}}</td>
                          <!--Title--------><td><a>{{$post->title, 60}}</a><br/> </td>
                          <!--Description--><td>{{ str_limit($post->description, 90) }} </td>
                          <!--Author Name------> <td>{{$post->author_firstName}} {{$post->author_lastName}}</td>
                          <!--Perma Link------> <td><a href=".{{$post->perma_link}}">{{$post->perma_link}}<a></td>
                          <!--Source URL------> <td><a>{{$post->source_url}}<a></td>
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