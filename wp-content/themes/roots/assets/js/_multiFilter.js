
$(document).ready(function() {
   var table = $('#myDataTable').dataTable({
      "order"      : [[2,'asc']],
      "columnDefs" : [
         { "visible": false, "targets": 0, "searchable":true },
         { "visible": false, "targets": 1, "searchable":true }
   ]
   });


   new $.fn.dataTable.FixedHeader( table );

   $(':checkbox[name="column"]').click(function() {
      var filter = '',
      regexFilter = true,
      smartFilter = true;

      filter = $('[name="' + this.name + '"]:checked').map(function () {
         return this.value;
      }).toArray().join(' ');

      $('#myDataTable').dataTable().fnFilter(filter, null, regexFilter, smartFilter);
   });

});
