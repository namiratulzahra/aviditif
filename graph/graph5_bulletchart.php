<div class="modal-body">

    <!-- Project Details Go Here -->

    <h5><b><a href="http://bl.ocks.org/mbostock/4061961">Mike Bostock’s Block 4061961</a></b></h5>

    <h2>Bullet Chart</h2>

    <ul class="list-inline">
        <li><span class="label label-success">BAR CHART</span></li>
        <li><span class="label label-info">THREE DIMENSIONAL DATA</span></li>
        <li><span class="label label-danger">TRANSITION</span></li>
    </ul>

    <p class="item-intro text-muted">Designed by Stephen Few, a bullet chart “provides a rich display of data in a small space.” A variation on a bar chart, bullet charts compare a given quantitative measure (such as profit or revenue) against qualitative ranges (e.g., poor, satisfactory, good) and related markers (e.g., the same measure a year ago). Layout inspired by Stephen Few<sup><a href="#1">[1]</a></sup>. Implementation based on work by Clint Ivy<sup><a href="#2">[2]</a></sup>, Jamie Love of N-Squared Software<sup><a href="#3">[3]</a></sup> and Jason Davies<sup><a href="#4">[4]</a></sup>. The "update" button randomizes the values slightly to demonstrate transitions.</p>

    <img class="img-responsive img-centered" src="img/portfolio/bulletchart.png" alt="">

    <ul class="list-inline text-muted">
        <li><span>
            <sup>[1]</sup>
            <a href="http://www.perceptualedge.com/articles/misc/Bullet_Graph_Design_Spec.pdf">http://www.perceptualedge.com/articles/misc/Bullet_Graph_Design_Spec.pdf</a>
            </span>
        </li><br>
        <li><span>
            <sup>[2]</sup>
            <a href="http://projects.instantcognition.com/protovis/bulletchart/">http://projects.instantcognition.com/protovis/bulletchart/</a>
            </span>
        </li><br>
        <li><span>
            <sup>[3]</sup>
            <a href="http://www.nsquaredsoftware.com/">http://www.nsquaredsoftware.com/</a>
            </span>
        </li><br>
        <li><span>
            <sup>[4]</sup>
            <a href="https://www.jasondavies.com/">https://www.jasondavies.com/</a>
            </span>
        </li>
    </ul>
    <div class="divider"></div><br>

    <h4>DESCRIPTION</h4><br>
    <p>A bullet graph is a variation of a bar graph developed by Stephen Few. Seemingly inspired by the traditional thermometer charts and progress bars found in many dashboards, the bullet graph serves as a replacement for dashboard gauges and meters. Bullet graphs were developed to overcome the fundamental issues of gauges and meters: they typically display too little information, require too much space, and are cluttered with useless and distracting decoration. The bullet graph features a single, primary measure (for example, current year-to-date revenue), compares that measure to one or more other measures to enrich its meaning (for example, compared to a target), and displays it in the context of qualitative ranges of performance, such as poor, satisfactory, and good. The qualitative ranges are displayed as varying intensities of a single hue to make them discernible by those who are color blind and to restrict the use of colors on the dashboard to a minimum.</p>

    <?php
    if (isset($_SESSION['userid'])) {
        echo "<a type='button' class='btn btn-primary' href='builder/builder5_bulletchart.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
    }
    ?>
    
    <a type="button" class="btn btn-primary-gray" data-dismiss="modal"><i class="fa fa-times"></i> Close</a>
</div>