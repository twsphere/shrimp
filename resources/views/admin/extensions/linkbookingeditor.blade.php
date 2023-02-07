<div class="{{$viewClass['form-group']}}" link-booking-toggle link-booking-row>

    <label class="{{$viewClass['label']}} control-label">祭拜預約</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <input type="checkbox" class="link-booking-item la_checkbox" />
        <input type="hidden" class="link-booking-item" name="link[booking][enable]" value="off" />

        @include('admin::form.help-block')

    </div>
</div>

<div class="{{$viewClass['form-group']}}" link-booking-row style="display: none;">
    <label class="{{$viewClass['label']}} control-label">預約類型</label>

    <div class="{{$viewClass['field']}}">
        {!! $default['typeCategorySelector'] !!}
    </div>
</div>

<div class="{{$viewClass['form-group']}}" link-booking-row style="display: none;">
    <label class="{{$viewClass['label']}} control-label">預約備註</label>

    <div class="{{$viewClass['field']}}">
        <textarea name="link[booking][remark]" class="form-control" rows="5" placeholder="輸入 預約備註"></textarea>
    </div>
</div>
