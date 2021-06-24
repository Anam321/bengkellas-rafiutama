<main class="app-main">
   <div class="wrapper">
      <div class="page">
         <div class="page-inner">

            <header class="page-navs bg-warning shadow-sm">
               <div class="input-group input-group-alt">
                  <div class="input-group-prepend">
                     <select id="filterby" class="custom-select">
                        <option id="all" value=""></option>
                        <option id="acc" value="1"></option>
                        <option id="notacc" value="0"></option>
                     </select>
                  </div>
                  <div class="input-group has-clearable">
                     <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                     <label class="input-group-prepend" for="searchClients"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label>
                     <input type="text" class="form-control" id="searchClients" data-filter=".feed .feed-post" placeholder="Pencarian testimoni ...">
                  </div>
               </div>
            </header>

            <!-- list data testimoni processing and showing data with ajax -->
            <div id="list_data"></div>
            <!-- #list data testimoni processing and showing data with ajax -->


         </div>
      </div>
   </div>
</main>