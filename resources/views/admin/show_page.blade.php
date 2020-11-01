@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Manage Pages</h4>
                    <p class="card-category" style="direction: ltr !important;">
                        @foreach(array_reverse($treeview) as $page)
                             {{$page->name}} ->
                        @endforeach
                    </p>
                </div>
                <div class="card-body table-responsive">
                    @if($childs->first())
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Delete</th>
                            <th>Edit Name</th>
                            </thead>
                            <tbody>
                            @foreach($childs as $child)
                                <tr>
                                    <td>{{$child->id}}</td>
                                    <td><a href="{{route('admin.show_page' , ['page' => $child])}}">{{$child->name}}</a></td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE' , 'url'=>'admin/pages/'.$child->id]) !!}
                                        {!! Form::submit('حذف' , ['onclick' => "return confirm('ایا از حذف این صفحه اطمینان دارید؟')" , 'class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.page.edit' , ['page'=> $child])}}" class="btn btn-info">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        There Is No page <br>
                    @endif
                        <a href="{{url('admin/pages/create' , ['parent_id' => \Illuminate\Support\Facades\Crypt::encrypt($page->id) , 'is_root' => \Illuminate\Support\Facades\Crypt::encrypt(0)])}}" class="btn btn-primary">افزودن صفحه</a>
                    @if($page->parent_id != null)
                        <a class="btn btn-primary" href="{{url('admin/pages/'. $page->parent_id)}}">بازگشت</a>
                    @else
                        <a class="btn btn-primary" href="{{route('admin')}}">بازکشت</a>
                    @endif
                </div>
            </div>
        </div>


    </div>
    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src={{asset('assets/js/bootstrap.js')}}></script>
<script src={{asset('/jquery/js.js')}}></script>

</body>
</html>
