<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <!---breadcrumbs start --->
        <ul class="breadcrumb">
            <li class=""><i class="fa fa-home"></i>
            </li>
            <li>
                <a href="/Welcome/index">Student </a>/ Edit student details
            </li>
        </ul>
        <!---breadcrumbs end --->
        
    </div>
</div>
<div>                              
    <a href="<?php echo base_url(); ?>Welcome/View/<?php echo $record->Student_id; ?>"class="btn btn-danger btn-small" >
        <font color="white"><i class="fa fa-reply"></i> Back to<b> <?php echo $record->Student_Name ?> </b> Details</font>
    </a>
    <form method="post" action= "" id="my_form" enctype="multipart/form-data" class="form-horizontal">
        <input data-val="true" data-val-number="This field must be a number." data-val-required="Data field is required." id="sid" name="sid" type="hidden" value="<?php echo $record->Student_id ?>">    <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"> EDIT STUDENT DETAILS OF <span><b><?php echo $record->Student_id ?> </b></span> </h3>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover ">
                        <tbody>
                             <tr>
                            <td>
                                Name<font color="red">*</font>
                            </td>
                            <td>
                                <input type="text" name="sname" id="sname" class="form-control tabletdwd" placeholder="Enter Name"
                                       value="<?php echo $record->Student_Name ?>" required autofocus> 
                            </td>
                        </tr>
                                  <tr>
                                      <td>
                                          Email ID<font color="red">*</font>
                                      </td>
                                      <td>
                                         <input type="text" name="semail" id="semail" class="form-control tabletdwd" placeholder="Enter Email ID"   value="<?php echo $record->Student_Email ?>" required> 
                                      </td>
                                      
                                    
                                  </tr>
                                  <tr>
                                      <td>
                                          Mobile No:
                                      </td>
                                      <td>
                                         <input type="text" name="smobile" id="smobile" class="form-control tabletdwd" placeholder="Enter MobileNumber"   value="<?php echo $record->Student_Mobile ?>" > 
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Address:
                                      </td>
                                      <td>
                                         <input type="text" name="saddress" id="saddress" class="form-control tabletdwd" placeholder="Enter Address"   value="<?php echo $record->Student_Address ?>"> 
                                      </td>
                                  </tr>
                           
                            <tr>
                                <td class="span2"> </td>
                                <td>
                                    <button type="Submit" id="save" class="btn btn-primary btn-3d" value="Save">
                                        <i class="fa fa-save"></i> &nbsp;Save
                                    </button>
                                    <button type="Reset" class="btn btn-danger btn-3d" value="Reset">
                                        <i class="fa fa-refresh"></i> &nbsp;Reset
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>

                