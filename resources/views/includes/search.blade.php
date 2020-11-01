
<img width="150px" src="{{asset('assets/img/logo1.gif')}}">
<br />
<br />
<h2 style="color: white !important;">جستجوی صفحات</h2> <br />

<form>
    <div class="form-group">
        <input type="text" class="form-control typeahead" style="font-weight: bolder;outline: none !important;height: 50px !important;border:none;border-radius: 50px;padding:30px;text-align: right;direction: rtl"  placeholder="جستجو"  />
    </div>
</form>

<script src="{{asset('admin_panel/js/core/jquery.min.js')}}"></script>
<script src="{{asset('typeahead.js')}}"></script>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        },
        highlighter: function (item, data) {
            var parts = item.split('#'),
                html = '<div class="row">';
            html += '<span>'+data.name+'</span>';
            html += '</div>';

            return html;
        }
    });
</script>




