@extends('layouts.app')

<!-- navcontent -->
@section('navcontent')
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="/">Trang chủ</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signup">Đăng ký</a></li>
        <li><a href="/login">Đăng nhập</a></li>
            <li><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>
@endsection

<!-- bodycontent -->
@section('content')
  <section id="create-new-tour">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
              <h2 class="section-heading">Tạo tour mới!</h2>
              <hr>
            </div>
          </div>
          
          <div class="row">
            <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                  <div class="error">
                   @include('errors.errors')
                  </div>
                  <form class="form-horizontal" action="/create" method="POST">
                    {{ csrf_field() }}
                     <div class="form-group">
                      <label for="username" class="col-sm-4 control-label">Tên của bạn *</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên của bạn *">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="phone" class="col-sm-4 control-label">Số điện thoại *</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address" class="col-sm-4 control-label">Địa chỉ *</label>
                      <div class="col-sm-8">
                       <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="date" class="col-sm-4 control-label">Ngày khởi hành *</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="date" name="date" placeholder="Ngày khởi hành">
                      </div>
                    </div>
                    <!-- -->
                    <div class="form-group">
                      <label for="" class="col-sm-4 control-label">Số người lớn *</label>
                      <div class="col-sm-8">
                       <select class="form-control" id="adult-number" name="adult_number">
                        <option value="0">5 người</option>
                        <option value="1">6 người</option>
                        <option value="2">7 người</option>
                        <option value="3">8 người</option>
                        <option value="4">9 người</option>
                        <option value="5">10 người</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-4 control-label">Số trẻ em *</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="child-number" name="child_number">
                        <option value="0">0 người</option>
                        <option value="1">1 người</option>
                        <option value="2">2 người</option>
                        <option value="3">3 người</option>
                        <option value="4">4 người</option>
                        <option value="5">5 người</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="schedule" id='schedule-input'>
                    </div>
                    <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-default">Gửi yêu cầu</button>
                    </div>
                  </form>
                </div>
                <div class="col-sm-6" style="">
                  <div class="row">
                    <table class="table tour-table" id="tour-point-table">
                      <caption>Lịch trình</caption>
                        <thead>
                          <tr><th>#</th><th>Địa điểm</th><th></th></tr>
                        </thead>
                    <tbody></tbody>
                    </table>
                  </div>
                  <div class="row">
                    <button class="btn btn-default col-sm-3 col-sm-offset-9" data-toggle="modal" data-target="#myModal">Xem tour/Lịch trình</button>
                      <!-- modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document" style="width: 95%;">
                        <div class="modal-content">
                          <div class="modal-header">
                            <span><b>Lịch trình</b></span>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">                     
                            <div class="row">
                              <div class="col-sm-8">
                                <div id="pac-container">
                                  <!-- Tìm kiếm -->
                                  <div id="type-selector" class="pac-controls">
                                    <input type="radio" name="type" id="changetype-all" checked>
                                    <label for="changetype-all">Tất cả</label>
                                    <input type="radio" name="type" id="changetype-hotel">
                                    <label for="changetype-establishment">Khách sạn</label>
                                    <input type="radio" name="type" id="changetype-restaurant">
                                    <label for="changetype-address">Nhà hàng</label>
                                    <input type="radio" name="type" id="changetype-store">
                                    <label for="changetype-address">Cửa hàng, chợ</label>
                                    <input type="radio" name="type" id="changetype-park">
                                    <label for="changetype-geocode">Giải trí</label>
                                    <input class="form-control" style="width: 250px;" id="pac-input" type="text"
                                          placeholder="Tìm kiếm địa điểm">
                                  </div> 
                                </div>
                                <div id="map" style="height: 450px;"></div>
                                <div id="infowindow-content">
                                  <img src="" width="16" height="16" id="place-icon">
                                  <span id="place-name"  class="title"></span><br>
                                  <span id="place-address"></span>
                                </div>
                                
                                </div>
                              <div class="col-sm-4">
                                <table class="table tour-table" id="tour-point-table">
                                  <caption>Lịch trình</caption>
                                  <thead>
                                    <tr><th>#</th><th>Địa điểm</th></tr>
                                  </thead>
                                  <tbody></tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                          <button type="button" class="btn btn-primary">Chọn</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <button class="btn btn-default col-sm-3 col-sm-offset-9" data-toggle="modal" data-target="#simple-tour">Tour mẫu</button>
                      <!-- modal -->
                    <div class="modal fade" id="simple-tour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4>Danh sách tour</h4>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Mã tour</th>
                                  <th>Lịch trình</th>
                                  <th>Giá</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                            </table>              
                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                          <!-- <button type="button" class="btn btn-primary">Chọn</button> -->
                        </div>
                      </div>
                    </div>
                  </div>

                 
                </div>

                <div class="row">
                  Điểm đến nổi bật
                  @include('sections.places')
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </section>
     <script>
     $("#myModal").on("shown.bs.modal", function () {
          google.maps.event.trigger(map, "resize");
      });

     var travelPoints = [];
     var markers = [];
     var map, places, infoWindow;
     var autocomplete;
     var input;
     var places;
     var infowindowContent;

     var marker;
     var place;

     function initMap() {
        var hanoi = {lat:21.0227003 , lng: 105.801944};

        map = new google.maps.Map(document.getElementById('map'), {
          center: hanoi,
          zoom: 17
        });

       // search();

       
        
        
        input = document.getElementById('pac-input');
        var container = document.getElementById('pac-container');
        

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(container);

        //autocomplete = new google.maps.places.Autocomplete(input, {types:['(cities)'], componentRestrictions: {'country': 'us'}});
        autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        places = new google.maps.places.PlacesService(map);

        infowindow = new google.maps.InfoWindow();
        infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);

        autocomplete.addListener('place_changed', onPlaceChanged);
        //autocomplete.addListener('place_changed', fuck);

        map.addListener('dragend', search);
      }

      // function fuck() {
      //     infowindow.close();
      //     marker.setVisible(false);
      //     place = autocomplete.getPlace();
      //     if (!place.geometry) {
      //       window.alert("No details available for input: '" + place.name + "'");
      //       return;
      //     }

      //     // If the place has a geometry, then present it on a map.
      //     if (place.geometry.viewport) {
      //       map.fitBounds(place.geometry.viewport);
      //     } else {
      //       map.setCenter(place.geometry.location);
      //       map.setZoom(17);  // Why 17? Because it looks good.
      //     }
      //     marker.setPosition(place.geometry.location);
      //     marker.setVisible(true);

      //     var address = '';
      //     if (place.address_components) {
      //       address = [
      //         (place.address_components[0] && place.address_components[0].short_name || ''),
      //         (place.address_components[1] && place.address_components[1].short_name || ''),
      //         (place.address_components[2] && place.address_components[2].short_name || '')
      //       ].join(' ');
      //     }

      //     infowindowContent.children['place-icon'].src = place.icon;
      //     infowindowContent.children['place-name'].textContent = place.name;
      //     infowindowContent.children['place-address'].textContent = address;
      //     infowindow.open(map, marker);
      // }

      function updateSchedule() {
        var marker = this;
          places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
              if (status !== google.maps.places.PlacesServiceStatus.OK) {
                return;
              }
              travelPoints.push(place);
              updateTravelsPointTable();
            });
      }

      function deleteItemSchedule(i) {
        //alert('hello ' + i);
        travelPoints.splice(i, 1);
        updateTravelsPointTable();
      }

      function makeScheduleJSONString() {
        $('#schedule-input').val(JSON.stringify(travelPoints)); 
      }

      function deleteAllSchedule() {
        travelPoints.splice(0, travelPoints.length);
      }

      function updateTravelsPointTable() {
          $('.tour-table').find('tbody').empty();
          for(var i = 0; i < travelPoints.length; i++)
           $('.tour-table').find('tbody').append("<tr><td>"+i+"</td><td>"+travelPoints[i].name+"</td><td><button class='btn btn-default'style='margin-left: 10px;' onClick='deleteItemSchedule("+i+")' style='padding-left: 10px;'>Xóa</button></td></tr>");
         makeScheduleJSONString();
      }

      function clearMarkers() {
        for(var i = 0; i < markers.length; i++) {
          if(markers[i]) {
            markers[i].setMap(null);
          }
        }
        markers = [];
      }

      function search() {
        var search =  {
          bounds: map.getBounds(),
          types: ['lodging']
        };

        places.nearbySearch(search, function(results, status) {
          if(status === google.maps.places.PlacesServiceStatus.OK) {
            clearMarkers();

            for(var i = 0; i < results.length; i++) {
             markers[i] = new google.maps.Marker({
                position: results[i].geometry.location,
                //animation: google.maps.Animation.DROP,
                map: map
              });

             markers[i].placeResult = results[i];
             //infowindow.open(map, markers[i]);
             google.maps.event.addListener(markers[i], 'mouseover', showInfoWindow);
             google.maps.event.addListener(markers[i], 'mouseout', function() {
              
              infowindow.close()
             });
             google.maps.event.addListener(markers[i], 'click', updateSchedule);
             
            }
          }
        });
      }

      function showInfoWindow() {
        var marker = this;
        places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
              if (status !== google.maps.places.PlacesServiceStatus.OK) {
                return;
              }
              
              infowindow.open(map, marker);
              buildIWContent(place);
            });
      }

      function buildIWContent(place) {
         var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
      }

      function onPlaceChanged() {
        var place = autocomplete.getPlace();
        if(place.geometry) {
          map.panTo(place.geometry.location);
          map.setZoom(15);
          search();

        } else {
            input.placeholder = 'Nhập thành phố';
        }
      }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlz-_qxxGs2xQfKf4uMo49WRFh23pDN3Q&libraries=places&callback=initMap" async defer></script>
@endsection