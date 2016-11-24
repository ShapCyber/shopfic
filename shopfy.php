<?php 
class PostToShopfy{
//here is our Api key we can keep it parmanet here or request it from the user input
static private $url = "https://apikey:password@domain.myshopify.com/admin/products.json";
public function __construct()
{
//further code comes here
}
public function PostNewProduct($title,$bodyHtml,$vendor,$productType,$sku,$price,$size,$taxable,$ProductImges){	
$ShopfyProductsArray = array(
"product"=>array(
"title"=> $title,
"body_html"=> $bodyHtml,
"vendor"=>$vendor,
"product_type"=>$productType,
"published"=> false , //true or false
 "variants"=>array(array("sku"=>$sku,"price"=>$price,"size"=>$size,"taxable"=>$taxable,),
 //our images are in array so we post as 
 "images"=>$ProductImges
)
)
);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, self::$url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($products_array));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec ($curl);
curl_close ($curl);
 if($response):
return ($response);
 else:return "There An Error!";
endif;
 
}
//===========
//Close class				
}
$NewsProDut=new PostToShopfy();
//all these variable are just draft it might be the same with the form input
// we correct does later
if(isset($_REQUEST['ProductPost'])):
$title=$_REQUEST['ProductTitle'];
$bodyHtml=$_REQUEST['ProductDescription'];
$vendor=$_REQUEST['ProductVendor'];
$productType=$_REQUEST['ProductType'];
$sku=$_REQUEST['ProductSku'];
$price=$_REQUEST['ProductPrice'];
$size=$_REQUEST['ProductSize'];
$taxable=$_REQUEST['ProductTaxable'];
$ProductImges=$_REQUEST['fileselect'];
//here we call the class to post to Shopfy
$test=$NewsProDut->PostNewProduct($title,$bodyHtml,$vendor,$productType,$sku,$price,$size,$taxable,$ProductImges);
echo ($test);
endif;
?>
