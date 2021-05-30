<script>
    $('.open-modal').click(function(e){
         var $form = $(this).closest('form');
         e.preventDefault();
         $('#deleteModal').modal('show').on('click', '#delete', function(e) {
             $form.trigger('submit');
         });
     });
 </script>