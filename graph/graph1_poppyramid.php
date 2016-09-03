<div class="modal-body">

    <!-- Project Details Go Here -->

    <h5><b><a href="http://bl.ocks.org/mbostock/4062085">Mike Bostock’s Block 4062085</a></b></h5>

    <h2>Population Pyramid</h2>

    <ul class="list-inline">
        <li><span class="label label-success">BAR CHART</span></li>
        <li><span class="label label-info">FOUR DIMENSIONAL DATA</span></li>
        <li><span class="label label-danger">TRANSITION</span></li>
    </ul>

    <p class="item-intro text-muted">This diagram shows the distribution of age groups in the United States over the last 150 years. Use the arrow keys to observe the changing population. Data from the Minnesota Population Center<sup><a href="#1">[1]</a></sup>. Use the arrow keys to change the displayed year. The blue bars are the male population for each five-year age bracket, while the pink bars are the female population; the bars are partially transparent so that you can see how they overlap, unlike the traditional side-by-side<sup><a href="#2">[2]</a></sup> display which makes it difficult to compare the relative distribution of the sexes.</p>

    <img class="img-responsive img-centered" src="img/portfolio/poppyramid.png" alt="">

    <ul class="list-inline text-muted">
        <li><span>
            <sup>[1]</sup>
            <a href="https://www.ipums.org/">https://www.ipums.org/</a>
            </span>
        </li><br>
        <li><span>
            <sup>[2]</sup>
            <a href="https://en.wikipedia.org/wiki/Population_pyramid">https://en.wikipedia.org/wiki/Population_pyramid</a>
            </span>
        </li>
    </ul>

    <div class="divider"></div><br>

    <h4>DESCRIPTION</h4><br>
    <p>A population pyramid, also called an age pyramid or age picture diagram, is a graphical illustration that shows the distribution of various age groups in a population (typically that of a country or region of the world), which forms the shape of a pyramid when the population is growing. It is also used in ecology to determine the overall age distribution of a population; an indication of the reproductive capabilities and likelihood of the continuation of a species.</p>

    <p>It usually consists of two back-to-back histograms, with the population plotted on the X-axis and age on the Y-axis, one showing the number of males and one showing females in a particular population in five-year age groups (also called cohorts). Males are conventionally shown on the left and females on the right, and they may be measured by raw number or as a percentage of the total population.</p>

    <?php
    if (isset($_SESSION['userid'])) {
        echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
    }
    ?>
    
    <a type="button" class="btn btn-primary-gray" data-dismiss="modal"><i class="fa fa-times"></i> Close</a>
    
</div>