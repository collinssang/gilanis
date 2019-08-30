define(['jquery'], function($) {
	$.widget('codazon.googlemap', {
		options: {
			mapLat: -1.2674513,
			mapLong: 36.8308651,
			mapZoom: 10,
			mapAddress: '',
			markerTitle: '',
			jsSource: '//maps.googleapis.com/maps/api/js?key=AIzaSyBPhrY0hWJrTFqyf_j4TJhBTe9oYg6ASFs',
		},
		_create: function(){
			var self  = this, config = this.options;
			require([config.jsSource],function(){
				var myLatlng = new google.maps.LatLng(config.mapLat, config.mapLong);
				var mapOptions = {
					zoom: config.mapZoom,
					center: {mapLat: -1.2674513, mapLong: 36.8308651}
				};
				var map = null;
				function createMap(){
					var map = new google.maps.Map(self.element.get(0), mapOptions);
					var marker = new google.maps.Marker({
						position: {mapLat: -1.2674513, mapLong: 36.8308651},
						map: map,
						title: config.markerTitle
					});
					google.maps.event.addListener(marker, 'click', function() {
						infowindow.open(map, marker);
					});
					google.maps.event.addListenerOnce(map, 'idle', function(){});
					return map;
				}
				
				if(self.element.parents('.cdz-menu').length > 0){
					var $menu = self.element.parents('.cdz-menu').first(),
					$li = self.element.parents('li.level0').first(),
					$ul = $li.find('> .groupmenu-drop');
					if(self.element.parents('.cdz-slide').length || self.element.parents('.cdz-fade').length || self.element.parents('.cdz-normal').length){
						$ul.on('animated',function(){
							if(map === null){
								map = createMap();
							}else{
								google.maps.event.trigger(map, 'resize');
							}
						});
						$li.hover(function(){
							setTimeout(function(){
								if(map === null){
									map = createMap();
								}else{
									google.maps.event.trigger(map, 'resize');
								}
							},450);
						},function(){
							
						});
					}else{
						$li.hover(function(){
							setTimeout(function(){
								if(map === null){
									map = createMap();
								}else{
									google.maps.event.trigger(map, 'resize');
								}
							},450);
						},function(){
							
						});
					}
				}else{
					map = createMap();
				}
			});
		}
	});
	return $.codazon.googlemap;
});