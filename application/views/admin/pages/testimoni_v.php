<main class="app-main">
   <div class="wrapper">
      <div class="page">
         <div class="page-inner">
            <header class="page-title-bar">

               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item active">
                        <a href="<?= base_url('admin/dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                     </li>
                  </ol>
               </nav>

               <div class="d-md-flex align-items-md-start">
                  <h1 class="page-title mr-sm-auto"> Testimoni </h1>
                  <div class="dt-buttons btn-group flex-wrap">
                     <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>Copy</span></button>
                     <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="myTable" type="button"><span>Print</span></button>
                  </div>
               </div>
            </header>

            <div class="page-section">
               <div class="card card-fluid">
                  <div class="card-header"> Data Testimoni </div>
                  <div class="card-body">
                     <div class="form-group">

                        <div class="input-group has-clearable">
                           <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                           <div class="input-group-prepend">
                              <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                           </div><input id="table-search" type="text" class="form-control" placeholder="Cari Testimoni">
                        </div>
                     </div>

                     <table id="myTable" class="table">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th> Nama Pelanggan </th>
                              <th> Komentar </th>
                              <th> Foto </th>
                              <th> Status </th>
                              <th style="width:100px; min-width:100px;"> &nbsp; </th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="feed">
               <div class="feed-post card">
                  <div class="card-header card-header-fluid">
                     <a href="#" class="btn-account" role="button">
                        <div class="user-avatar user-avatar-lg">
                           <img src="assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="account-summary">
                           <p class="account-name"> Ethan Marshall </p>
                           <p class="account-description"> New member · Yesterday at 5:48 PM </p>
                        </div>
                     </a>
                     <div class="dropdown align-self-start ml-auto">
                        <button class="btn btn-icon btn-light text-muted" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                           <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Get notified</a> <a href="#" class="dropdown-item">Mute notified</a> <a href="#" class="dropdown-item">Permalink</a> <a href="#" class="dropdown-item">Block this user</a> <a href="#" class="dropdown-item">Remove</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <p class="mb-2"> Hey there! this is a post with outbound link, <a href="#" class="mention">@stilearning</a> ratione doloremque eos <a href="#" class="hashtag">#looper</a> aliquid ipsam, molestias cumque asperiores mollitia nam corrupti dolore recusandae nihil? </p><!-- .outbound-link -->
                     <a href="#" class="outbound-link">
                        <h5 class="outbound-title"> Expanding Your Home Network’s Reach </h5>
                        <p class="outbound-text"> Atque natus, quod quas commodi beatae inventore eligendi recusandae necessitatibus eum distinctio. </p>
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</main>