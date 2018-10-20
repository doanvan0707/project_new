$(document).ready(function(){
	$('.delete-cus').click(function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      });

  $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var title = button.data('title'); 
    var des = button.data('des'); 
    var testid = button.data('testid'); 
    var modal = $(this);
    modal.find('.modal-body #title').val(title);
    modal.find('.modal-body #des').val(des);
    modal.find('.modal-body #testid').val(testid);
  }); 

  $('#show').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var title = button.data('title'); 
    var des = button.data('des'); 
    var testid = button.data('testid'); 
    var modal = $(this);
    modal.find('.modal-body #title').val(title);
    modal.find('.modal-body #des').val(des);
    modal.find('.modal-body #testid').val(testid);
  });    

  $('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var testid = button.data('testid'); 
    var modal = $(this);
    modal.find('.modal-body #testid').val(testid);
  });   

});
      
