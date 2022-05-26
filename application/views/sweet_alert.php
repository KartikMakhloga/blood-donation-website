<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('drop')): ?>

<script>
swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!"
 

}).then(function(json_data) {
  //delete item
}, function(dismiss) {
  if (dismiss === 'cancel' || dismiss === 'close') {
    // ignore
  } 
})
</script>
<?php endif; ?>