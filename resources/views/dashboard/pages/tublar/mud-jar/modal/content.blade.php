 <div class="row">
     @if ($type == 'Edit')
         <x-form.input_label class="col-6" value="{{ $mudjar->report_number ?? '' }}" label="Report Number :"
             type="text" name="report_number" id="report_number" readonly />
         <x-form.dropdown class="col-6" label="{{ trans('Dashboard/Tublar/mudjar.JobTicketNumber') }}" name="order_id"
             id="order_id" disabledOption="Job Ticket Numbers" :data="$orders"
             selectedData="{{ optional($mudjar->getOrders)->id }}"
             span="{{ trans('Dashboard/Tublar/mudjar.JobTicketNumber') }}" />
         <br>
     @else
         <x-form.dropdown class="col-12" label="{{ trans('Dashboard/Tublar/mudjar.JobTicketNumber') }}" name="order_id"
             id="order_id" disabledOption="Job Ticket Numbers" :data="$orders"
             selectedData="{{ optional($mudjar->getOrders)->id }}"
             span="{{ trans('Dashboard/Tublar/mudjar.JobTicketNumber') }}" />
         <br>
     @endif

     <hr>
     <br>
     <x-form.input_label class="col-4" value="{{ $mudjar->tool ?? '' }}" placeholder="Enter Tools " label="Tools :"
         type="text" name="tool" id="tool" />
     {{-- <x-form.input_label class="col-4" value="{{ $mudjar->address ?? '' }}" placeholder="Enter address" label="address :" type="text" name="address" id="address" /> --}}
     <x-form.input_label class="col-4" placeholder="Enter Serial" value="{{ $mudjar->serial ?? '' }}" label="Serial :"
         type="text" name="serial" id="serial" />
     <x-form.input_label class="col-4" placeholder="Choose {{ $examType }} Report Date"
         value="{{ $mudjar->date ?? '' }}" label="{{ $examType }} Report Date :" type="date" name="date"
         id="date" />
     <x-form.textarea_label class="col-6" span="enter Inspection Procedure" placeholder="Enter Inspection Procedure"
         value="{{ $mudjar->inspect_procedure ?? '' }}" label="Inspection Procedure :" name="inspect_procedure"
         rows='3' />
     <x-form.textarea_label class="col-6" span="enter Summary" placeholder="Enter Summary"
         value="{{ $mudjar->summary ?? '' }}" label="Summery :" name="summary" rows='3' />
     <x-form.dropdown class="col-6" label="{{ trans('Dashboard/Tublar/mudjar.accept') }}" name="accept"
         id="accept" disabledOption="choose accept contion" :data="$accept"
         selectedData="{{ optional($mudjar->getAccept)->id }}" span="{{ trans('Dashboard/Tublar/mudjar.accept') }}" />
     @include('dashboard.pages.tublar.mud-jar.modal.inspectionType')
 </div>
