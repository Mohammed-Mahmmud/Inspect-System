 <div class="row">
     @if ($type == 'Edit')
         <x-form.input_label class="col-6" value="{{ $tools->report_number ?? '' }}" label="Report Number :" type="text"
             name="report_number" id="report_number" readonly />
         <x-form.dropdown class="col-6" label="{{ trans('Dashboard/Tublar/tools.JobTicketNumber') }}" name="order_id"
             id="order_id" disabledOption="Job Ticket Numbers" :data="$orders"
             selectedData="{{ optional($tools->getOrders)->id }}"
             span="{{ trans('Dashboard/Tublar/tools.JobTicketNumber') }}" />
         <br>
     @else
         <x-form.dropdown class="col-12" label="{{ trans('Dashboard/Tublar/tools.JobTicketNumber') }}" name="order_id"
             id="order_id" disabledOption="Job Ticket Numbers" :data="$orders"
             selectedData="{{ optional($tools->getOrders)->id }}"
             span="{{ trans('Dashboard/Tublar/tools.JobTicketNumber') }}" />
         <br>
     @endif
     <hr>
     <br>
     <x-form.input_label class="col-6" placeholder="Enter Work Order" value="{{ $tools->work_order ?? '' }}"
         label="Work Order :" type="text" name="work_order" id="work_order" />
     <x-form.input_label class="col-6" placeholder="Enter Status " value="{{ $tools->tools_status ?? '' }}"
         label="Status :" type="text" name="tools_status" id="reportStatus" />
     <x-form.input_label class="col-12" placeholder="Enter Procedure" value="{{ $tools->procedure ?? '' }}"
         label="Procedure :" type="text" name="procedure" id="procedure" />
     <x-form.input_label class="col-8" placeholder="Enter Specification" value="{{ $tools->spec ?? '' }}"
         label="Specification :" type="text" name="spec" id="spec" />

     <x-dashboard.reports.tools.methods class="col-4" value="{{ $tools->methods ?? '' }}" label="inspection methods: "
         name="methods" span="please Choose Inspection Methods"></x-dashboard.reports.tools.methods>

     <x-form.input_label class="col-4" placeholder="Enter start date" value="{{ $tools->date ?? '' }}"
         label="{{ $examType }} date of inspection :" type="date" name="date" id="date" required />
     <x-form.input_label class="col-4" placeholder="Enter finished data" value="{{ $tools->fin_date ?? '' }}"
         label="{{ $examType }} due date insp  :" type="date" name="fin_date" id="fin_date" required />
     <x-form.dropdown class="col-4" label="{{ trans('Dashboard/Tublar/mudjar.accept') }}" name="accept"
         id="accept" disabledOption="choose accept contion" :data="$accept"
         selectedData="{{ optional($tools->getAccept)->id }}" span="{{ trans('Dashboard/Tublar/mudjar.accept') }}" />
     <x-form.textarea_label class="col-12" span="Enter Summary" placeholder="Enter Summary"
         value="{{ $tools->summary ?? '' }}" label="Summary :" name="summary" id="summary" rows='4' />
 </div>
