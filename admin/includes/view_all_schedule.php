<div class="text-center">
    <h4>SCHEDULE</h4>
    <h6>List Of All Schedules</h6>
    <hr>
    <table class="table table-hover table-dark table-bordered">
    <thead>
                    <tr>
                      <th scope="col" width='50'>S.No.</th>
                      <th scope="col" width='120'>Time</th>
                      <th scope="col" width='110'>Monday</th>
                      <th scope="col" width='110'>Tuesday</th>
                      <th scope="col" width='110'>Wednesday</th>
                      <th scope="col" width='110'>Thuesday</th>
                      <th scope="col" width='110'>Friday</th>
                      <th scope="col" width='110'>Saturday</th>
                      <th scope="col" width='110'>Sunday</th>
                      <th scope="col" >Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php FindAllSchedule(); ?>               <!-- find all categories -->     
                    <?php DeleteSchedule(); ?>                <!--delete category -->
                </tbody>
    </table>
</div>
