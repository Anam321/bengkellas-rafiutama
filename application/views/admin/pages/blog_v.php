<main class="app-main">
   <div class="wrapper">

      <div class="page">
         <div class="page-inner">
            <header class="page-navs bg-light shadow-sm">
               <div class="input-group has-clearable">
                  <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                  <label class="input-group-prepend" for="searchClients"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label>
                  <input type="text" class="form-control" id="searchClients" data-filter=".board .list-group-item" placeholder="Cari blog/artikel">
               </div>
            </header>
            <button type="button" class="btn btn-success btn-floated" onclick="post()" title="Add new post"><i class="fa fa-plus"></i></button>

            <div class="board p-0 perfect-scrollbar">
               <!-- list produk in here process with ajax -->
               <div id="list_data" class="list-group list-group-flush list-group-bordered list-group-divider shadow-sm" data-toggle="radiolist"> </div>
               <!-- # list produk in here process with ajax  -->
            </div>

         </div>
      </div>
   </div>
</main>