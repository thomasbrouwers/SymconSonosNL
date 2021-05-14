<?
function get_available_stations(){
  //Taken URLs from  http://wiki.ubuntuusers.de/internetradio/stationen 
  $RadioStations =  Array(
            Array( ('name') => "NPO Radio 2",
                   ('logo') => "http://cdn-radiotime-logos.tunein.com/s25260q.png",
                   ('url')  => "x-sonosapi-stream:s9483?sid=254&flags=8224&sn=0" ),
	
            Array( ('name') => "538",
                   ('logo') => "http://cdn-radiotime-logos.tunein.com/s25260q.png",
                   ('url')  => "x-sonosapi-stream:talpa%3a154008?sid=303&flags=8224&sn=3" ),

            Array( ('name') => "TestRadioStation",
                   ('logo') => "http://cdn-radiotime-logos.tunein.com/s186710q.png",
                   ('url')  => "x-sonosapi-stream:s186710?sid=254" )
                         );

  return  $RadioStations ;
}

function get_station_url($name, $RadioStations = null){

  if ( $RadioStations === null ){ $RadioStations = get_available_stations(); };

  foreach ( $RadioStations as $key => $val ) {
      if ($val['name'] === $name) {
          return $RadioStations[$key]['url'];
      }
  }
}

?>
