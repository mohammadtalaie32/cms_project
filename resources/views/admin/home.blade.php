@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Manage Pages</h4>
                    <p class="card-category">Root</p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit Name</th>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td><a href="{{route('admin.show_page' , ['page' => $page])}}">{{$page->name}}</a></td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE' , 'url'=>'admin/pages/'.$page->id]) !!}
                                        {!! Form::submit('حذف' , ['onclick' => "return confirm('ایا از حذف این صفحه اطمینان دارید؟')" , 'class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.page.edit' , ['page'=> $page])}}" class="btn btn-info">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{url('admin/pages/create' , ['parent_id' => \Illuminate\Support\Facades\Crypt::encrypt(null) , 'is_root' => \Illuminate\Support\Facades\Crypt::encrypt(1)])}}" class="btn btn-primary">افزودن صفحه</a>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.js"></script>
<script src="{{asset('/jquery/js.js')}}"></script>




</body>
</html>



