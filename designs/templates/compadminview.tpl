  
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
             	 {foreach from=$views item="p"}
					<tr>
					<td>{$p.name}</td>
					<td>{$p.contactno}</td>
          <td>{$p.subject}</td>
          <td>{$p.complaint}</td>
          <td>{$p.currentdate}</td>

          <!-- <td><a href="adminpubview.php?key={$p.lkey}"></a></td> -->
<td><a href="compadminview.php?key={$p.complaint}&&key1={$p.okey}"></a></td>
        {if $p.reply==""}
        <td><a href="adminstudreply.php?key={$p.okey}" class="btn btn-primary">Reply</a></td>
          {else}
          <td><a href=" " class="btn btn-success">Replied</a></td>
        </tr>
        {/if}
           {/foreach}
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