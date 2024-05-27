$(document).ready(function() {
  // Listen for changes in any .extSelect dropdown
  $('.extSelect').change(function() {
      // Get the selected option value
      var selectedValue = $(this).val();
      // Find the corresponding .extInput and set its value
      $(this).closest('.ext-filter-check').find('.extInput').val(selectedValue);
      console.log(selectedValue);
  });

  // Listen for keyup event on any .extInput
  $('.extInput').keyup(function(){
        // Find the closest .ext-filter-check parent
        var filterCheck = $(this).closest('.ext-filter-check');
        // Find the corresponding .extSelect within the .ext-filter-check
        var extSelect = filterCheck.find('.extSelect');
        // Update the text of the disabled option in the corresponding .extSelect
        extSelect.find('#disabledOption').text($(this).val());
        
        
        
    });  

    // $('.extInput').keyup(function(){
    //   $('#disabledOption').text($(this).val());
    //   $('.extSelect').val($(this).val());
    // });
  // Initialize the selected option in each .extSelect based on the initial value of its corresponding .extInput
  // $('.extSelect').each(function() {
  //     $(this).val($(this).closest('.ext-filter-check').find('.extInput').val());
  // });
});
