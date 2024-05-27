 <div class="row">
 @if($type =="Edit")
    <x-form.input_label class="col-6" value="{{ $summary->report_num ?? '' }}" label="Report Number :" type="text" name="report_num" id="report_num" readonly />
         <x-form.dropdown class="col-6" label="{{ trans('Dashboard/Tublar/summary.JobTicketNumber') }}" name="order_id" id="order_id" disabledOption="Job Ticket Numbers" :data="$orders" selectedData="{{ optional($summary->getOrders)->id }}" span="{{ trans('Dashboard/Tublar/summary.JobTicketNumber') }}" />
    <br>
    @else
     <x-form.dropdown class="col-12" label="{{ trans('Dashboard/Tublar/summary.JobTicketNumber') }}" name="order_id" id="order_id" disabledOption="Job Ticket Numbers" :data="$orders" selectedData="{{ optional($summary->getOrders)->id }}" span="{{ trans('Dashboard/Tublar/summary.JobTicketNumber') }}" />
    <br>
    @endif
     <hr>
     <br>
     <x-form.input_label class="col-6" placeholder="Enter Start Date" value="{{ $summary->st_date ?? '' }}" label="{{ $examType }} Start Date :" type="date" name="st_date" id="st_date"  required/>
     <x-form.input_label class="col-6" placeholder="Enter End Date" value="{{ $summary->fin_date ?? '' }}" label="{{ $examType }} Finish Date :" type="date" name="fin_date" id="fin_date" required/>
     <x-form.input_label class="col-4" placeholder="Enter Contract No" value="{{ $summary->contract_num ?? '' }}" label="Contract No :" type="text" name="contract_num" id="contract_num" />
     <x-form.input_label class="col-4" placeholder="Enter Work Order" value="{{ $summary->work_order ?? '' }}" label="Work Order :" type="text" name="work_order" id="work_order" />
     <x-form.input_label class="col-4" placeholder="Enter Sheets " value="{{ $summary->sheets ?? '' }}" label="Sheets :" type="text" name="sheets" id="sheets" />
      <x-form.textarea_label class="col-12" span="Enter Comments" placeholder="Enter Comments" value="{{ $summary->comments ?? '' }}" label="Comments :" name="comments"  id="comments" rows='4' />
 </div>
