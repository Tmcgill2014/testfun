<?

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{

	protected $product;

	public function setUp()
	{
		$this->product = new Product("Donuts", 3);
	}

	function test_a_product_has_name()
	{
//this is making the assertion
		$this->assertEquals('Donuts', $this->product->name());
	}

	function test_a_product_has_price()
	{
		
			$this->assertEquals(3, $this->product->price());
		
	}
}