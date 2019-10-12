<?php if(isset($space) && $space == 1): ?>
	<style>
		.child {
			margin-top: 30%;
		}
	</style>
<?php endif ?>
<div class="child panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">ZOEKEN SPOT</h2>
  </div>
  <div class="panel-body" id="onder">
    <div class="row">
      <form  method="post" action="index.php"  id="searchform">
        <div class="col-md-7">
            <input placeholder="Naam of Plaats" type="text" name="search" class="form-control">  
        </div>  
        <div class="col-md-3 col-xs-6">
            <select id="select-filter" palceholder="Filter" name="select-filter" class="form-control">
                <option name="no_filter" value="no_filter">Geen filter</option>
                <option name="park" value="park">park</option>
                <option name="spot" value="spot">spot</option>
            </select>
        </div>
        <div class="col-md-2 col-xs-6">

            <button  type="submit" value="Search" class="btn btn-primary breed">
                <i class="fa fa-search"></i>
                Zoeken
            </button>
        </div>
       </form>       
    </div>
  </div>
</div>

