<div class="{{$viewClass['form-group']}}" id="order-detail-editor">

    <label class="{{$viewClass['label']}} control-label">商品明細</label>

    <div class="{{$viewClass['field']}}">
        <div class="col-sm-12" product-detail>
            <br/>
            <template id="detail-row">
                <tr data-product>
                    <td>{!! $default['categorySelector'] !!}</td>
                    <td>
                        {!! $default['productSelector'] !!}
                        <div data-product-detail-content></div>
                    </td>
                    <td>
                        {!! $default['quantity'] !!}
                        <div plugin-callback style="padding: 6px; display: none" plugin-name="">
                            <i class="fa fa-cog"></i>
                        </div>
                        <input type="hidden" name="detail[raw][]" value="" />
                    </td>
                    <td data-price>$0</td>
                    <td>
                        <a class="btn btn-social-icon btn-danger" onclick="removeDetailRow(this);"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </template>
            <table class="table table-hover text-center" id="detail-list">
                <tbody>
                    <tr>
                        <th style="width: 18%">類別</th>
                        <th style="width: 40%">{{ __('admin.name') }}</th>
                        <th style="width: 20%">{{ __('admin.quantity') }}</th>
                        <th style="width: 12%">{{ __('admin.total_price') }}</th>
                        <th style="width: 10%">操作</th>
                    </tr>
                    @if (count($details))
                        @foreach ($details as $item)
                            <tr data-product>
                                <td>{!! $item['categorySelector'] !!}</td>
                                <td>{!! $item['productSelector'] !!}</td>
                                <td>
                                    {!! $item['quantity'] !!}
                                    <input type="hidden" name="detail[raw][]" value="" />
                                </td>
                                <td data-price></td>
                                <td>
                                    <a class="btn btn-social-icon btn-danger" onclick="removeDetailRow(this);"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr id="detail-toolbar">
                        <td>
                            <a class="btn btn-social-icon btn-success" onclick="addDetailRow();"><i class="fa fa-plus"></i></a>
                        </td>
                        <td></td>
                        <td></td>
                        <td style="font-weight: bold;"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <script>
                let cogTarget = null;

                function bindDetailListEvent()
                {
                    $('#order-detail-editor #detail-list :text:not(.initialized)').addClass('initialized')
                                                                                    .bootstrapNumber({
                                                                                        upClass: 'success',
                                                                                        downClass: 'primary',
                                                                                        center: true
                                                                                    });

                    $('#order-detail-editor #detail-list select[category-selector]:not(.bind-event)').addClass('bind-event').on('change', function () {
                        let row = $(this).closest('tr[data-product]');
                        if ($(this).val() == '') {
                            row.find('select[product-selector] option').show();
                        } else {
                            if ( $(this).val() == '3') {
                                $("#worship_start_date").parents('.form-group').show();
                            }
                            row.find('select[product-selector]').val('');
                            row.find('input[name*="raw"]').val('');
                            row.find('select[product-selector] option[data-category][data-category!="'+ $(this).val() +'"]').hide();
                            row.find('select[product-selector] option[data-category="'+ $(this).val() +'"]').show();
                            row.find('select[product-selector]').change();
                            calculateRow();
                        }
                    });

                    $('#order-detail-editor #detail-list select[product-selector]:not(.bind-event)').addClass('bind-event').on('change', function () {
                        let row = $(this).closest('tr[data-product]');
                        let column = row.find(':text').closest('td');

                        let pluginName = $(this).find('option[value="'+ $(this).val() +'"]').attr('data-plugin');
                        let hasSeries = $(this).find('option[value="'+ $(this).val() +'"]').attr('data-series') === '1';
                        let seriesList = $(this).find('option[value="'+ $(this).val() +'"]').attr('data-series-list');
                        row.find('div[data-product-detail-content]').html('');

                        if ($(this).val() == '' || !pluginName) {
                            row.find(':text').closest('td > div').show();
                            column.find('div[plugin-callback]').hide();
                            column.find('div[plugin-callback]').attr('plugin-name', '');
                            column.find('div[plugin-callback]').attr('plugin-product', '');
                            column.find('div[plugin-callback]').attr('data-price', '0');
                        } else {
                            row.find(':text').val('1');
                            row.find(':text').closest('td > div').hide();

                            column.find('div[plugin-callback]').attr('plugin-name', pluginName);
                            column.find('div[plugin-callback]').attr('plugin-product', $(this).val());
                            column.find('div[plugin-callback]').attr('data-price', '0');

                            column.find('div[plugin-callback]').show();
                        }

                        if (hasSeries) {
                            seriesList = JSON.parse(atob(seriesList));
                            if (seriesList.length > 0) {
                                let seriesSelector = '';
                                for (var idx in seriesList) {
                                    seriesSelector += '<option data-price="'+ seriesList[idx]['price'] +'" value="'+ seriesList[idx]['id'] +'" '+ seriesList[idx]['name'] +'>'+ seriesList[idx]['name'] +' $'+ seriesList[idx]['price'] +'</option>';
                                }

                                seriesSelector = '<select product-series-selector class="form-control">' + seriesSelector + '</select>';
                                row.find('div[data-product-detail-content]').html(seriesSelector);
                                row.find('div[data-product-detail-content]').find('select[product-series-selector]').on('change', function () {
                                    calculateRow();

                                    let raw = {
                                        product_id: row.find('select[product-selector]').val(),
                                        series_id: row.find('select[product-series-selector]').val(),
                                    };

                                    raw = JSON.stringify(raw);
                                    raw = encodeURIComponent(raw);
                                    column.find('input[name*=detail\\[raw\\]]').val(raw);
                                }).change();
                            }
                        }

                        calculateRow();
                    });

                    $('#order-detail-editor #detail-list :text:not(.bind-event)').addClass('bind-event').on('change', calculateRow);

                    $('#order-detail-editor #detail-list [plugin-callback] i:not(.bind-event)').addClass('bind-event').on('click', function () {
                        execPluginCallback($(this));
                    });
                }

                function calculateRow()
                {
                    var totalPrice = 0;

                    $('#order-detail-editor #detail-list tr[data-product]').each(function () {
                        var price       = $(this).find('select[product-selector] option[value="'+ $(this).find('select[product-selector]').val() +'"]').attr('data-price') * 1;
                        var hasSeries   = $(this).find('select[product-selector] option[value="'+ $(this).find('select[product-selector]').val() +'"]').attr('data-series') === '1';
                        var qty         = $(this).find(':text').val() * 1;
                        var pluginPrice = $(this).find('[plugin-callback]').attr('data-price')

                        var itemPrice   = price * qty;
                        itemPrice       = isNaN(itemPrice) ? 0 : itemPrice;
                        if (hasSeries) {
                            var seriesPrice = $(this).find('select[product-series-selector] option[value="'+ $(this).find('select[product-series-selector]').val() +'"]').attr('data-price') * 1;
                            itemPrice = seriesPrice * qty;
                        }

                        pluginPrice = isNaN(pluginPrice) ? 0 : (pluginPrice * 1);

                        if (pluginPrice > 0) {
                            totalPrice += pluginPrice;
                            $(this).find('td:nth-child(4)').html('$'+ new Intl.NumberFormat().format(pluginPrice));
                        } else {
                            totalPrice += itemPrice;
                            $(this).find('td:nth-child(4)').html('$'+ new Intl.NumberFormat().format(itemPrice));
                        }
                    });

                    $('#order-detail-editor #detail-list tr#detail-toolbar td:nth-child(4)').html('$'+ new Intl.NumberFormat().format(totalPrice));
                }

                function addDetailRow()
                {
                    $($('#order-detail-editor').find('template#detail-row').html()).insertBefore($('#order-detail-editor').find('#detail-list #detail-toolbar'));
                    bindDetailListEvent();
                }

                function removeDetailRow(target)
                {
                    $(target).closest('tr').remove();
                    calculateRow();
                }

                function execPluginCallback(item)
                {
                    item = $(item).parent();

                    cogTarget = item;

                    console.log(item);

                    if (item.is(':hidden') || !item.attr('plugin-name')) {
                        return;
                    }

                    $.ajax({
                        url : "{{ route('admin.spotOrders.callback') }}",
                        type: 'POST',
                        data: {
                            _token      : '{{ csrf_token() }}',
                            productId   : item.attr('plugin-product'),
                            check       : 1,
                        },
                        beforeSend  : function () {

                        },
                        success     : function (res) {
                            if ('callback' in res) {
                                eval(res.callback +'(null, res);');
                            }
                        },
                        error       : function () {

                        }
                    })
                }

                function onRequestResponse(res)
                {
                    cogTarget.attr('data-price', res.total_price);

                    calculateRow();

                    cogTarget.next().val(res.raw);
                    cogTarget.closest('tr[data-product]').find('div[data-product-detail-content]').html(res.html);
                }

                function onRequestException(jqXHR)
                {
                    if (jqXHR.status == 422) {
                        if (jqXHR.responseJSON.message) {
                            toastr.error(jqXHR.responseJSON.message);
                        }
                    }
                }
            </script>
        </div>
    </div>
</div>
