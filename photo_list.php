<?php
function photo_list() {
    ?>
    <div class="wrap">
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Request</th>
                <th>Type</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created</th>
                <th>Status</th>
                <th>Images Submitted</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            global $wpdb;
            $table_name = $wpdb->prefix . 'photo_list';
            $photos = $wpdb->get_results("SELECT rid,ptype,ptitle,pcategory,pstatus,pcreated,imagesubmit from $table_name");
            foreach ($photos as $photo) {
                ?>
                <tr>
                    <td><?= $photo->rid; ?></td>
                    <td><?= $photo->ptype; ?></td>
                    <td><?= $photo->ptitle; ?></td>
                    <td><?= $photo->pcategory; ?></td>
                    <td><?= $photo->pcreated; ?></td>
                    <td><?= $photo->pstatus; ?></td>
                    <td><?= $photo->imagesubmit; ?></td>
                    <td><a href=""><i class="fa fa-pencil-square-o "></i></a>&nbsp;&nbsp;<a title="view submitted images"><i class="fa fa-eye "></i></a></td>
                </tr>
            <?php } ?>

            </tbody>

        </table>
    </div>
    <div class="text-center">
        <h1><span>My Submitted</span>Photos</h1>
    </div>
    <div class="photo-wrapper isotope" style="position: relative; overflow: hidden; height: 411px;">
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
            <img src="Images/Photos/1.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(295px, 0px, 0px);">
            <img src="Images/Photos/2.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(590px, 0px, 0px);">
            <img src="Images/Photos/3.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(885px, 0px, 0px);">
            <img src="Images/Photos/4.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(590px, 175px, 0px);">
            <img src="Images/Photos/5.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 203px, 0px);">
            <img src="Images/Photos/6.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
        <div class="photo-block isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(885px, 203px, 0px);">
            <img src="Images/Photos/7.jpg">
            <div class="details"><span class="desc">Mountains Sunset</span><span class="date">25-Jun-2015</span></div>
        </div>
    </div>
    <div class="view-more">
        <a>
            <i class="fa fa-long-arrow-right"></i>
            <span>View</span>
            More
        </a>
    </div>
    <?php

}
add_shortcode('short_photo_list', 'photo_list');
?>