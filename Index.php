<?php  
$content='Home.php';
$title="Furniture Manufacturer";
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) { 
	case 'about' :
		$content='About.php';
		$title="About";		
		break;
	case 'gallery' :
		$content='Gallery.php';	
		$title="Gallery";			
		break;	
	case 'faq' :
		$content='Faq.php';	
		$title="Faq";		
		break;	
	case 'contact' :
		$content='Contact.php';	
		$title="Contact";		
		break;			
	case 'living' :
		$content='Living.php';
		$title="Living Room";			
		break;		
	case 'dining' :
		$content='Dining.php';
		$title="Dining Room";			
		break;		
	case 'occasional' :
		$content='Occasional.php';
		$title="Occasional";			
		break;		
	case 'barstool' :
		$content='Barstool.php';
		$title="Barstools and Counterstools";			
		break;		
	case 'cabinet' :
		$content='Cabinet.php';
		$title="Cabinets and Storage";			
		break;		
	case 'console' :
		$content='Console.php';
		$title="Console Tables";			
		break;		
	case 'basket' :
		$content='Basket.php';
		$title="Baskets";			
		break;		
	case 'decor' :
		$content='Decor.php';
		$title="Home Decor";			
		break;		
	case 'outdoor' :
		$content='Outdoor.php';
		$title="Outdoor";			
		break;		
	case 'accessory' :
		$content='Accessory.php';
		$title="Accessories";			
		break;				
	case 'product' :
		$content='Product.php';
		$title="Product";			
		break;				
	default :
	    $active_home='active';	
		$content ='Home.php';
		$title="Furniture Manufacturer";		
}
require_once("Template.php");
?>