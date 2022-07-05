@section('container')
    @extends('layouts.back-end.layout')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="sub-title">Sửa dự án <span class="font-italic">{{$data->name}}</span></h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Tên dự án</label
                            >
                            <div class="col-sm-10">
                                <input required value="{{$data->name}}" type='text' name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Giới thiệu</label
                            >
                            <div class="col-sm-10">
                                <input required value="{{$data->introduction}}" type='text' name="introduction" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Mô tả</label
                            >
                            <div class="col-sm-10">
                                <input required value="{{$data->description}}" type='text' name="description" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Nội dung</label
                            >
                            <div class="col-sm-10">
                                <textarea id="content" rows="5" cols="5" class="form-control" name="contentPost">
                                    {!! $data->content !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Mục tiêu dự án</label
                            >
                            <div class="col-sm-10">
                                <input required type='number' value="{{$data->goal}}" name="goal" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Ảnh dự án</label
                            >
                            <div class="col-sm-10">
                                <img src="{{asset('back-end/assets/images/uploaded/projects')}}/{{$data->imageSource}}" class="w-50">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            >Ảnh mới (*)</label
                            >
                            <div class="col-sm-10">
                                <input accept="image/*" type='file' id="imgInp" name="imageSource" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            ></label
                            >
                            <div class="col-sm-10">
                                <img id="blah" src="" class="w-50" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"
                            ></label
                            >
                            <div class="col-sm-10">
                                <?php
                                use Illuminate\Support\Facades\Session;
                                $message = Session::get('message');
                                ?>
                                @if(isset($message))
                                    <p class="text-success">{{$message}}</p>
                                @endif
                                <?php Session::put('message', NULL); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        CKEDITOR.replace('content',{
            width: "100%",
            height: "200px"
        });

    </script>
@endsection
