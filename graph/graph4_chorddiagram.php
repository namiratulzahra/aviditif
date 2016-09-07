<div class="modal-body">

    <!-- Project Details Go Here -->

    <h5><b><a href="http://bl.ocks.org/mbostock/4062085">Mike Bostock’s Block 4062085</a></b></h5>

    <h2>Chord Diagram</h2>

    <ul class="list-inline">
        <li><span class="label label-success">CHORD DIAGRAM</span></li>
        <li><span class="label label-info">ONE DIMENSIONAL DATA</span></li>
    </ul>

    <p class="item-intro text-muted">Chord diagrams show directed relationships among a group of entities. Layout inspired by Martin Krzywinski's beautiful work on Circos.</p>

    <img class="img-responsive img-centered" src="img/portfolio/chorddiagram.png" alt="">

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
    <p>A chord diagram is a graphical method of displaying the inter-relationships between data in a matrix. The data is arranged radially around a circle with the relationships between the points typically drawn as arcs connecting the data together. The format can be aesthetically pleasing, making it a popular choice in the world of data visualization.</p>

    <?php
    if (isset($_SESSION['userid'])) {
        echo "<a type='button' class='btn btn-primary' href='builder/builder4_chorddiagram.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
    }
    ?>
    
    <a type="button" class="btn btn-primary-gray" data-dismiss="modal"><i class="fa fa-times"></i> Close</a>
    
</div>