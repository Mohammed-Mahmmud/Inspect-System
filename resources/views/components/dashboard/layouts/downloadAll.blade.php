       @props([
       'route',
       ])

       <button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-bs-target=".downloadAllModal"><i class="bx bxs-download" title='Download'></i></button>
       <div class="modal fade downloadAllModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                   <form class="" action="{{route($route)}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <input class="checkedData" type='hidden'  name="data[]">
                       <div class="modal-body text-center p-5">
                           <i class=" bx bxs-cloud-download text-primary display-1"></i>
                           <div class="mt-4">
                               <h3 class="mb-3">Are You Sure!</h3>
                               <h6 class="text-muted mb-4">Do You Want To Download Selected Items?</h6>
                               <div class="hstack gap-2 justify-content-center">
                                   <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                   <button  type="submit"  class="btn btn-primary">Download</button>
                               </div>
                           </div>
                       </div>
                   </form>
               </div><!-- /.modal-content -->
           </div><!-- /.modal-dialog -->
       </div><!-- /.modal -->
<script src="{{asset('dashboard/layouts/components/deleteAll/js/script.js')}}"></script>