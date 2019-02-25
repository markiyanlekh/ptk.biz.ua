function initMap() {
                          var dnipro = new google.maps.LatLng(48.4492, 35.0015);
                          var cnt = new google.maps.LatLng(48.4470, 35.0015);

                          var map = new google.maps.Map(document.getElementById('map'), {
                            center: dnipro,
                            zoom: 18,
                             disableDefaultUI: true,
                                                styles:
                                              [
                                                  {
                                                      "featureType": "administrative",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#d6e2e6"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "administrative",
                                                      "elementType": "geometry.stroke",
                                                      "stylers": [
                                                          {
                                                              "color": "#cfd4d5"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "administrative",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#7492a8"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "administrative.neighborhood",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "lightness": 25
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "landscape.man_made",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#dde2e3"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "landscape.man_made",
                                                      "elementType": "geometry.stroke",
                                                      "stylers": [
                                                          {
                                                              "color": "#cfd4d5"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "landscape.natural",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#dde2e3"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "landscape.natural",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#7492a8"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "landscape.natural.terrain",
                                                      "elementType": "all",
                                                      "stylers": [
                                                          {
                                                              "visibility": "off"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#dde2e3"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#588ca4"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi",
                                                      "elementType": "labels.icon",
                                                      "stylers": [
                                                          {
                                                              "saturation": -100
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi.park",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#a9de83"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi.park",
                                                      "elementType": "geometry.stroke",
                                                      "stylers": [
                                                          {
                                                              "color": "#bae6a1"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi.sports_complex",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#c6e8b3"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "poi.sports_complex",
                                                      "elementType": "geometry.stroke",
                                                      "stylers": [
                                                          {
                                                              "color": "#bae6a1"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#41626b"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road",
                                                      "elementType": "labels.icon",
                                                      "stylers": [
                                                          {
                                                              "saturation": -45
                                                          },
                                                          {
                                                              "lightness": 10
                                                          },
                                                          {
                                                              "visibility": "on"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.highway",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#c1d1d6"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.highway",
                                                      "elementType": "geometry.stroke",
                                                      "stylers": [
                                                          {
                                                              "color": "#a6b5bb"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.highway",
                                                      "elementType": "labels.icon",
                                                      "stylers": [
                                                          {
                                                              "visibility": "on"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.highway.controlled_access",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#9fb6bd"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.arterial",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#ffffff"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "road.local",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#ffffff"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit",
                                                      "elementType": "labels.icon",
                                                      "stylers": [
                                                          {
                                                              "saturation": -70
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit.line",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#b4cbd4"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit.line",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#588ca4"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit.station",
                                                      "elementType": "all",
                                                      "stylers": [
                                                          {
                                                              "visibility": "off"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit.station",
                                                      "elementType": "labels.text.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#008cb5"
                                                          },
                                                          {
                                                              "visibility": "on"
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "transit.station.airport",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "saturation": -100
                                                          },
                                                          {
                                                              "lightness": -5
                                                          }
                                                      ]
                                                  },
                                                  {
                                                      "featureType": "water",
                                                      "elementType": "geometry.fill",
                                                      "stylers": [
                                                          {
                                                              "color": "#a6cbe3"
                                                          }
                                                      ]
                                                  }
                                              ]

                                            });
                          let url="http://maps.google.com/mapfiles/ms/micons/purple.png";
                          var marker = new google.maps.Marker({
                            position:dnipro,
                            icon:{url:url}
                            });

                          marker.setMap(map);
                        }

                        var TILE_SIZE = 256;

                  function createInfoWindowContent(latLng, zoom) {
                          var scale = 1 << zoom;

                          var worldCoordinate = project(latLng);

                          var pixelCoordinate = new google.maps.Point(
                              Math.floor(worldCoordinate.x * scale),
                              Math.floor(worldCoordinate.y * scale));

                          var tileCoordinate = new google.maps.Point(
                              Math.floor(worldCoordinate.x * scale / TILE_SIZE),
                              Math.floor(worldCoordinate.y * scale / TILE_SIZE));

                          return [
                          'ПРОМТЕХКОМПЛЕКТ',
                            'Дніпро, вул. Робоча'
                            
                          ].join('<p>');
                        }

                    function project(latLng) {
                          var siny = Math.sin(latLng.lat() * Math.PI / 180);

                          // Truncating to 0.9999 effectively limits latitude to 89.189. This is
                          // about a third of a tile past the edge of the world tile.
                          siny = Math.min(Math.max(siny, -0.9999), 0.9999);

                          return new google.maps.Point(
                              TILE_SIZE * (0.5 + latLng.lng() / 360),
                              TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
                        }