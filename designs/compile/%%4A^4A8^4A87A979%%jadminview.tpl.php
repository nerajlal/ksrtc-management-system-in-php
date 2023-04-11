<?php /* Smarty version 2.6.26, created on 2022-04-21 08:03:22
         compiled from jadminview.tpl */ ?>
  
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
                <h3 class="card-title">DataTable Of Job Approvation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
				<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Job Category</th>
				<th>Certificate</th>
				<th>Current Date</th> 
				</tr>
				</thead>
				<tbody>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['d']['fullname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['date_of_birth']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['job']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['certificate']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
				<td><a href="jadapr.php?key=<?php echo $this->_tpl_vars['d']['jakey']; ?>
" class="btn btn-primary">Approve</a></td>
				<td><a href="jadrej.php?key=<?php echo $this->_tpl_vars['d']['jakey']; ?>
" class="btn btn-danger">Reject</a></td>
<td><a href="jinterview.php?key=<?php echo $this->_tpl_vars['d']['jakey']; ?>
" class="btn btn-success">Upload_Interview</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</tbody>
			<tfoot>
				<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Job Category</th>
				<th>Certificate</th>
				<th>Current Date</th> 
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
