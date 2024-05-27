 <div class="row"> 
 <x-form.dropdown class="col-12" label="{{ trans('Dashboard/jobTicket.requiredJobTicket') }}" name="order_id" id="order_id" disabledOption="Job Ticket Numbers" :data="$orders" selectedData="{{ optional($jobTicket->getOrders)->id }}" span="{{ trans('Dashboard/jobTicket.requiredJobTicket') }}" />                                                                                                                                                                                                               
<x-form.input_label class="col-6" value="{{ $jobTicket->work_number ?? '' }}" placeholder="Enter Work Number " label="Work Number :" type="text" name="work_number" id="work_number" />
{{--  <x-form.input_label class="col-4" value="{{ $jobTicket->address ?? '' }}" placeholder="Enter address" label="address :" type="text" name="address" id="address" />  --}}
<x-form.input_label class="col-6" placeholder="Enter ISPR" value="{{ $jobTicket->ispr ?? '' }}" label="ISPR :" type="text" name="ispr" id="ispr" />
<x-form.input_label class="col-4" placeholder="Choose Start Date" value="{{ $jobTicket->start_date ?? '' }}" label="Job Ticket Start Date :" type="date" name="start_date" id="start_date" />
<x-form.input_label class="col-4" placeholder="Choose End Date" value="{{ $jobTicket->End_date ?? '' }}" label="Job Ticket End Date :" type="date" name="end_date" id="end_date" />
<x-form.input_label class="col-4" placeholder="Enter Report well name" label="well name :" value="{{ $jobTicket->well_name ?? '' }}" type="text" name="well_name" id="well_name" />
<x-form.input_label class="col-6" placeholder="Enter ref number" value="{{ $jobTicket->ref_number ?? '' }}" label="ref number:" type="text" name="ref_number" id="ref_number" />
<x-form.input_label class="col-6" placeholder="Enter approval Name" value="{{ $jobTicket->approval ?? '' }}" label="approval:" type="text" name="approval" id="approval" />
<x-form.input_label class="col-12" placeholder="Enter Job Ticket Total Price ($)" value="{{ $jobTicket->job_price ?? '' }}" label="Job Ticket Total Price :" type="text" name="job_price" id="job_price" />                                      
 </div>