$this->session->userdata('comapany_login') == 'yes'
info@milk.ng
AbcdeF123//
php artisan make:model Product -m

$category = new App\Category
$category->name = "Office Chairs"
$category->description = "Office Chairs"
$category->save()


$category = new App\Category
$category->name = "Executive Chairs"
$category->description = "Executive Chairs"
$category->save()

$category = new App\Category
$category->name = " Work Station"
$category->description = " Work Station"
$category->save()



$category = new App\Category
$category->name = "Meeting Chairs"
$category->description = "Meeting Chairs"
$category->save()
 
$category = new App\Category
$category->name = "Visitors Chairs"
$category->description = "Visitors Chairs"
$category->save()
exit(); // to leave tinker console
php artisan make:controller ProductsController

php artisan make:controller CategoryController


public function cleanlink($title){
      $title = trim($title);
      $title = str_replace("/", "-", $title);
       $title = str_replace("?", "", $title);
       $title = str_replace(".", "", $title);
       $title = str_replace("<", "", $title);
       $title = str_replace(">", "", $title);
       $title = str_replace(",", "", $title);
       $title = str_replace("--", "", $title);
       $title = str_replace(" ", "-", $title);

         return $title;
}
