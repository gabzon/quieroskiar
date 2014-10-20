<section>
  <ul class="filters">
    <!--<li><input type="checkbox" class="filter-query" value="shopping"> Shopping</li>
    <li><input type="checkbox" class="filter-query" value="sport"> Sport</li>
  -->
    <?php
      $taxonomy = array(
        'post_tag',
        'Filters'
      );
      $args = array(
        'orderby'  => 'name',
        'hide_empty' => 0
      );
      $filters = get_terms($taxonomy,$args);
      foreach($filters as $filter){
        //echo"<li><input type='checkbox' class='filter-query' value='$filter->term_id'> $filter->name</li>\n";
        echo"<li><input type='checkbox' class='filter-query' value='$filter->name'> $filter->name</li>\n";
      }
    ?>
  </ul>
</section>

<script type="text/javascript" language="javascript" class="init">
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
</script>
