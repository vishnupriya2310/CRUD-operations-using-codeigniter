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
    <a href="<?php echo base_url(); ?>Welcome/search/<?php echo $record->Student_id; ?>"class="btn btn-danger btn-small" >
        <font color="white"><i class="fa fa-reply"></i> Back to<b> <?php echo $record->Student_Name ?> </b> Details</font>
    </a>
    <form method="post" action= "" id="my_form" enctype="multipart/form-data" class="form-horizontal">
        <input data-val="true" data-val-number="This field must be a number." data-val-required="Data field is required." id="sid" name="sid" type="hidden" value="<?php echo $record->Student_id ?>">    <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"> SEARCH STUDENT DETAILS  </h3>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover ">
                        <tbody>
                           
                                  <tr>
                                      <td>
                                          Name:
                                      </td>
                                      <td>
                                         <input type="text" name="sname" id="sname" class="form-control tabletdwd" placeholder="Enter name"   value=""> 
                                      </td>
                                  </tr>
                           
                            <tr>
                                <td class="span2"> </td>
                                <td>
                                    <button type="Submit" id="save" class="btn btn-primary btn-3d" value="Save">
                                        <i class="fa fa-save"></i> &nbsp;Save
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