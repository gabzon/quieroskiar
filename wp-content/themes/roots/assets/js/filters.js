$(document).ready(function() {
  $(".filter-query").change(function(){
    var values=[];
    values=$(".filter-query:checked").map(function(){return this.value;}).toArray();
    for(var i=0, data="filters"+i;i<values.length; ++i){
      //alert(values[i]);
      if(i>0){
        data=data+'&'+'filters'+i;
      }
      data=data+'='+values[i];
    }

    /*$('.region-query').each(function() {
        this.checked = false;
    });*/

    if(values.length>0){
        path="wp-content/themes/roots/templates/content-table-filters.php";
        $("#dtables").load(path,data);
    }else{
      path="wp-content/themes/roots/templates/content-table.php";
      $("#dtables").load(path);
    }
  });
});
