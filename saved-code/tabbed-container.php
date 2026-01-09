<?php
/**
 * Ref: https://jsfiddle.net/howbizarre/vdbac6pk/
 */
?>

<script>
    $breakpoints: (
        "max-md": "767px",
        "min-md": "768px"
    );

    .responsive-tabs {
        padding: 1rem;

    .nav-tabs {
            display: none;
        }

    @media (min-width: map-get($breakpoints, "min-md")) {
        .nav-tabs {
                display: flex;
            }

        .card {
                border: none;

            .card-header {
                    display: none;
                }

            .collapse {
                    display: block;
                }
            }
        }

    @media (max-width: map-get($breakpoints, "max-md")) {
        .tab-pane {
                display: block !important;
                opacity: 1;
            }
        }
    }

</script>




<div class="container responsive-tabs">
 <ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
	 <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">–A–</a>
	</li>
	<li class="nav-item">
	 <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">–B–</a>
	</li>
	<li class="nav-item">
	 <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">–C–</a>
	</li>
 </ul>

 <div id="content" class="tab-content" role="tablist">
	<div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
	 <div class="card-header" role="tab" id="heading-A">
		<h5 class="mb-0">
		 <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
			Collapsible Group Item A
		 </a>
		</h5>
	 </div>
	 <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel"
				aria-labelledby="heading-A">
		<div class="card-body">
		 [Tab content A]
		</div>
	 </div>
	</div>

	<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	 <div class="card-header" role="tab" id="heading-B">
		<h5 class="mb-0">
		 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
				aria-controls="collapse-B">
			Collapsible Group Item B
		 </a>
		</h5>
	 </div>
	 <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel"
				aria-labelledby="heading-B">
		<div class="card-body">
		 [Tab content B]
		</div>
	 </div>
	</div>

	<div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
	 <div class="card-header" role="tab" id="heading-C">
		<h5 class="mb-0">
		 <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
			Collapsible Group Item C
		 </a>
		</h5>
	 </div>
	 <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel"
				aria-labelledby="heading-C">
		<div class="card-body">
		 [Tab content C]
		</div>
	 </div>
	</div>
 </div>
</div>
