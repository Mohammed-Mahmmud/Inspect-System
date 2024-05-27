<div>
    <div class="row">
        @if($type == "Edit")
        <x-form.input_label class="col-6" value="{{ $tubs->report_num ?? '' }}" label="{{ ucwords('Report Number :') }}" type="text" name="report_num" id="report_num" readonly />
        <x-form.dropdown class="col-6" label="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" name="order_id" id="order_id" disabledOption="{{ ucwords('Job Ticket Numbers') }}" :data="$orders" selectedData="{{ optional($tubs->getOrders)->id }}" span="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" />
        <br>
        @else
        <x-form.dropdown class="col-12" label="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" name="order_id" id="order_id" disabledOption="{{ ucwords('Job Ticket Numbers') }}" :data="$orders" span="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" />
        <br>
        @endif
        <hr>
        <br>
            <x-form.input_label class="col-4" placeholder="{{ ucwords('Enter Purchase Order') }}"
                                value="{{ $tubs->work_order ?? '' }}" label="{{ ucwords('Purchase Order :') }}"
                                type="text" name="purchase_order" id="purchase_order"/>
            <x-form.input_label class="col-4" placeholder="{{ ucwords('Enter start date') }}"
                                value="{{ $tubs->st_date ?? '' }}"
                                label="{{ ucwords($examType.' '.'date of inspection :' )}}" type="date" name="st_date"
                                id="st_date" required/>

            <div class="col-4">
                <x-dashboard.reports.magnetic-particles :var="$tubs"/>
            </div>
            <div class="col-4">
                <x-dashboard.reports.equipment :var="$tubs"/>
            </div>
            <div class="col-4">
                <x-dashboard.reports.specification :var="$tubs"/>
            </div>
            <div class="col-4">
                <x-dashboard.reports.other-methods :var="$tubs"/>
                <br>
            </div>
            <div class="col-6">
                <x-dashboard.reports.magnetizing :var="$tubs"/>
            </div>


        <x-form.dropdown class="col-6" label="{{ TranslationHelper::translate('accept') }}" name="accept" id="accept" disabledOption="choose accept condition" :data="$accept" selectedData="{{ optional($tubs->getAccept)->id }}" span="{{ TranslationHelper::translate('accept') }}" />
            <br>
        <x-form.textarea_label class="col-6" span="Enter Description Of Tool" placeholder="Enter Description Of Tool" value="{{ $tubs->description ?? '' }}" label="{{ ucwords('Description of tool :') }}" name="description" id="description" rows='4' />
        <x-form.textarea_label class="col-6" span="Enter Remarks" placeholder="Enter Remarks" value="{{ $tubs->remarks ?? '' }}" label="Remarks :" name="remarks" id="remarks" rows='4' />
            <x-form.input_label class="col-12" placeholder="Enter supervisor Name" value="{{ $var->supervisor ?? '' }}"
                                label="Supervisor:" type="text" name="supervisor" id="supervisor"/>

    </div>
</div>
