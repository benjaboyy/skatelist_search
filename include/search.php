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
                <option value="">Plaats</option>
                <option value="">park</option>
                <option value="">spot</option>
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