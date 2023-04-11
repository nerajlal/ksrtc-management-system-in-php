<?php /* Smarty version 2.6.26, created on 2022-04-22 10:12:10
         compiled from compadminview.tpl */ ?>
  
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
                <h3 class="card-title">DataTable Of Complaints</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                 	<th>Name</th>
				          <th>Contact No</th>
				        	<th>Subject</th>
                   <th>Complaint_Details</th>
                   <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
             	 <?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
					<tr>
					<td><?php echo $this->_tpl_vars['p']['name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['p']['contactno']; ?>
</td>
          <td><?php echo $this->_tpl_vars['p']['subject']; ?>
</td>
          <td><?php echo $this->_tpl_vars['p']['complaint']; ?>
</td>
          <td><?php echo $this->_tpl_vars['p']['currentdate']; ?>
</td>

          <!-- <td><a href="adminpubview.php?key=<?php echo $this->_tpl_vars['p']['lkey']; ?>
"></a></td> -->
<td><a href="compadminview.php?key=<?php echo $this->_tpl_vars['p']['complaint']; ?>
&&key1=<?php echo $this->_tpl_vars['p']['okey']; ?>
"></a></td>
        <?php if ($this->_tpl_vars['p']['reply'] == ""): ?>
        <td><a href="adminstudreply.php?key=<?php echo $this->_tpl_vars['p']['okey']; ?>
" class="btn btn-primary">Reply</a></td>
          <?php else: ?>
          <td><a href=" " class="btn btn-success">Replied</a></td>
        </tr>
        <?php endif; ?>
           <?php endforeach; endif; unset($_from); ?>
              </table>
                          </tbody>
                  <tfoot>
                  <tr>
                  <th>Name</th>
                  <th>Contact No</th>
                  <th>Subject</th>
                   <th>Complaint_Details</th>
                   <th>Date</th>
                 
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