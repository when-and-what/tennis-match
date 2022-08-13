<?php
$page = 'home';
include 'header.php';
?>
<h2 class="pb-2 border-bottom">Cities</h2>
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
        <div
            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
        >
            <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
            </svg>
        </div>
        <h2>Manhattan, KS</h2>
        <p>
            Paragraph of text beneath the heading to explain the
            heading. We'll add onto it with another sentence and
            probably just keep going until we run out of words.
        </p>
        <a
            href="https://mhktennis.com"
            class="icon-link d-inline-flex align-items-center"
        >
            mhktennis.com
            <svg class="bi" width="1em" height="1em">
                <use xlink:href="#chevron-right" />
            </svg>
        </a>
    </div>
    <div class="feature col">
        <div
            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
        >
            <svg class="bi" width="1em" height="1em">
                <use xlink:href="#people-circle" />
            </svg>
        </div>
        <h2>Topeka, KS</h2>
        <p>
            Paragraph of text beneath the heading to explain the
            heading. We'll add onto it with another sentence and
            probably just keep going until we run out of words.
        </p>
        <a
            href="https://topekatennis.com"
            class="icon-link d-inline-flex align-items-center"
        >
            topekatennis.com
            <svg class="bi" width="1em" height="1em">
                <use xlink:href="#chevron-right" />
            </svg>
        </a>
    </div>
</div>

<?php
include 'footer.php';
