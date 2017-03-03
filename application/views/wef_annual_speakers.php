<?php

/* 
 * shailesh saraswat
 * wef annual speaker 2017 list view
 * code date start : 02-03-2017
 */

//$co =1;
//echo "<pre>";
$data_speaker=json_decode($speakers);

// foreach ($Sp_country as $c_name){
//     
//     echo $c_name;
// }

//foreach ($data_speaker as $val){
//    echo $co;
//print_r($val);
//$co=$co+1;
//}
//die;
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/speaker_view.css">

<div class="container">
        <!-- Filter Controls - Simple Mode -->
        <div class="row">
            <!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
            for an unfiltered gallery and then the values of your categories to filter between them -->
            <ul class="simplefilter">
                Simple filter controls:
                <li class="active" data-filter="all">All</li>
                <?php 
                $arr = array();
                $count=1;
                foreach ($Sp_country as $c_name){
                    if(!empty($c_name)){
                     
                ?>
                <li data-filter="<?= $count; ?>"><?php  echo $c_name;?></li>
                    <?php  }
                    $count=$count+1;
                }
                ?>
<!--                <li data-filter="2">Landscape</li>
                <li data-filter="3">Industrial</li>
                <li data-filter="4">Daylight</li>
                <li data-filter="5">Nightscape</li>-->
            </ul>
        </div>

        <!-- Filter Controls - Multifilter Mode -->
<!--        <div class="row">
             A basic setup of multifilter controls, when the user toggles a category
            the corresponding items are rendered or hidden 
            <ul class="multifilter">
                Multifilter controls:
                <li data-multifilter="1">Cityscape</li>
                <li data-multifilter="2">Landscape</li>
                <li data-multifilter="3">Industrial</li>
            </ul>
        </div>-->

        <!-- Shuffle & Sort Controls -->
        <div class="row">
            <ul class="sortandshuffle">
                Sort &amp; Shuffle controls:
                <!-- Basic shuffle control -->
                <li class="shuffle-btn" data-shuffle>Shuffle</li>
                <!-- Basic sort controls consisting of asc/desc button and a select -->
                <li class="sort-btn active" data-sortAsc>Asc</li>
                <li class="sort-btn" data-sortDesc>Desc</li>
<!--                <select data-sortOrder>
                    <option value="domIndex">
                        Position
                    </option>
                    <option value="sortData">
                        Description
                    </option>
                </select>-->
            </ul>
        </div>

        <!-- Search control -->
        <div class="row search-row">
            Search control:
            <input type="text" class="filtr-search" name="filtr-search" data-search>
        </div>

        <div class="row">
            <!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category
            attribute, which starts from the value 1 and goes up from there -->
            <div class="filtr-container">
                <?php
               
                foreach ($data_speaker as $val){
//                    echo "<pre>";
//                    print_r($val);
//                 if (in_array($val->country, $Sp_country))
//  {
//  echo $co. $val->country."Match found <br>".$val->first_name."<br>";
//  }
//                 $count=1;
//                foreach ($Sp_country as $c_name){
//                    if(!empty($c_name)){
//                        setlocale (LC_COLLATE, 'NL');
//                        $cmp=strcoll($c_name,$val->country);
//                        if($cmp==0){
//                    echo  $count;
//                    
//                   
//                    
//                        }
//                     
//                        }  
//                      $count=$count+1;  
//                        
//                        }
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="<?php echo 11; ?>" data-sort="<?php echo $val->first_name.$val->last_name;?>">
                    <img class="img-responsive" src="http://www.raiuniversity.edu.in/annualwef//assets/uploads/speakers/<?php echo $val->profile_image; ?>" alt="<?php echo $val->first_name; ?>">
                    <span class="item-desc"><?php echo $val->first_name.$val->last_name;?></span>
                    <span class="item-desc"><?php echo $val->country; ?></span>
                </div>
                <?php
                
                
              
                
                }
//                die;
                ?>
<!--                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 5" data-sort="Luminous night">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">Luminous night</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 4" data-sort="City wonders">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">city wonders</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="In production">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">in production</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 4" data-sort="Industrial site">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">industrial site</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">peaceful lake</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort="City lights">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">city lights</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">dreamhouse</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="Restless machines">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/img/city_1.jpg" alt="sample image">
                    <span class="item-desc">restless machines</span>
                </div>-->
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/filterizr/jquery.filterizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/speaker_control.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
