<section id="sectionBuy" class="buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <header class="sci-fi-title">
                    <h1>Buy</h1>
                    <hr/>
                </header>
                <!-- /.sci-fi-title -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <header class="sci-fi-title">
                                    <h4>Stores</h4>
                                    <hr/>
                                </header>
                                <!-- /.sci-fi-title -->
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                    <li>Store Str 5</li>
                                    <li>Store Str 11</li>
                                    <li>Store Str 43</li>
                                    <li>Store Str 177</li>
                                    <li>Store Str 24</li>
                                    <li>Store Str 79</li>
                                    <li>Store Str 10</li>
                                </ul>
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-sm-2 -->
                    <div class="col-sm-8">
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                        <div style='overflow:hidden;height:400px;width:100%;'>
                            <div id='gmap_canvas' style='height:400px;width:100%;'></div>
                            <div>
                                <small><a href="http://embedgooglemaps.com"> embed google maps </a></small>
                            </div>
                            <div>
                                <small><a href="https://privacypolicytemplate.net">privacy policy example</a></small>
                            </div>
                            <style>#gmap_canvas img {
                                    max-width: none !important;
                                    background: none !important
                                }</style>
                        </div>
                        <script type='text/javascript'>function init_map() {
                                var myOptions = {
                                    zoom: 12,
                                    center: new google.maps.LatLng(48.525463380955244, 34.906450639160084),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(48.525463380955244, 34.906450639160084)
                                });
                                infowindow = new google.maps.InfoWindow({content: '<strong>Title</strong><br>днепропетровск<br>'});
                                google.maps.event.addListener(marker, 'click', function () {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }
                            google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <header class="sci-fi-title">
                                    <h4>Details</h4>
                                    <hr/>
                                </header>
                                <!-- /.sci-fi-title -->
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda at explicabo, facere illum in magni mollitia odio porro quas quos repudiandae, similique voluptatem? Architecto distinctio impedit neque pariatur quidem.
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-sm-2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#sectionBuy.buy -->