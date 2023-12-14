<input type="text"
    id="input-tags-{{ $row->field }}"
    class="demo-default"
    name="{{ $row->field }}"
    data-name="{{ $row->display_name }}"
    @if($row->required == 1) required @endif
            step="any"
    placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
    value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/input-tags/dist/css/selectize.default.css') }}">
@endpush

@push('javascript')
    <script src="{{ asset('vendor/input-tags/dist/js/standalone/selectize.js') }}"></script>
    <script src="{{ asset('vendor/input-tags/js/index.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#input-tags-'+"{{ $row->field }}").selectize({
                persist: false,
                createOnBlur: true,
                create: true
            });
        });
    </script>
@endpush