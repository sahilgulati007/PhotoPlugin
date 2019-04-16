<?php
function photo_insert()
{
    //echo "insert page";
    ?>

    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="float: left;text-align: left">
        <div class='insMsg lblcreated' style='display: none;'> Inserted </div>
        <div class='insErrMsg lblcreate' style='display: none;'> Enter Title </div>
        <form name="frm" id="frm" action="" method="post">
        <div class="row m-top">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                Title:
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <input type="text" name="title">
            </div>
        </div>
        <div class="row m-top">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                Description:
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <textarea name="desc"></textarea>
            </div>
        </div>
        <div class="row m-top">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                Request Type:
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <select name="req">
                    <option value="Location">Location</option>
                    <option value="Category">Category</option>
                </select>
            </div>
        </div>
            <div class="row m-top">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <a class="calculate" style="text-align: center">Calculate Lat &amp; Log</a>
                </div>
            </div>
        <div class="row m-top">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                Latitude:
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <input type="text" name="lat">
            </div>
        </div>
            <div class="row m-top">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    Longitude:
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <input type="text" name="long">
                </div>
            </div>
            <div class="row m-top">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    Category:
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <select name="cat">
                        <option value="Nature">Nature</option>
                        <option value="Animal">Animal</option>
                        <option value="People">People</option>
                        <option value="Bulding">Bulding</option>
                        <option value="Food & Drink">Food & Drink</option>
                        <option value="Health & Beauty">Health & Beauty</option>
                        <option value="Industry">Industry</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Sport & OutDoor">Sport & OutDoor</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                    </select>
                </div>
            </div>
            <div class="row m-top">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    Email on submits:
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <select name="eos">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="row m-top">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <input type="submit" value="Add" name="ins" class="subbtn">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                </div>
            </div>
        </form>

    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="float: left">
        <div id="map-canvas" class="gmap" style="position: relative; overflow: hidden;">
            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;"><p class="gm-style-pbt">Use ctrl + scroll to zoom the map</p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe></div></div></div>
    </div>
    <?php
    if(isset($_POST['ins'])){
        global $wpdb;
        if(isset($_POST['title']) && $_POST['title']=='' && $_POST['title']==null){
            ?>
            <script>
                jQuery('.insErrMsg').css('display','block');
            </script>
            <?php
            exit;
        }
        $t=$_POST['title'];
        $d=$_POST['desc'];
        $r=$_POST['req'];
        $lat=$_POST['lat'];
        $long=$_POST['long'];
        $c=$_POST['cat'];
        $eos=$_POST['eos'];
        $table_name = $wpdb->prefix . 'photo_list';

        $wpdb->insert(
            $table_name,
            array(
                'ptype' => $r,
                'ptitle' => $t,
                'pdesc' => $d,
                'pcategory'=>$c,
                'platitude'=>$lat,
                'plongitude'=>$long,
                'pcreated'=>date('Y/m/d'),
                'pstatus'=>'active',
                'imagesubmit'=>'0',
                'eos'=>$eos,
            )
        );


        ?>
        <script>
            jQuery('.insMsg').css('display','block');
            jQuery('.fix-banner').css('display','none');
        </script>
        <?php
        exit;
    }
}
add_shortcode('short_photo_insert', 'photo_insert');
?>