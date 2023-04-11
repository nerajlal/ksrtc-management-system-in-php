<?php /* Smarty version 2.6.26, created on 2022-05-05 08:25:51
         compiled from notview.tpl */ ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Of Notification</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
				<th>Notification</th>
                 	 </tr>
                  </thead>
                  <tbody>
             	<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['n']['notification']; ?>
</td>
				<td><a href="notedit.php?key=<?php echo $this->_tpl_vars['n']['nkey']; ?>
" class="btn btn-warning">Edit</a></td>
				<td><a href="notdel.php?key=<?php echo $this->_tpl_vars['n']['nkey']; ?>
" class="btn btn-danger">Delete</a></td>
			</tr>
					<?php endforeach; endif; unset($_from); ?>	
					     </tbody>
                  <tfoot>
                  <tr>
				<th>Notification</th>
                 	 </tr>
		  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->