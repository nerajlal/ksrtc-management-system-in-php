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
                <h3 class="card-title">DataTable Of D-Card Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                 	<th>Card Type</th>
				<th>Amount</th>
				<th>Month</th>
				<th>Card Details</th>
		 </tr>
                  </thead>
                  <tbody>
             	{foreach from=$views item="dd"}
			<tr>
				<td>{$dd.cardtype}</td>
				<td>{$dd.amount}</td>
				<td>{$dd.month}</td>
				<td>{$dd.carddetails}</td>
			<td><a href="dcardedit.php?key={$dd.ckey}" class="btn btn-warning">Edit</a></td>
				<td><a href="dcarddel.php?key={$dd.ckey}" class="btn btn-danger">Delete</a></td>
			</tr>
				   {/foreach}
				     </tbody>
                  <tfoot>
                  <tr>
                 	<th>Card Type</th>
				<th>Amount</th>
				<th>Month</th>
				<th>Card Details</th>
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