$(document).ready(function() {
   $('#myDataTable').dataTable();

   $(':checkbox[name="proximity-column"]').click(function() {
      var filter = '',
      regexFilter = true,
      smartFilter = false;

      filter = $('[name="' + this.name + '"]:checked').map(function () {
         return this.value;
      }).toArray().join('|');

      $('#myDataTable').dataTable().fnFilter(filter, 1, regexFilter, smartFilter);
   });

});
