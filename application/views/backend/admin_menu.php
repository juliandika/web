<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?=anchor(base_url(), 'Toko Online', ['class'=>'navbar-brand'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php if($this->session->userdata('username')) : ?>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <span style="line-height:50px">
            <?php echo 'You Are: ' . $this->session->userdata('username');?>
          </span>
        </li>
        <li>
            <?php echo anchor('logout', 'Logout');?>
        </li>
      </ul>
    <?php endif; ?>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
