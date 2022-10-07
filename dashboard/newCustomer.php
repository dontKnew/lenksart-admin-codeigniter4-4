<?php
	
	require_once("helper/define.php");
	
	$db = new lenskartDB(HOST, USER, PASSWORD, DB_NAME);
	
		if(isset($_POST['name'])){
			$name = $_POST['name']; 
			$father_name = $_POST['father_name']; 
			$phone_no = $_POST['phone_no']; 
			$email = $_POST['email']; 
			$address = $_POST['address']; 
			$city = $_POST['city']; 
			$pincode = $_POST['pincode']; 
			$location = $_POST['location']; 
			$investment_details = $_POST['investment_details']; 
			$current_business = $_POST['current_business']; 
			$message = $_POST['message']; 
			
			$result = $db->insert('customers',[
							"name"=>$name, "father_name"=>$father_name, "phone_no"=>$phone_no, 
							"email"=>$email, "address"=>$address, "city"=>$city, "location"=>$location, 
							"pincode"=>$pincode, "investment_details"=>$investment_details,
							 "current_business"=>$current_business, "message"=>$message
						]);
			if($result){
				// echo "<script>alert('Thanks for connecting us, we will contact you ASAP'); location.href='".ROOT."';</script>";
				echo $result
				// $url = ROOT;
    			// header('location:' . "$url" . '');
			}else{
				// echo json_encode(array("message=>Server side error occured", "status"=>0));
				echo "<scritp>alert('Something wrong'); history.back(); location.reload();</script>";
				// header('location:' . "$url" . '');
			}
		}else {
			echo "<scritp>alert('do not blank the form'); history.back();  </script>";
		}
?>

