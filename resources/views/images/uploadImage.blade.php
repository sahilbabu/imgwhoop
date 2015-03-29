@extends('layouts.default-layout')
@section('content')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h2> FileUploads </h2>
        </div>
    </div>
    <hr />
    @if(Session::has('global'))
    <div class="alert alert-success">
    {{Session::pull('global')}}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <header class="dark">
                    <div class="icons"><i class="icon-cloud-upload"></i></div>
                    <h5>File Upload</h5>
                </header>
                <div class="body">
                    {!! Form::open(array('route' => array('post-upload-image'),'class'=>'form-horizontal', 'files' => true)) !!}
                        <div class="form-group">
                            <label class="control-label col-lg-4">Image Upload</label>
                            <br>
                            <div class="col-lg-8">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-success">
                                            <span class="fileupload-new">Select image</span>
                                            <span class="fileupload-exists">Change</span>
                                            {!! Form::file('image') !!}
                                        </span>
                                            <span class="alert-danger">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4" >Image Title</label>
                            <br>
                            <div class="{{'col-lg-8' . ($errors->has('title'))?'has-error':'' }}">
                                {!! Form::Text('title',null,array('class'=>'')) !!}
                                <span class="alert-danger">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Description</label>
                            <br>
                            <div class="{{'col-lg-8' . ($errors->has('description'))?'has-error':''}}">
                                {!! Form::TextArea('description',null) !!}
                            </div>
                            <span class="alert-danger">{{ ($errors->has('description')) ? $errors->first('description') : '' }}</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Category</label>
                            <br>
                            <div class="col-lg-8">
                                 {!! Form::select('category_id', $categories, '',array('class'=>'form-control')) !!}
                            </div>
                                  <span class="alert-danger">{{ ($errors->has('category_id')) ? $errors->first('category_id') : '' }}</span>
                        </div>
                        <p>
                            {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                        </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
