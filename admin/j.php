<table>
          <tr>
            <th>Name</th>
            <th>Salary</th>
            <th>Designation</th>
            <th>Address</th>
            <th>DoJ</th>
            <th>DoB</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
           <?php
                        while($row1=mysqli_fetch_array($result2))
                        {
                          echo "<tr> <form action="" method=POST>";
                          echo "<td><input type=text name="pname value='".$row[1]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[2]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[3]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[4]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[5]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[6]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[7]."'></td>;
                          echo "<td><input type=text name="pname value='".$row[8]."'></td>;
                          echo "<td><input type=submit>";
                          echo "</form></tr>";
                        }
                        ?>
        </table>



                  <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Edit Employee</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="name" name="name" type="text"value="<?php echo $row2[1]?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="address" class="control-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="address" name="address" required></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Date of Birth</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="dob" name="dob" type="date" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="designation" class="control-label col-lg-2">Designation</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="designation" name="designation" required="">
                        <option value="Manager">Manager</option>
                        <option value="Room Boy">Room Boy</option>
                        <option value="Reciptionist">Reciptionist</option>
                        <option value="porters">porters</option>
                        <option value="supervisor">supervisor</option>
                        <option value="Accountant">Accountant</option>
                        <option value="Ass. Manager">Ass. Manager</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="salary" class="control-label col-lg-2">Salary</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="salary" name="salary" type="text" />
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Date of Join</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="dateofjoin" name="dateofjoin" type="date" />
                    </div>
                </div>

                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input class="btn btn-theme"  name="submit" type="submit"></input>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>