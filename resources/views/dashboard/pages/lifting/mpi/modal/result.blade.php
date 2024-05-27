 <div class="col-12">
     <!-- Accordions Bordered -->
     <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-yellow" id="accordionBordered">
         <div class="accordion-item">
             <h2 class="accordion-header" id="accordionborderedExample1">
                 <button class="accordion-button" type="button" id="result_btn" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                     Enter Job Result
                 </button>
             </h2>
             <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse hide" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                 <div class="accordion-body ">
                 {{--  ckeditor-classic  --}}
                     <x-form.textarea_label class="col-12" span="enter job result" placeholder="Enter job result" value="{{ $mpi->result ?? '' }}" label="result :" name="result" rows='5' />
                 </div>
             </div>
         </div>
     </div>
     <br>
     <br>
