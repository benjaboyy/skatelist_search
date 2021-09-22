<?php if(isset($space) && $space == 1): ?>
	<style>
		.child {
			margin-top: 30%;
		}
	</style>
<?php endif ?>
<div class="child panel panel-default">
  <div class="panel-heading hidden-xs">
    <h2 class="panel-title">ZOEKEN SPOT</h2>
  </div>
  <div class="panel-body" id="onder">
    <div class="row">
      <form  method="post" action="index.php"  id="searchform">
        <div class="col-md-7">
            <input placeholder="Naam of Plaats" type="text" name="search" class="form-control">  
        </div>  
        <div class="col-md-2 col-sm-4 col-xs-6">
            <select id="select-filter" palceholder="Filter" name="select-filter" class="form-control">
                <option name="no_filter" value="no_filter">Geen filter</option>
                <option name="park" value="park">park</option>
                <option name="spot" value="spot">spot</option>
            </select>
        </div>
          <div class="col-md-1 col-sm-2 hidden-xs">
            <button type="button" class="btn btn-primary btn-block" onclick="$('#grids').toggle(); " style="padding: 0px; font-size: 20px;" ><i class="fa fa-th-large"></i></button>
          </div>
        <div class="col-md-2 col-xs-6">
 
            <button  type="submit" value="Search" class="btn btn-primary breed">
                <i class="fa fa-search"></i>
                <span class="hidden-xs">Zoeken</span>
            </button>
        </div>
       </form>       
    </div>
  </div>
</div>

