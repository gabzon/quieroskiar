
$(document).ready(function() {
   var table = $('#myDataTable').dataTable({
      "order":[[2,'asc']]
   });

   new $.fn.dataTable.FixedHeader( table );

   $(':checkbox[name="filter-column"]').click(function() {
      var filter = '',
      regexFilter = true,
      smartFilter = false;

      filter = $('[name="' + this.name + '"]:checked').map(function () {
         return this.value;
      }).toArray().join('|');

      $('#myDataTable').dataTable().fnFilter(filter, 0, regexFilter, smartFilter);
   });
});
