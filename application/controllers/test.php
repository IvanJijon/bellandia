<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	/*
	$servername = "bellandia.info";
	$username = "bellan14_lodge";
	$password = "b3lland1a16";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";*/
	
	
	$dbname = 'bellan14_bellandia';
	$dbuser = 'bellan14_lodge';
	$dbpass = 'test1234';
	$dbhost = 'bellandia.info';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
	mysql_select_db($dbname) or die("Could not open the db '$dbname'");
	$test_query = "SHOW TABLES FROM $dbname";
	$result = mysql_query($test_query);
	$tblCnt = 0;
	while($tbl = mysql_fetch_array($result)) {
	  $tblCnt++;
	  #echo $tbl[0]."<br />\n";
	}
	if (!$tblCnt) {
	  echo "There are no tables<br />\n";
	} else {
	  echo "There are $tblCnt tables<br />\n";
	}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/test.php */
