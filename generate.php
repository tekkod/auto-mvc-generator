<?php
/* 
Yakup TAŞLIBEYAZ
Gmail    : jestoldu@gmail.com
Facebook : https://www.facebook.com/tekkod
Twitter  : https://twitter.com/TEKKOD
Linkedin : https://www.linkedin.com/profile/view?id=AAIAAAsY40kBEWhhXEIQAdoqL1AjYOOlkFeT7Y4
*/
?>
<?php 
$controller_name = $_POST['generate'];
$m_create = touch(ucfirst($controller_name).'Model'.".php.txt");
$v_create = touch(ucfirst($controller_name).'View'.".php.txt");
$c_create = touch(ucfirst($controller_name).'Controller'.".php.txt");

/* Model */
$model_name=ucfirst($controller_name).'Model';
$model_content = "";
$model_content .= "<?php".PHP_EOL;
$model_content .= "/***".PHP_EOL." $model_name Hakkında Kısa Açıklama ".PHP_EOL."*/".PHP_EOL;
$model_content .= "class ".$model_name." extends Model {".PHP_EOL;
$model_content .= "    public function __construct(){".PHP_EOL;
$model_content .= "        parent::__construct();".PHP_EOL;
$model_content .= "    }".PHP_EOL;
$model_content .= "}".PHP_EOL;
$model_content .= "?>".PHP_EOL;
/* View */

$view_directory = mkdir($controller_name,755);
$view_name=ucfirst($controller_name).'View';
$view_content = "";
$view_content .= "<?php".PHP_EOL;
$view_content .= "/***".PHP_EOL." $view_name Hakkında Kısa Açıklama ".PHP_EOL."*/".PHP_EOL;
$view_content .= "class ".$view_name." extends View {".PHP_EOL;
$view_content .= "    public function __construct(){".PHP_EOL;
$view_content .= "        parent::__construct();".PHP_EOL;
$view_content .= "    }".PHP_EOL;
$view_content .= "}".PHP_EOL;
$view_content .= "?>".PHP_EOL;

/* Controller2 */
$controller2_name=ucfirst($controller_name).'Controller';
$controller2_content = "";
$controller2_content .= "<?php".PHP_EOL;
$controller2_content .= "/***".PHP_EOL." $controller2_name Hakkında Kısa Açıklama ".PHP_EOL."*/".PHP_EOL;
$controller2_content .= "class ".$controller2_name." extends Controller {".PHP_EOL;
$controller2_content .= "    public function __construct(){".PHP_EOL;
$controller2_content .= "        parent::__construct();".PHP_EOL;
$controller2_content .= "    }".PHP_EOL;
$controller2_content .= "}".PHP_EOL;
$controller2_content .= "?>".PHP_EOL;

if ($m_create && $v_create && $c_create) {
	$file = fopen(ucfirst($controller_name).'Model'.".php.txt", "w") or exit("Dosyaya Erişilemiyor!");;
	fwrite ( $file , $model_content ) ;
	fclose($file);

	$file1 = fopen(ucfirst($controller_name).'View'.".php.txt", "w") or exit("Dosyaya Erişilemiyor!");;
	fwrite ( $file1 , $view_content ) ;
	fclose($file1);

	$file2 = fopen(ucfirst($controller_name).'Controller'.".php.txt", "w") or exit("Dosyaya Erişilemiyor!");;
	fwrite ( $file2 , $controller2_content ) ;
	fclose($file2);

	echo "1";
} 
?>