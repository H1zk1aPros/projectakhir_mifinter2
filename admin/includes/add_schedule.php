<h4>New Schedule</h4>
<hr>
<diV class="row" style="background-color:#181e22; color:white;" >
    <div class="col-sm-9">
    <?php  insert_schedule(); ?>                 <!-- insertion of categories -->
                
        <form action="" method="POST" class="mt-9">
        <div class="row">
            <div class="col-md-3">&nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_time">Time</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_time" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_mon">Monday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_mon" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_tue">Tuesday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_tue" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_wed">Wednesday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_wed" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_thu">Thusday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_thu" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_fri">Friday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_fri" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_sat">Saturday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_sat" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:#181e22; color:white;">
                <label for="sch_sun">Sunday</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="sch_sun" >
            </div>
        </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-secondary " name="submit" value="CREATE" >
                    </div>
                </form>
                </div>

                <?php                           //Edit categories
                ?>
        </div>