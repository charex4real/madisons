@extends('admin.master') @section('title') Update Question section Info @endsection @section('css')
<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Question section Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Question section Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.question-header.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="question_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="question_title" value="{{$question->question_title}}" name="question_title">
                                </div>
                            </div>
                         
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> description</strong>
                                    </label>
                                    <textarea name="question_description" class="form-control " rows="10" id="area2" style="width: 100%;">{{$question->question_description}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6" >
                                        <label>
                                            <strong style="text-transform:uppercase">Current  Image</strong>
                                        </label>
                                        <div class="form-group">
                                            <img src="{{asset('assets/frontend/img/question-section-image.png')}}"  style="height: 120px;" class="img-thumnail">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="align-items: center;
                                    justify-content: center;">
                                        <div class="form-group">
                                            <label>
                                                <strong style="text-transform:uppercase">Change Image</strong>
                                            </label>
                                            <input type="file" name="question_section_image" accept="image/*" class="file">
                                            <div class="input-group col-xs-12">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                <input type="text" class="form-control " disabled placeholder="Change Image">
                                                <span class="input-group-btn">
                                                    <button class="browse btn btn-primary " type="button">
                                                        <i class="fa fa-image"></i> Upload </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @section('js')
<script src="{{asset('assets/admin/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
<script>
    $(document).on('click', '.browse', function () {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function () {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });


    bkLib.onDomLoaded(function () {
        new nicEditor({
            iconsPath: '{{asset("assets/admin/img/nicEditorIcons.gif")}}'
        }).panelInstance('area2');
    });
</script>
@endsection