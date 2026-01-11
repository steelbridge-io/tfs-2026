<?php
/**
 * Mobile-specific layout for regional reports
 * This file is conditionally included for small viewports only
 */

// Access the same variables that are available in the main template
// No need to redefine them if they're already in the parent scope
?>

<div id="regional-reports-mobile" class="container mt-5">
 <div class="fishing-reports-cta mb-5">
 <h3 class="text-center">Fishing Reports</h3>
 <p class="lead text-center">Click each category to expand a selection of regional options</p>
 </div>
 <!-- Rivers Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-rivers-content"
					 aria-expanded="false" aria-controls="mobile-rivers-content">
		<strong>Rivers Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>
	  <div id="mobile-rivers-content" class="collapse">
	      <div class="card-body">
	          <div class="report-buttons-mobile">
	          <!-- ##fall-river-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" id="fall-river-tab-mobile" type="button" data-bs-toggle="modal" data-bs-target="#fall-river-modal">Fall River:&nbsp;&nbsp;
<?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##hat-creek-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#hat-creek-modal">Hat Creek:&nbsp;
<?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
	            <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
	            <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
	            <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
	            <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##klamath-river-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#klamath-river-modal">Klamath River:&nbsp
<?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##lower-sac-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#lower-sac-modal">Lower Sacramento River:&nbsp
<?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##mccloudriver-river-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#mccloud-river-modal">McCloud River:&nbsp
<?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
	                  if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
	            <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
	            <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
	            <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
	            <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##pitriver-river-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#pit-river-modal">Pit River:&nbsp
<?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
	          if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##trinityriver-river-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#trinity-river-modal">Trinity River:&nbsp
<?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
	                  if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          <!-- ##upper-sac-report -->
	          <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#upper-sac-modal">Upper Sacramento River:&nbsp
<?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
	            <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
<?php else: ?>
	            <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
	            <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
	            <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
	            <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
	            <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
<?php endif; ?>
	          </button>
	          </div>
	      </div>
	  </div>
	</div>

	<!-- Still Waters Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-still-waters-content"
					 aria-expanded="false" aria-controls="mobile-still-waters-content">
		<strong>Still Waters Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>

	<div id="mobile-still-waters-content" class="collapse">
	 <div class="card-body">
		 <!-- ##baum-lake-report -->
		 <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#baum-lake-modal">Baum Lake:&nbsp;&nbsp;
<?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
				 <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
<?php else: ?>
				 <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
				 <span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
				 <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
				 <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
				 <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
		 </button>
		 <!-- ##iron-canyon-report -->
		 <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#iron-canyon-modal">Iron Canyon Reservoir:&nbsp;&nbsp;
<?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
				 <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
<?php else: ?>
				 <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
				 <span class="label label-default<?php echo $ironcanyonres_checkbox_fair; ?>">Fair</span>
				 <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
				 <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
				 <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
<?php endif; ?>
		 </button>
			 <!-- ##keswick-reservoir-report -->
			 <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#keswick-reservoir-modal">Keswick Reservoir:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
					 <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
<?php else: ?>
					 <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
					 <span class="label label-default<?php echo $keswickres_checkbox_fair; ?>">Fair</span>
					 <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
					 <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
					 <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
<?php endif; ?>
		  </button>
			<!-- ##lake-shasta-report -->
			<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#lake-shasta-modal">Lake Shasta:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
				 <span class="label label-default<?php echo $lakeshasta_closed_checkbox; ?>"><?php echo $lakeshasta_closed_message; ?></span>
<?php else: ?>
				 <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
				 <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
				 <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
				 <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
				 <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
<?php endif; ?>
			</button>
			<!-- ##lewiston-lake-report -->
			<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#lewiston-lake-modal">Lewiston Lake:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
				 <span class="label label-default<?php echo $lewistonlake_closed_checkbox; ?>"><?php echo $lewistonlake_closed_message; ?></span>
