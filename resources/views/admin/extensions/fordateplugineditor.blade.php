<div class="form-group">
    <label class="col-sm-2 asterisk control-label">顯示日期</label>
    <div class="col-sm-8">
        <div class="input-group {{ $id }}-row">
            <div style="display: inline-flex;">
                <span style="padding-top: 8px;">開始：</span>
                <div class="input-group" style="margin-right: 24px;">
                    <input style="width: 150px; text-align: center;" type="date" id="available_start_date" name="available_start_date" value="{{ $settings['available_start_date'] ?? '' }}" class="form-control available_start_date" placeholder="" />
                </div>
            </div>
            <br/>
            <div style="display: inline-flex; margin-top: 12px;">
                <span style="padding-top: 8px;">結束：</span>
                <div class="input-group">
                    <input style="width: 150px; text-align: center;" type="date" id="available_end_date" name="available_end_date" value="{{ $settings['available_end_date'] ?? '' }}" class="form-control available_end_date" placeholder="" />
                </div>
            </div>
        </div>
    </div>
</div>
