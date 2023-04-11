  
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
			{foreach from=$views item="d"}
			<tr>
				<td>{$d.fullname}</td>
				<td>{$d.contactno}</td>
				<td>{$d.gender}</td>
				<td>{$d.date_of_birth}</td>
				<td>{$d.job}</td>
				<td>{$d.certificate}</td>
				<td>{$d.currentdate}</td>
				<td><a href="jadapr.php?key={$d.jakey}" class="btn btn-primary">Approve</a></td>
				<td><a href="jadrej.php?key={$d.jakey}" class="btn btn-danger">Reject</a></td>
<td><a href="jinterview.php?key={$d.jakey}" class="btn btn-success">Upload_Interview</a></td>
				</tr>
				{/foreach}
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

