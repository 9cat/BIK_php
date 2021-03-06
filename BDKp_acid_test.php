<?php
/*
	Programmer: Shane B. (Xenland)
	Date: Nov, 9th 2012
	Purpose: To provide a drop-in library for php programmers that are not educated in the art of financial security and programming methods.
		Specific to this file: This page will allow you to run through a series of tests that prove if your system is suitable for this library for full functional capacity.
	Last Updated in Version: 0.0.x
	Bitcoin Address: 13ow3MfnbksrSxdcmZZvkhtv4mudsnQeLh
	Website: http://bitcoindevkit.com
	
	License (AGPL)
		"Bitcoin Development Kit" (also referred to as "BDK", "BDKp", "BDKP", "BDK PHP", or "BDK for PHP") is free software: 
		you can redistribute it and/or modify it under the terms of the Affero General Public License 
		as published by the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		BDK is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		Affero General Public License for more details.

		You should have received a copy of the Affero General Public License
		along with BFWDK.  If not, see http://www.gnu.org/licenses/agpl-3.0.html
*/
/*
	BENCH MARK TESTING
	===================
*/

$pass_html = '<span style="color:darkgreen;font-weight:bold;">PASS</span>';
$fail_html =  '<span style="color:red;font-weight:bold;">FAIL</span>';

//Test if system supports 21 million bitcoins in satoshi value (210 Trillion)
$twohundredtentrillion_test = 21000000 * 100000000;
if(is_int($twohundredtentrillion_test) == true){
	$twohundredtentrillion_test_status = $pass_html;
}else{
	$twohundredtentrillion_test_status = $fail_html;
}
echo "<br/>--------------------------------<br/>";
echo "210 Trillion currency satoshi support";
echo "<br/>";
echo "Status:".$twohundredtentrillion_test_status;
echo "<br/><br/>";
echo "Raw Result<br/>";
var_dump($twohundredtentrillion_test);
?>