<?php else: ?>
				 <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
				 <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
				 <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
				 <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
				 <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
			</button>
			<!-- ##manzanita-lake-report -->
			<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#manzanita-lake-modal">Manzanita Lake:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
				 <span class="label label-default<?php echo $manzanitalake_closed_checkbox; ?>"><?php echo $manzanitalake_closed_message; ?></span>
<?php else: ?>
				 <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
				 <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
				 <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
				 <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
				 <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
<?php endif; ?>
			</button>
			<!-- ##mccloud-reservoir-report -->
			<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#mccloud-reservoir-modal">McCloud Reservoir:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
				<span class="label label-default<?php echo $mccloudreservoir_closed_checkbox; ?>"><?php echo $mccloudreservoir_closed_message; ?></span>
<?php else: ?>
				<span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
				<span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
				<span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
				<span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
				<span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
<?php endif; ?>
			</button>
			<!-- ##pyramid-lake-report -->
			<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#pyramid-lake-modal">Pyramid Lake:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
				<span class="label label-default<?php echo $pyramidlake_closed_checkbox; ?>"><?php echo $pyramidlake_closed_message; ?></span>
<?php else: ?>
				<span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
				<span class="label label-default<?php echo $pyramidlake_checkbox_fair; ?>">Fair</span>
				<span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
				<span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
				<span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
			</button>
	 </div>
	</div>
 </div>

 <!-- Private Waters Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-private-waters-content"
					 aria-expanded="false" aria-controls="mobile-private-waters-content">
		<strong>Private Waters Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>
	<div id="mobile-private-waters-content" class="collapse">
	 <div class="card-body">
		<!-- ##antelope-creek-report -->
		<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#antelope-creek-modal">Antelope Creek:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $antelopecreek_closed_checkbox; ?>"><?php echo $antelopecreek_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $antelopecreek_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</button>
		<!-- ##battle-creek-report -->
		<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#battle-creek-modal">Battle Creek:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $battlecreek_closed_checkbox; ?>"><?php echo $battlecreek_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $battlecreek_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</button>
		<!-- ##bollibokka-report -->
		<button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#bollibokka-modal">Bollibokka:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $bollibokka_closed_checkbox; ?>"><?php echo $bollibokka_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</button>
    <!-- ##circle-7-guest-ranch-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#circle-7-guest-ranch-modal">Circle 7 Guest Ranch:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $circle7_closed_checkbox; ?>"><?php echo $circle7_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##clear-creek-ranch-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#clear-creek-ranch-modal">Clear Creek Ranch:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##gold-river-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#gold-river-modal">Gold River:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##luk-lake-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#luk-lake-modal">Luk Lake:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $luklake_closed_checkbox; ?>"><?php echo $luklake_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##oasis-springs-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#oasis-springs-modal">Oasis Springs:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##rock-creek-lake-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#rock-creek-lake-modal">Rock Creek Lake:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
    <!-- ##sugar-creek-ranch-report -->
    <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#sugar-creek-ranch-modal">Sugar Creek Ranch:&nbsp&nbsp;
<?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $sugarcreek_closed_checkbox; ?>"><?php echo $sugarcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </button>
	 </div>
	</div>
 </div>
</div>

<style>
    /* Custom styles for mobile reports */
    #v-pills-tab button {
        margin-top: 1rem;
    }
    #regional-reports-mobile .btn-link {
        text-decoration: none;
        color: #333;
    }

    #regional-reports-mobile .card-header {
        background-color: #f8f9fa;
    }

    #regional-reports-mobile .fishing-report {
        border-bottom: 1px solid #eee;
        padding-bottom: 1rem;
    }

    #regional-reports-mobile .fishing-report:last-child {
        border-bottom: none;
    }
</style>

<!-- ##### River Report Modals #### -->

<!-- ##fall-river-modal -->
<div class="modal fade" id="fall-river-modal" tabindex="-1" aria-labelledby="fall-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fall-river-modal-label">Fall River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $fallriver_report_date . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
<?php else: ?>
                     <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
                </p>
