@extends('backend/layout') 
@section('title') Free Products @endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home">
            </i>
            <a href="{{URL::to('admin/dashboard')}}">Dashboard</a>
        </li>
        <li>
            <a href="{{URL::to('admin/products')}}" title="">Songs</a>
        </li>
        <li class="current">Add new</li>
    </ul>
    <ul class="crumb-buttons">
        <li>
            <a href="{{URL::to('admin/products')}}" title="">back</a>
        </li>
    </ul>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />
<script type="text/javascript" src="{{Config::get('app.url')}}frontend/plugin/jQuery-Tags-Input-master/jquery.tagsinput.js"></script>
<div class="row">
    <div class="col-md-12 col-sm-12 col-sx-12">
        {{Form::open(array('url'=>'admin/products/add','enctype'=>'multipart/form-data','file' => true, 'class'=>'form-horizontal', 'method'=>'post'))}}
        <div class="widget box">
            <div class="widget-header">
            <h4 class="">Songs List</h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            <div class="widget-content">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('SMG_SUCCESS'))
                <div class="alert alert-block alert-success fade in">
                    <button data-dismiss="alert" class="close" type="button"
                        data-original-title="">x</button>
                    <p>{{Session::get('SMG_SUCCESS')}}</p>
                </div>
            @endif
              <div class="form-group">
                <label for="mp3" class="col-sm-2 control-label">mp3 file</label>
                <div class="col-sm-10">
                  {{ Form::file(
                    'file',
                    array(
                        'class' => 'form-control',
                        'id'=> 'mp3',
                    )
                    )}}
                    @if($errors->first('file'))
                    <div class="alert alert-danger" role="alert" style="border:none;background:none;padding:5px">{{ $errors->first('file') }}</div>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="english-title" class="col-sm-2 control-label">English Title</label>
                <div class="col-sm-10">
                    {{ Form::text(
                    'english',
                    Input::get('english'), 
                    array(
                        'class' => 'form-control',
                        'placeholder' => 'English Title',
                        'id'=> 'english-title',
                    )
                    )}}
                    @if($errors->first('unicode'))
                    <div class="alert alert-danger" role="alert" style="border:none;background:none;padding:5px">{{ $errors->first('english') }}</div>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="unicode-title" class="col-sm-2 control-label">Unicode Title</label>
                <div class="col-sm-10">
                    {{ Form::text(
                    'unicode',
                    Input::get('unicode'), 
                    array(
                        'class' => 'form-control',
                        'placeholder' => 'Unicode Title',
                        'id'=> 'unicode-title',
                    )
                    )}}
                    @if($errors->first('unicode'))
                    <div class="alert alert-danger" role="alert" style="border:none;background:none;padding:5px">{{ $errors->first('unicode') }}</div>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="limon-title" class="col-sm-2 control-label">Limon Title</label>
                <div class="col-sm-10">
                    {{ Form::text(
                    'limon',
                    Input::get('limon'), 
                    array(
                        'class' => 'form-control',
                        'placeholder' => 'Limon Title',
                        'id'=> 'limon-title',
                    )
                    )}}
                    @if($errors->first('limon'))
                    <div class="alert alert-danger" role="alert" style="border:none;background:none;padding:5px">{{ $errors->first('limon') }}</div>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    {{ Form::text(
                    'image',
                    Input::get('image'), 
                    array(
                        'class' => 'form-control',
                        'placeholder' => 'image',
                        'id'=> 'image'
                    )
                    )}}
                </div>
              </div>

              <div class="form-group">
                <label for="Content" class="col-sm-2 control-label">Content</label>
                <div class="col-sm-10">
                  <textarea name="content" class="form-control" id="Content"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="Category" class="col-sm-2 control-label">Category</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php
                            $AllCategory = new MCategory();
                            //$product = $AllCategory->findCategoryBySlug('production');

                        ?>
                          <div class="form-group">
                            <label for="Artist" class="col-sm-2 control-label">Artist:</label>
                            <div class="col-sm-10">
                              <input name="Artist" type="text" class="form-control" id="Artist" placeholder="Artist">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="Production" class="col-sm-2 control-label">Production:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="Production" name="production">
                                  <option value="0">select Productoin</option>
                                  @foreach($AllCategory->findCategoryBySlug('production')->result as $product)
                                    <option value="{{@$product->id}}">{{@$product->name_lml}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <label for="vol" class="col-sm-2 control-label">Vol:</label>
                            <div class="col-sm-4">
                              <input name="vol" type="text" class="form-control" id="vol" placeholder="vol">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="Rhythm" class="col-sm-2 control-label">Rhythm :</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="Rhythm" name="rhythm">
                                  <option value="0">select Rhythm</option>
                                  @if(!empty($AllCategory->findCategoryBySlug('rhythm')->result))
                                      @foreach($AllCategory->findCategoryBySlug('rhythm')->result as $rhythm)
                                        <option value="{{@$rhythm->id}}">{{@$rhythm->name_lml}}</option>
                                      @endforeach
                                  @endif
                                </select>
                            </div>
                            <label for="Type" class="col-sm-2 control-label">Type:</label>
                            <div class="col-sm-4">
                            <input value="2" name="addp" type="hidden">
                              <select class="form-control" id="Type" name="type">
                                  <option value="0">select Type</option>
                                  @if(!empty($AllCategory->findCategoryBySlug('type')->result))
                                      @foreach($AllCategory->findCategoryBySlug('type')->result as $type)
                                        <option value="{{@$type->id}}">{{@$type->name_lml}}</option>
                                      @endforeach
                                  @endif
                                </select>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>

                <div class="form-actions">
                    <input type="submit" value="Submit" class="btn btn-primary pull-right" name="btnAdd"/>
                </div>
            
            </div>
        </div>
        {{Form::close()}}
    </div>
</div>
    <script type="text/javascript">
        
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }
        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }
        
        function onChangeTag(input,tag) {
            alert("Changed a tag: " + tag);
        }
        
        $(function() {
            $('#Artist').tagsInput({
                width: 'auto',

                //autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
                autocomplete_url:"ajax?p=artist" // jquery ui autocomplete requires a json endpoint
            });
            

// Uncomment this line to see the callback functions in action
//          $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});       

// Uncomment this line to see an input with no interface for adding new tags.
//          $('input.tags').tagsInput({interactive:false});
        });
    
    </script>
 @endsection
