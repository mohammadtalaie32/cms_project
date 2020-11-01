@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 50px;direction: rtl !important;text-align: right">
        <h1 style="font-family: '20S-Yekan' !important;font-weight: bolder">ویرایش صفحه</h1>
        <br>
        <br>
        <br>

        {!! Form::open(['url' => '/admin/pages/' . $page->id , 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::text('name' , $page->name , ['class' => $errors->has('name') ? 'form-control is-danger' : 'form-control' , 'style' => 'direction:rtl' , 'placeholder'=> 'نام صفحه' ]) !!}
            @if($errors->has('name'))
                <small class="form-text text-muted" style="color:red !important;">{{$errors->first('name')}}</small>
            @endif
        </div>

        <br>
        <br>

        <div class="form-group">
            {!! Form::textarea('content' , $page->content , ['id' => 'editor' , 'class' => 'form-control' , 'style' => 'direction:rtl;' , 'placeholder'=> 'محتوا' ]) !!}
        </div>

        <br>


        <div class="form-group">
            {!! Form::submit('ثبت' , ['class' => 'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}

    </div>

    <script src="{{asset('ckeditor/build/ckeditor.js')}}"></script>
    <script>ClassicEditor
            .create( document.querySelector( '#editor' ), {

                toolbar: {
                    items: [
                        '|',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'indent',
                        'outdent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo',
                        'alignment',
                        'fontSize',
                        'fontColor',
                        'exportPdf',
                        'imageInsert'
                    ]
                },
                language: 'fa',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

                fontFamily: {
                    options: [
                        'default',
                        '20S-Yekan',
                    ]
                },

            } )
            .then( editor => {
                window.editor = editor;








            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: a4sqs628ijz1-1k2dwv28km4a' );
                console.error( error );
            } );
    </script>


@endsection
