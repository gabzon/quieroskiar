$(document).ready(function() {
  $(".region-query").change(function(){
    var values=[];
    values=$(".region-query:checked").map(function(){return this.value;}).toArray();
    for(var i=0, data="regions"+i;i<values.length; ++i){
      //alert(values[i]);
      if(i>0){
        data=data+'&'+'regions'+i;
      }
      data=data+'='+values[i];
    }

    /*$(".filter-query").each(function() {
        this.checked = false;
    });*/

    if(values.length>0){
        path="wp-content/themes/roots/templates/content-table-regions.php";
        $("#dtables").load(path,data);
    }else{
      path="wp-content/themes/roots/templates/content-table.php";
      $("#dtables").load(path);
    }
  });
});
