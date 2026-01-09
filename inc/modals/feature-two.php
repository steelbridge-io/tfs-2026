<!--
Included in this file are the modals for featured reports in the stream report
-->

<?php if(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'AntelopeCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Antelope Creek Lodge</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $antelopecreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $antelopecreek_report; ?>
                     
                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $antelopecreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'BaileyCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Bailey Creek</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $baileycreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $baileycreek_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $baileycreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'BattleCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Battle Creek</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $battlecreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $battlecreek_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $battlecreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'BaumLake') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Baum Lake</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $baumlake_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $baumlake_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $baumlake_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'Bollibokka') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Bollibokka</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $bollibokka_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $bollibokka_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $bollibokka_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'CircleSeven') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Circel 7 Guest Ranch</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $circle7_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $circle7_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $circle7_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'ClearCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Clear Creek Ranch</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $clearcreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $clearcreek_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $clearcreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'FallRiver') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Fall River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $fallriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $fallriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $fallriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'GoldRiver') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Gold River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $goldriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $goldriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $goldriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'HatCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Hat Creek</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $hatcreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $hatcreek_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $hatcreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'HatCreekRanch') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Hat Creek Ranch</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $hatcreekranch_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $hatcreekranch_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $hatcreekranch_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'IronCanyon') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Iron Canyon Reservoir</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $ironcanyonres_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $ironcanyonres_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $ironcanyonres_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'KeswickRes') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Keswick Reservoir</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $keswickres_report_update; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $keswickres_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $keswickres_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'KlamathRiver') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Klamath River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $klamathriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $klamathriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $klamathriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'LakeShasta') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Lake Shasta</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $lakeshasta_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $lakeshasta_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $lakeshasta_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'LewistonLake') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Lewiston Lake</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $lewistonlake_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $lewistonlake_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $lewistonlake_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'LowerSac') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Lower Sacramento River</h4>
                  </div>
                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $lowersacramento_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $lowersacramento_report; ?>


                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $lowersacramento_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'LukLake') :?>

  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Luk Lake</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $luklake_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $luklake_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $luklake_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'ManzanitaLake') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Manzanita Lake</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $manzanitalake_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $manzanitalake_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $manzanitalake_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'McCloudReservoir') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>McCloud Reservoir</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $mccloudreservoir_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $mccloudreservoir_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $mccloudreservoir_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'McCloudRiver') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>McCloud River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $mccloudriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $mccloudriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $mccloudriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'OasisSprings') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Oasis Springs</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $oasissprings_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $oasissprings_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $oasissprings_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'PedrottiPonds') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Pedrotti Ponds</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $pedrottiponds_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $pedrottiponds_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $pedrottiponds_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'PitRiver') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Pit River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $pitriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $pitriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $pitriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'PyramidLake') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Pyramid Lake</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $pyramidlake_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $pyramidlake_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $pyramidlake_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'RockCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Rock Creek</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $rockcreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $rockcreek_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $rockcreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'SugarCreek') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Sugar Creek</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $sugarcreek_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $sugarcreek_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $sugarcreek_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'Trinity') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Trinity River</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $trinityriver_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $trinityriver_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $trinityriver_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'UpperSac') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div id="featuredreport2">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Upper Sacramento</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $uppersac_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $uppersac_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $uppersac_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php elseif(get_post_meta(get_the_ID(), 'meta-two-select', true) == 'WilksPond') :?>

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" class="modal-style">
          <div class="featuredreport1">
            <div class="report-panel">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6">
                    <h4>Wilk's Pond</h4>
                  </div>

                  <div class="col-sm-6">
                    <h4><strong>Updated:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: DATE === -->

                      <?php echo $wilkspond_updated; ?>

                      <!-- === END EDIT SECTION: DATE === -->

                    </h4>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Report:</strong>

                      <!-- === BEGIN EDIT SECTION: REPORT === -->

                      <?php echo $wilkspond_report; ?>

                      <!-- === END EDIT SECTION: REPORT === -->

                    </p>

                    <p><strong>Hot Flies:&nbsp;</strong>

                      <!-- === BEGIN EDIT SECTION: HOT FLIES === -->

                      <?php echo $wilkspond_hot_flies; ?>

                      <!-- === END EDIT SECTION: HOT FLIES === -->

                    </p>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>