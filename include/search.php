<div class="child panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">ZOEKEN SPOT</h2>
  </div>
  <div class="panel-body" id="onder">
    <div class="row">
      <form  method="post" action="index.php"  id="searchform">
        <div class="col-md-7">
            <input type="text" name="search" class="form-control">  
        </div>  
        <div class="col-md-3 col-xs-6">
            <select id="select-filter" palceholder="Filter" class="form-control">
                <option value="">Geen filter</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
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