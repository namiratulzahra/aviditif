<div class="modal-body">

    <!-- Project Details Go Here -->

    <h5><b><a href="http://bl.ocks.org/mbostock/4061502">Mike Bostock’s Block 4061502</a></b></h5>

    <h2>Box Plot</h2>

    <ul class="list-inline">
        <li><span class="label label-success">BOX PLOT</span></li>
        <li><span class="label label-info">THREE DIMENSIONAL DATA</span></li>
        <li><span class="label label-danger">TRANSITION</span></li>
    </ul>

    <p class="item-intro text-muted">A box-and-whisker plot uses simple glyphs that summarize a quantitative distribution with five standard statistics: the smallest value, lower quartile, median, upper quartile, and largest value. This summary approach allows the viewer to easily recognize differences between distributions. Data from the Michelson–Morley experiment<sup><a href="#1">[1]</a></sup>. Implementation contributed by Jason Davies<sup><a href="#2">[2]</a></sup>. This example periodically randomizes the values to demonstrate transitions.</p>

    <img class="img-responsive img-centered" src="img/portfolio/boxplot.png" alt="">

    <ul class="list-inline text-muted">
        <li><span>
            <sup>[1]</sup>
            <a href="https://en.wikipedia.org/wiki/Michelson%E2%80%93Morley_experiment">https://en.wikipedia.org/wiki/Michelson%E2%80%93Morley_experiment</a>
            </span>
        </li><br>
        <li><span>
            <sup>[2]</sup>
            <a href="https://www.jasondavies.com/">https://www.jasondavies.com/</a>
            </span>
        </li>
    </ul>

    <div class="divider"></div><br>

    <h4>DESCRIPTION</h4><br>
    <p>In descriptive statistics, a box plot or boxplot is a convenient way of graphically depicting groups of numerical data through their quartiles. Box plots may also have lines extending vertically from the boxes (whiskers) indicating variability outside the upper and lower quartiles, hence the terms box-and-whisker plot and box-and-whisker diagram. Outliers may be plotted as individual points. Box plots are non-parametric: they display variation in samples of a statistical population without making any assumptions of the underlying statistical distribution. The spacings between the different parts of the box indicate the degree of dispersion (spread) and skewness in the data, and show outliers. In addition to the points themselves, they allow one to visually estimate various L-estimators, notably the interquartile range, midhinge, range, mid-range, and trimean. Box plots can be drawn either horizontally or vertically.</p>

    <?php
    if (isset($_SESSION['userid'])) {
        echo "<a type='button' class='btn btn-primary' href='builder/builder3_boxplot.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
    }
    ?>
    
    <a type="button" class="btn btn-primary-gray" data-dismiss="modal"><i class="fa fa-times"></i> Close</a>
</div>