<?php
                // Include the same content that's in your pill tab content
                $fallriver_report = get_post_meta(get_the_ID(), 'fallriver-report', true);
                if(!empty($fallriver_report)) {
                    echo '<div class="mobile-report">' . $fallriver_report . '</div>';
                    echo '<div class="hot-flies"><b>Hot Flies:</b>' . $fallriver_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##hat-creek-modal -->
<div class="modal fade" id="hat-creek-modal" tabindex="-1" aria-labelledby="hat-creek-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hat-creek-modal-label">Hat Creek Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $hatcreek_report_update . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $hatcreek_closed_checkbox; ?>"><?php echo $hatcreek_closed_message; ?></span>
<?php else: ?>
                     <span class="label label-default<?php echo $hatcreek_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
                </p>
<?php
                $hatcreek_report = get_post_meta(get_the_ID(), 'hatcreek-report', true);
                if(!empty($hatcreek_report)) {
                    echo '<div class="mobile-report">' . $hatcreek_report . '</div>';
                    echo '<div><b>Hot Flies:</b>' . $hatcreek_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##klamath-river-modal -->
<div class="modal fade" id="klamath-river-modal" tabindex="-1" aria-labelledby="klamath-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="klamath-river-modal-label">Klamath River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $klamathriver_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $klamathriver_closed_checkbox; ?>"><?php echo $klamathriver_closed_message; ?></span>
<?php else: ?>
                     <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
                </p>
<?php
                    $klamathriver_report = get_post_meta(get_the_ID(), 'klamathriver-report', true);
                    if(!empty($klamathriver_report)) {
                        echo '<div class="report">' . $klamathriver_report . '</div>';
                        echo '<div><b>Hot Flies:</b>' . $klamathriver_hot_flies . '</div>';
                    }
                    ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##lower-sac-modal -->
<div class="modal fade" id="lower-sac-modal" tabindex="-1" aria-labelledby="lower-sac-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lower-sac-modal-label">Lower Sacramento River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $lowersacramento_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $lowersacramento_closed_checkbox; ?>"><?php echo $lowersacramento_closed_message; ?></span>
<?php else: ?>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
<?php endif; ?>
                </p>
<?php
                $lowersacramento_report = get_post_meta(get_the_ID(), 'lowersacramento-report', true);
                if(!empty($lowersacramento_report)) {
                    echo '<div class="report">' . $lowersacramento_report . '</div>';
                    echo '<div><b>Hot Flies:</b>' . $lowersacramento_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##mccloud-river-modal -->
<div class="modal fade" id="mccloud-river-modal" tabindex="-1" aria-labelledby="mccloud-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mccloud-river-modal-label">McCloud River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $mccloudriver_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $mccloudriver_closed_checkbox; ?>"><?php echo $mccloudriver_closed_message; ?></span>
<?php else: ?>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
                </p>
<?php
                    $mccloudriver_report = get_post_meta(get_the_ID(), 'mccloudriver-report', true);
                    if(!empty($mccloudriver_report)) {
                        echo '<div class="report">' . $mccloudriver_report . '</div>';
                        echo '<div><b>Hot Flies:</b>' . $mccloudriver_hot_flies . '</div>';
                    }
                    ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##pit-river-modal -->
<div class="modal fade" id="pit-river-modal" tabindex="-1" aria-labelledby="pit-river-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="pit-river-modal-label">Pit River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $pitriver_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $pitriver_closed_checkbox; ?>"><?php echo $pitriver_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$pitriver_report = get_post_meta(get_the_ID(), 'pitriver-report', true);
				if(!empty($pitriver_report)) {
					echo '<div class="report">' . $pitriver_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $pitriver_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##trinity-river-modal -->
<div class="modal fade" id="trinity-river-modal" tabindex="-1" aria-labelledby="trinity-river-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="trinity-river-modal-label">Trinity River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $trinityriver_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $trinityriver_closed_checkbox; ?>"><?php echo $trinityriver_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$trinityriver_report = get_post_meta(get_the_ID(), 'trinityriver-report', true);
				if(!empty($trinityriver_report)) {
					echo '<div class="report">' . $trinityriver_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $trinityriver_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##upper-sac-modal -->
<div class="modal fade" id="upper-sac-modal" tabindex="-1" aria-labelledby="upper-sac-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="upper-sac-modal-label">Upper Sacramento River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $uppersac_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$uppersac_report = get_post_meta(get_the_ID(), 'uppersac-report', true);
				if(!empty($uppersac_report)) {
					echo '<div class="report">' . $uppersac_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $uppersac_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##baum-lake-modal -->
<div class="modal fade" id="baum-lake-modal" tabindex="-1" aria-labelledby="baum-lake-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baum-lake-modal-label">Baum Lake Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $baumlake_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$baumlake_report = get_post_meta(get_the_ID(), 'baumlake-report', true);
				if(!empty($baumlake_report)) {
					echo '<div class="report">' . $baumlake_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $baumlake_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##iron-canyon-modal -->
<div class="modal fade" id="iron-canyon-modal" tabindex="-1" aria-labelledby="iron-canyon-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="iron-canyon-modal-label">Iron Canyon Reservoir Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $ironcanyonres_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $ironcanyonres_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$ironcanyonres_report = get_post_meta(get_the_ID(), 'ironcanyonres-report', true);
				if(!empty($ironcanyonres_report)) {
					echo '<div class="report">' . $ironcanyonres_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $ironcanyonres_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##keswick-reservoir-modal -->
<div class="modal fade" id="keswick-reservoir-modal" tabindex="-1" aria-labelledby="keswick-reservoir-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="keswick-reservoir-modal-label">Keswick Reservoir Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $keswickres_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $keswickres_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$keswickres_report = get_post_meta(get_the_ID(), 'keswickres-report', true);
				if(!empty($keswickres_report)) {
					echo '<div class="report">' . $keswickres_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $keswickres_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##lake-shasta-modal -->
<div class="modal fade" id="lake-shasta-modal" tabindex="-1" aria-labelledby="lake-shasta-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lake-shasta-modal-label">Lake Shasta Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $lakeshasta_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $lakeshasta_closed_checkbox; ?>"><?php echo $lakeshasta_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$lakeshasta_report = get_post_meta(get_the_ID(), 'lakeshasta-report', true);
				if(!empty($lakeshasta_report)) {
					echo '<div class="report">' . $lakeshasta_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $lakeshasta_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##lewiston-lake-modal -->
<div class="modal fade" id="lewiston-lake-modal" tabindex="-1" aria-labelledby="lewiston-lake-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lewiston-lake-modal-label">Lewiston Lake Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $lewistonlake_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $lewistonlake_closed_checkbox; ?>"><?php echo $lewistonlake_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$lewistonlake_report = get_post_meta(get_the_ID(), 'lewistonlake-report', true);
				if(!empty($lewistonlake_report)) {
					echo '<div class="report">' . $lewistonlake_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $lewistonlake_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##manzanita-lake-modal -->
<div class="modal fade" id="manzanita-lake-modal" tabindex="-1" aria-labelledby="manzanita-lake-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="manzanita-lake-modal-label">Manzanita Lake Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $manzanitalake_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $manzanitalake_closed_checkbox; ?>"><?php echo $manzanitalake_closed_message; ?></span>
<?php else: ?>
						<span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
<?php endif; ?>
				</p>
<?php
				$manzanitalake_report = get_post_meta(get_the_ID(), 'manzanitalake-report', true);
				if(!empty($manzanitalake_report)) {
					echo '<div class="report">' . $manzanitalake_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $manzanitalake_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##mccloud-reservoir-modal -->
<div class="modal fade" id="mccloud-reservoir-modal" tabindex="-1" aria-labelledby="mccloud-reservoir-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
	<div class="modal-content">
	 <div class="modal-header">
		<h5 class="modal-title" id="mccloud-reservoir-modal-label">McCloud Reservoir Report</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	 </div>
	 <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $manzanitalake_updated . '</div>'; ?>
		<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $mccloudreservoir_closed_checkbox; ?>"><?php echo $mccloudreservoir_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</p>
<?php
		$mccloudreservoir_report = get_post_meta(get_the_ID(), 'mccloudreservoir-report', true);
		if(!empty($mccloudreservoir_report)) {
		 echo '<div class="report">' . $mccloudreservoir_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $mccloudreservoir_hot_flies . '</div>';
		}
		?>
	 </div>
	 <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	 </div>
	</div>
 </div>
</div>

<!-- ##pyramid-lake-modal -->
<div class="modal fade" id="pyramid-lake-modal" tabindex="-1" aria-labelledby="pyramid-lake-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
	<div class="modal-content">
	 <div class="modal-header">
		<h5 class="modal-title" id="pyramid-lake-modal-label">Pyramid Lake Report</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	 </div>
	 <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $pyramidlake_updated . '</div>'; ?>
		<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $pyramidlake_closed_checkbox; ?>"><?php echo $pyramidlake_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $pyramidlake_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</p>
<?php
		$pyramidlake_report = get_post_meta(get_the_ID(), 'pyramidlake-report', true);
		if(!empty($pyramidlake_report)) {
		 echo '<div class="report">' . $pyramidlake_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $pyramidlake_hot_flies . '</div>';
		}
		?>
	 </div>
	 <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	 </div>
	</div>
 </div>
</div>

<!-- ##antelope-creek-modal -->
<div class="modal fade" id="antelope-creek-modal" tabindex="-1" aria-labelledby="antelope-creek-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
	<div class="modal-content">
	 <div class="modal-header">
		<h5 class="modal-title" id="antelope-creek-modal-label">Antelope Creek Report</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	 </div>
	 <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $antelopecreek_updated . '</div>'; ?>
		<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $antelopecreek_closed_checkbox; ?>"><?php echo $antelopecreek_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $antelopecreek_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $antelopecreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</p>
<?php
		$antelopecreek_report = get_post_meta(get_the_ID(), 'antelopecreek-report', true);
		if(!empty($antelopecreek_report)) {
		 echo '<div class="report">' . $antelopecreek_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $antelopecreek_hot_flies . '</div>';
		}
		?>
	 </div>
	 <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	 </div>
	</div>
 </div>
</div>

<!-- ##battle-creek-modal -->
<div class="modal fade" id="battle-creek-modal" tabindex="-1" aria-labelledby="battle-creek-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
	<div class="modal-content">
	 <div class="modal-header">
		<h5 class="modal-title" id="battle-creek-modal-label">Battle Creek Report</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	 </div>
	 <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $battlecreek_updated . '</div>'; ?>
		<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $battlecreek_closed_checkbox; ?>"><?php echo $battlecreek_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $battlecreek_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $battlecreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</p>
<?php
		$battlecreek_report = get_post_meta(get_the_ID(), 'battlecreek-report', true);
		if(!empty($battlecreek_report)) {
		 echo '<div class="report">' . $battlecreek_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $battlecreek_hot_flies . '</div>';
		}
		?>
	 </div>
	 <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	 </div>
	</div>
 </div>
</div>

<!-- ##bollibokka-modal -->
<div class="modal fade" id="bollibokka-modal" tabindex="-1" aria-labelledby="bollibokka-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
	<div class="modal-content">
	 <div class="modal-header">
		<h5 class="modal-title" id="bollibokka-modal-label">Bollibokka Report</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	 </div>
	 <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $bollibokka_updated . '</div>'; ?>
		<p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
			<span class="label label-default<?php echo $bollibokka_closed_checkbox; ?>"><?php echo $bollibokka_closed_message; ?></span>
<?php else: ?>
			<span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
			<span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
<?php endif; ?>
		</p>
<?php
		$bollibokka_report = get_post_meta(get_the_ID(), 'bollibokka-report', true);
		if(!empty($bollibokka_report)) {
		 echo '<div class="report">' . $bollibokka_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $bollibokka_hot_flies . '</div>';
		}
		?>
	 </div>
	 <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	 </div>
	</div>
 </div>
</div>

<!-- ##circle-7-guest-ranch-modal -->
<div class="modal fade" id="circle-7-guest-ranch-modal" tabindex="-1" aria-labelledby="circle-7-guest-ranch-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="circle-7-guest-ranch-modal-label">Circle 7 Guest Ranch Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $circle7_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $circle7_closed_checkbox; ?>"><?php echo $circle7_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$circle7_report = get_post_meta(get_the_ID(), 'circle7-report', true);
		if(!empty($circle7_report)) {
		 echo '<div class="report">' . $circle7_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $circle7_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##clear-creek-ranch-modal -->
<div class="modal fade" id="clear-creek-ranch-modal" tabindex="-1" aria-labelledby="clear-creek-ranch-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="clear-creek-ranch-modal-label">Clear Creek Ranch Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $clearcreek_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$clearcreek_report = get_post_meta(get_the_ID(), 'clearcreek-report', true);
		if(!empty($clearcreek_report)) {
		 echo '<div class="report">' . $clearcreek_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $clearcreek_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##gold-river-modal -->
<div class="modal fade" id="gold-river-modal" tabindex="-1" aria-labelledby="gold-river-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="gold-river-modal-label">Gold River Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $goldriver_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$goldriver_report = get_post_meta(get_the_ID(), 'goldriver-report', true);
		if(!empty($goldriver_report)) {
		 echo '<div class="report">' . $goldriver_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $goldriver_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##luk-lake-modal -->
<div class="modal fade" id="luk-lake-modal" tabindex="-1" aria-labelledby="luk-lake-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="luk-lake-modal-label">Luk Lake Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $luklake_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $luklake_closed_checkbox; ?>"><?php echo $luklake_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$luklake_report = get_post_meta(get_the_ID(), 'luklake-report', true);
		if(!empty($luklake_report)) {
		 echo '<div class="report">' . $luklake_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $luklake_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##oasis-springs-modal -->
<div class="modal fade" id="oasis-springs-modal" tabindex="-1" aria-labelledby="oasis-springs-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="oasis-springs-modal-label">Oasis Springs Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $oasissprings_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$oasissprings_report = get_post_meta(get_the_ID(), 'oasissprings-report', true);
		if(!empty($oasissprings_report)) {
		 echo '<div class="report">' . $oasissprings_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $oasissprings_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##rock-creek-lake-modal -->
<div class="modal fade" id="rock-creek-lake-modal" tabindex="-1" aria-labelledby="rock-creek-lake-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="rock-creek-lake-modal-label">Rock Creek Lake Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $rockcreek_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$rockcreek_report = get_post_meta(get_the_ID(), 'rockcreek-report', true);
		if(!empty($rockcreek_report)) {
		 echo '<div class="report">' . $rockcreek_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $rockcreek_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<!-- ##sugar-creek-ranch-modal -->
<div class="modal fade" id="sugar-creek-ranch-modal" tabindex="-1" aria-labelledby="sugar-creek-ranch-modal-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="sugar-creek-ranch-modal-label">Sugar Creek Ranch Report</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $sugarcreek_updated . '</div>'; ?>
    <p><b>Fishing conditions:</b>&nbsp;
<?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger') :?>
      <span class="label label-default<?php echo $sugarcreek_closed_checkbox; ?>"><?php echo $sugarcreek_closed_message; ?></span>
<?php else: ?>
      <span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
      <span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
<?php endif; ?>
    </p>
<?php
		$sugarcreek_report = get_post_meta(get_the_ID(), 'sugarcreek-report', true);
		if(!empty($sugarcreek_report)) {
		 echo '<div class="report">' . $sugarcreek_report . '</div>';
		 echo '<div><b>Hot Flies:</b>' . $sugarcreek_hot_flies . '</div>';
		}
		?>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
