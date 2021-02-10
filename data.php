<?php
$data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
system('clear');
echo "
 ____  ____    __     ___  ____  ____
(_  _)(  _ \  /__\   / __)( ___)(  _ \
  )(   )   / /(__)\ ( (__  )__)  )   /
 (__) (_)\_)(__)(__) \___)(____)(_)\_)\n";
echo "\n";
echo "author   :  HadsXdev\n";
echo "facebook :  Hadi    \n";
echo "instagram:  Cyber_ghost.official\n";
echo "\n";
echo "IP Address : ";
$ip = trim(fgets(STDIN));
if($data['status'] == "success"){
	echo "IP           :   ".$data['query']."\n";
	echo "country      :   ".$data['country']."\n";
	echo "country code :   ".$data['countryCode']."\n";
	echo "region       :   ".$data['region']."\n";
	echo "region name  :   ".$data['regionName']."\n";
	echo "city         :   ".$data['city']."\n";
	echo "zip code     :   ".$data['zip']."\n";
	echo "timezone     :   ".$data['timezone']."\n";
	echo "isp          :   ".$data['isp']."\n";
	echo "organization :   ".$data['org']."\n";
	echo "asn          :   ".$data['as']."\n";
	echo "latitude     :   ".$data['lat']."\n";
	echo "longtitude   :   ".$data['lon']."\n";
	echo "location     :   ".$data['lat'].",".$data['lon']."\n";
}
else{
	echo "ip wrong\n";
}
?>
