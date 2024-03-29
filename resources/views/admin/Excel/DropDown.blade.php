@extends('admin.main')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <div class="panel-heading">Add file</div>
                            <div class="panel-body">
                                <form class="box" method="post" action="" enctype="multipart/form-data">
                                    <div class="box__input">
                                        <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                                        <button class="box__button" type="submit">Upload</button>
                                    </div>
                                    <div class="box__uploading">Uploading…</div>
                                    <div class="box__success">Done!</div>
                                    <div class="box__error">Error! <span></span>.</div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </div>
        </section>
@endsection

