<div class="{{$viewClass['form-group']}}" id="product-mix-editor">

    <label class="{{$viewClass['label']}} control-label">{{ __('admin.detail_data') }}</label>

    <div class="{{$viewClass['field']}}">
        <div class="col-sm-12" product-mix>
            <br/>
            <template id="detail-row">
                <tr data-product>
                    <td>{!! $default['selector'] !!}</td>
                    <td>{!! $default['quantity'] !!}</td>
                    <td data-price></td>
                    <td>
                        <a class="btn btn-social-icon btn-danger" onclick="removeDetailRow(this);"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            </template>
            <table class="table table-hover" id="detail-list">
                <tbody>
                    <tr>
                        <th style="width: 30%">{{ __('admin.name') }}</th>
                        <th style="width: 30%">{{ __('admin.quantity') }}</th>
                        <th style="width: 30%">{{ __('admin.total_price') }}</th>
                        <th style="width: 10%"></th>
                    </tr>
                    @if (count($details))
                        @foreach ($details as $item)
                            <tr data-product>
                                <td>{!! $item['selector'] !!}</td>
                                <td>{!! $item['quantity'] !!}</td>
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
                        <td style="font-weight: bold;"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <script>
                function bindDetailListEvent()
                {
                    $('#product-mix-editor #detail-list :text:not(.initialized)')
                    .addClass('initialized')
                    .bootstrapNumber({
                        upClass: 'success',
                        downClass: 'primary',
                        center: true
                    });

                    $('#product-mix-editor #detail-list select:not(.bind-event), #product-mix-editor #detail-list :text:not(.bind-event)').on('change', calculateRow);
                    $('#product-mix-editor #detail-list select:not(.bind-event), #product-mix-editor #detail-list :text:not(.bind-event)').addClass('bind-event')

                    $('#product-mix-editor #detail-list :text').first().change();
                }

                function calculateRow()
                {
                    var totalPrice = 0;

                    $('#product-mix-editor #detail-list tr[data-product]').each(function () {
                        var price       = $(this).find('select option[value="'+ $(this).find('select').val() +'"]').attr('data-price') * 1;
                        var qty         = $(this).find(':text').val() * 1;
                        var itemPrice   = price * qty;
                        itemPrice       = isNaN(itemPrice) ? 0 : itemPrice;

                        totalPrice += itemPrice;

                        $(this).find('td:nth-child(3)').html('$'+ new Intl.NumberFormat().format(itemPrice));
                    });

                    $('#product-mix-editor #detail-list tr#detail-toolbar td:nth-child(3)').html('$'+ new Intl.NumberFormat().format(totalPrice));
                }

                function addDetailRow()
                {
                    $($('#product-mix-editor').find('template#detail-row').html()).insertBefore($('#product-mix-editor').find('#detail-list #detail-toolbar'));
                    bindDetailListEvent();
                }

                function removeDetailRow(target)
                {
                    $(target).closest('tr').remove();
                    calculateRow();
                }

                function switchProductDetailEditor()
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
