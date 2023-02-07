<div class="{{$viewClass['form-group']}}" link-rite-toggle link-rite-row>

    <label class="{{$viewClass['label']}} control-label">儀式預約</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <input type="checkbox" class="link-rite-item la_checkbox" />
        <input type="hidden" class="link-rite-item" name="link[rite][enable]" value="off" />

        @include('admin::form.help-block')

    </div>
</div>

<div class="{{$viewClass['form-group']}}" link-rite-row style="display: none;">
    <label class="{{$viewClass['label']}} control-label">所屬行銷</label>

    <div class="{{$viewClass['field']}}">
        {!! $default['staffSelector'] !!}
    </div>
</div>

<div class="{{$viewClass['form-group']}}" link-rite-row style="display: none;">
    <label class="{{$viewClass['label']}} control-label">儀式詳細內容</label>

    <div class="{{$viewClass['field']}}">
        <textarea name="link[rite][detail]" class="form-control" rows="5" placeholder="輸入 儀式詳細內容"></textarea>
    </div>
</div>

<div class="{{$viewClass['form-group']}}" link-rite-row style="display: none;">
    <label class="{{$viewClass['label']}} control-label">儀式現場配置</label>

    <div class="{{$viewClass['field']}}">
        <textarea name="link[rite][deploy]" class="form-control" rows="5" placeholder="輸入 儀式現場配置"></textarea>
    </div>
</div>
