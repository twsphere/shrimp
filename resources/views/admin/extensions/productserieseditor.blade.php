<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <input type="checkbox" class="{{$class}} la_checkbox" {{ old($column, $value) == 'on' ? 'checked' : '' }} {!! $attributes !!} />
        <input type="hidden" class="{{$class}}" name="{{$name}}" value="{{ old($column, $value) }}" />

        @include('admin::form.help-block')

    </div>
</div>

<div class="{{$viewClass['form-group']}}" id="product-series-editor">

    <label class="{{$viewClass['label']}} control-label">系列商品清單</label>

    <div class="{{$viewClass['field']}}">
        <div class="col-sm-12" product-mix>
            <br/>
            <template id="series-row">
                <tr data-product>
                    <td>{!! $default['name'] !!}</td>
                    <td>{!! $default['price'] !!}</td>
                    <td>{!! $default['remainder'] !!}</td>
                    <td>
                        <a class="btn btn-social-icon btn-danger" onclick="removeDetailRow(this);"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </template>
            <table class="table table-hover" id="series-list">
                <tbody>
                    <tr>
                        <th style="width: 30%">名稱</th>
                        <th style="width: 30%">價錢</th>
                        <th style="width: 30%">庫存</th>
                        <th style="width: 10%"></th>
                    </tr>
                    @if (count($series ?? []))
                        @foreach ($series as $item)
                            <tr data-product>
                                <td>{!! $item['name'] !!}</td>
                                <td>{!! $item['price'] !!}</td>
                                <td>{!! $item['remainder'] !!}</td>
                                <td>
                                    <a class="btn btn-social-icon btn-danger" onclick="removeSeriesRow(this);"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr id="series-toolbar">
                        <td>
                            <a class="btn btn-social-icon btn-success" onclick="addSeriesRow();"><i class="fa fa-plus"></i></a>
                        </td>
                        <td></td>
                        <td style="font-weight: bold;"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <script>
                function bindSeriesListEvent()
                {
                    $('#product-series-editor #series-list :text:not(.initialized).input-number')
                    .addClass('initialized')
                    .bootstrapNumber({
                        upClass: 'success',
                        downClass: 'primary',
                        center: true
                    });

                    $('#product-series-editor #series-list :text:not(.bind-event)').addClass('bind-event');
                }

                function addSeriesRow()
                {
                    $($('#product-series-editor').find('template#series-row').html()).insertBefore($('#product-series-editor').find('#series-list #series-toolbar'));
                    bindSeriesListEvent();
                }

                function removeSeriesRow(target)
                {
                    $(target).closest('tr').remove();
                }
            </script>
        </div>
    </div>
</div>
