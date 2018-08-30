<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Tours</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">  
        <div class="row">

            <div class="col-md-3 p0 padding-top-40">
                <div class="blog-asside-right pr0">
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Smart search</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action="" class=" form-inline"> 
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Key word">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">

                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                <option>New york, CA</option>
                                                <option>Paris</option>
                                                <option>Casablanca</option>
                                                <option>Tokyo</option>
                                                <option>Marraekch</option>
                                                <option>kyoto , shibua</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Price range ($):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="price-range" ><br />
                                            <b class="pull-left color">2000$</b> 
                                            <b class="pull-right color">100000$</b>                                                
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>                                                
                                        </div>                                            
                                    </div>
                                </fieldset>                                

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>                                                
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="property-geo">Min bed :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Fire Place</label>
                                            </div> 
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Dual Sinks</label>
                                            </div>
                                        </div>                                            
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Swimming Pool</label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> 2 Stories </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Laundry Room </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Emergency Exit</label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox" checked> Jog Path </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> 26' Ceilings </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> Hurricane Shutters </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset >
                                    <div class="row">
                                        <div class="col-xs-12">  
                                            <input class="button btn largesearch-btn" value="Search" type="submit">
                                        </div>  
                                    </div>
                                </fieldset>                                     
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recommended</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?= base_url() ?>assets/user/assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?= base_url() ?>assets/user/assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?= base_url() ?>assets/user/assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?= base_url() ?>assets/user/assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9  pr0 padding-top-40 properties-page">
                <div class="col-md-12 clear"> 
                    <div class="col-xs-10 page-subheader sorting pl0">
                        <ul class="sort-by-list">
                            <!--                            <li class="active">
                                                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                                                Property Date <i class="fa fa-sort-amount-asc"></i>					
                                                            </a>
                                                        </li>-->
                            <li class="">
                                <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                    Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                </a>
                            </li>
                        </ul><!--/ .sort-by-list-->

                        <div class="items-per-page">
                            <label for="items_per_page"><b>Property per page :</b></label>
                            <div class="sel">
                                <select id="items_per_page" name="per_page">
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option selected="selected" value="12">12</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                                </select>
                            </div><!--/ .sel-->
                        </div><!--/ .items-per-page-->
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                    </div><!--/ .layout-switcher-->
                </div>

                <input type="hidden" id="loginFlag" value="<?php
                if (!isset($_SESSION['user_id'])) {
                    echo 'false';
                } else {
                    echo 'true';
                }
                ?>" />
                <input type="hidden" id="userId" value="<?php
                if (isset($_SESSION['user_id'])) {
                    echo $_SESSION['user_id'];
                } else {
                    echo '';
                }
                ?>" />
                       <?php
                       if (!isset($_SESSION['user_id'])) {
                           
                       } else {
                           echo $_SESSION['user_id'];
                       }
                       ?>
                <div class="col-md-12 clear"> 
                    <div id="list-type" class="proerty-th">
                        <?php
                        if (isset($tours)) {
                            foreach ($tours as $tour) {
                                ?>
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="" ><img src="<?php
                                                if (isset($tour->image) && $tour->image != '') {
                                                    echo base_url() . 'images/tours/' . $tour->image;
                                                } else {
                                                    echo base_url() . 'assets/user/assets/img/demo/property-3.jpg';
                                                }
                                                ?>"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href=""> <?php echo $tour->name; ?> </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Destination :</b> <?php
                                                $state = $this->State->getState($tour->destination);
                                                echo $state->name;
                                                ?> </span>
                                            <span class="proerty-price pull-right"> Rs. <?php echo $tour->price; ?></span>

                                            <p style="display: none;">Features : 
                                                <?php
                                                $time = new DateTime($tour->start_date);
                                                $time2 = new DateTime($tour->end_date);
                                                $start_date = date('d-m-Y', strtotime($tour->start_date));
                                                $end_date = date('d-m-Y', strtotime($tour->end_date));
                                                $days = date_diff($time, $time2);
                                                $routes = explode('+', $tour->route);
                                                $total_routes = count($routes);
                                                $i = 0;
                                                if (isset($_SESSION['user_id'])) {
                                                    $user_id = $_SESSION['user_id'];
                                                    $tour_id = $tour->id;
                                                    $isfav = $this->Favourite->getStatus($user_id, $tour_id);
                                                }
                                                ?>
                                                <?php
                                                $sfeatures = explode(',', $tour->features);
                                                foreach ($sfeatures as $feature) {
                                                    $fetur = $this->Feature->getFeature($feature);
                                                    ?>
                                                    <?php echo $fetur->name . " | "; ?>
                                                <?php } ?>
                                                <br />
                                                Start Date : <?php echo $start_date; ?>
                                                End Date : <?php echo $end_date; ?>

                                            </p>
                                            <div>
                                                Type : <?php echo $tour->type ?> | Total Days: <?php echo $days->format("%a"); ?>
                                            </div>
                                            <div>
                                                Route : 
                                                <?php
                                                foreach ($routes as $route) {
                                                    $i++;
                                                    if ($i != $total_routes) {
                                                        echo $route . "->";
                                                    } else {
                                                        echo $route;
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div>
                                                <?php if (isset($isfav) && $isfav != '') { ?>
                                                    <a href="javascript:void(0);" id="fav" onclick="removeFavourite(<?= $isfav->id ?>)">Remove From Favourites </a>
                                                <?php } else { ?>
                                                    <a href="javascript:void(0);" id="fav" onclick="addFavourite(<?= $tour->id ?>)">Add To Favourite</a>
                                                <?php } ?>
                                            </div>
                                        </div>


                                    </div>
                                </div> 
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="col-md-12"> 
                    <div class="pull-right">
                        <div class="pagination">
                            <?php if (isset($links)) { ?>
                                <?php echo $links ?>
                            <?php } ?>
                        </div>
                    </div>                
                </div>
            </div>  
        </div>              
    </div>
</div>

