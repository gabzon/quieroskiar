$(document).ready(function() {
  $(".filter-query").change(function(){
    var values=[];
    var data="";
    values=$(".filter-query:checked").map(function(){return this.value;}).toArray();
    for(var i=0, data="data"+i;i<values.length; ++i){
      //alert(values[i]);
      if(i>0)
        data=data+'&'+'data'+i;
      data=data+'='+values[i];
      //
    }
    if(values.length>0){
        //alert(data);
        //alert("si hay elementos");
        path="wp-content/themes/roots/templates/content-table-query.php";
        $("#dtables").load(path,data);
    }else{
      path="wp-content/themes/roots/templates/content-table.php";
      $("#dtables").load(path);

    }

    /*if(this.checked){
      var values=[];
      //alert($(".filter-query:checked").map(function(){return this.value;}).get().join(","));
      /////values=$(".filter-query:checked").map(function(){return this.value;}).toArray();
      //var values=$(".filter-query").val();
      //path="wp-content/themes/roots/templates/content-table-query.php";
      //$("#dtables").load(path);
      //$("#dtables").load("<?php //echo get_template_part('templates/content','table-query'); ?>");
    }else{
      alert("hol");
      //*path="wp-content/themes/roots/templates/content-table.php";
      //$("#dtables").load(path);
    }*/
  });
});
