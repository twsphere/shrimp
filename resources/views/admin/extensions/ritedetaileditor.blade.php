<div class="{{$viewClass['form-group']}}" id="product-mix-editor">

    <label class="{{$viewClass['label']}} control-label">{{ __('admin.detail_data') }}</label>

    <div class="{{$viewClass['field']}}">
        <div class="col-sm-12" product-mix>
            <br/>
            <template id="detail-row">
                <tr data-product>
                    <td>{!! $default['selector'] !!}</td>
                    <td>{!! $default['unit'] !!}</td>
                    <td>{!! $default['quantity'] !!}</td>
                    <td>{!! $default['price'] !!}</td>
                    <td data-price></td>
                    <td>
                        <a class="btn btn-social-icon btn-danger" onclick="removeRiteDetailRow(this);"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </template>
            <table class="table table-hover text-center" id="detail-list">
                <tbody>
                    <tr>
                        <th style="width: 35%">儀式名稱</th>
                        <th style="width: 20%">形式類別</th>
                        <th style="width: 10%">數量</th>
                        <th style="width: 10%">單價</th>
                        <th style="width: 20%">總金額</th>
                        <th style="width: 15%">操作</th>
                    </tr>
                    @if (count($details))
                        @foreach ($details as $item)
                            <tr data-product>
                                <td>{!! $item['selector'] !!}</td>
                                <td>{!! $item['unit'] !!}</td>
                                <td>{!! $item['quantity'] !!}</td>
                                <td>{!! $item['price'] !!}</td>
                                <td data-price></td>
                                <td>
                                    <a class="btn btn-social-icon btn-danger" onclick="removeRiteDetailRow(this);"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr id="detail-toolbar">
                        <td>
                            <a class="btn btn-social-icon btn-success" onclick="addRiteDetailRow();"><i class="fa fa-plus"></i></a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="font-weight: bold;"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <script>
                function bindRiteDetailListEvent()
                {
                    $('#product-mix-editor #detail-list :text:not(.initialized)')
                    .addClass('initialized')
                    .bootstrapNumber({
                        upClass: 'success',
                        downClass: 'primary',
                        center: true
                    });

                    $('#product-mix-editor #detail-list select:not(.bind-event), #product-mix-editor #detail-list :text:not(.bind-event)').on('change', calculateRiteRow);
                    $('#product-mix-editor #detail-list select:not(.bind-event), #product-mix-editor #detail-list :text:not(.bind-event)').addClass('bind-event')

                    $('#product-mix-editor #detail-list :text').first().change();
                }

                function calculateRiteRow()
                {
                    var totalPrice = 0;

                    $('#product-mix-editor #detail-list tr[data-product]').each(function () {
                        var price       = $(this).find('td:nth-child(4)').find('input').val();
                        console.log(price);
                        //var price       = $(this).find('select option[value="'+ $(this).find('select').val() +'"]').attr('data-price') * 1;
                        var qty         = $(this).find(':text').val() * 1;
                        var itemPrice   = price * qty;
                        itemPrice       = isNaN(itemPrice) ? 0 : itemPrice;
                        var single_price = isNaN(price) ? 0 : price;
                        totalPrice += itemPrice;
                        //$(this).find('td:nth-child(4)').html('$' + new Intl.NumberFormat().format(single_price));
                        $(this).find('td:nth-child(5)').html('$'+ new Intl.NumberFormat().format(itemPrice));
                    });

                    $('#product-mix-editor #detail-list tr#detail-toolbar td:nth-child(5)').html('$'+ new Intl.NumberFormat().format(totalPrice));
                }

                function addRiteDetailRow()
                {
                    $($('#product-mix-editor').find('template#detail-row').html()).insertBefore($('#product-mix-editor').find('#detail-list #detail-toolbar'));
                    bindRiteDetailListEvent();
                }

                function removeRiteDetailRow(target)
                {
                    $(target).closest('tr').remove();
                    calculateRiteRow();
                }

                function switchRiteProductDetailEditor()
                {
                    var categoryId = $('#product-mix-editor').closest('form').find('select[name="category_id"]').val();

                    if (!categoryId || categoryId == 1) {
                        $('#product-mix-editor').hide();
                    } else {
                        $('#product-mix-editor').show();
                    }
                }
            </script>
        </div>

        <div class="col-sm-12" product-plugin>
            <br>
            {!! $plugin !!}
        </div>
    </div>
</div>
