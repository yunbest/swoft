<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="mallbuilder_defind_5")
 * @uses      MallbuilderDefind5
 */
class MallbuilderDefind5 extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $productId 
     * @Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var string $colorImg 
     * @Column(name="color_img", type="text", length=65535)
     */
    private $colorImg;

    /**
     * @var string $property4 
     * @Column(name="property_4", type="string", length=255)
     */
    private $property4;

    /**
     * @var string $property5 
     * @Column(name="property_5", type="string", length=255)
     */
    private $property5;

    /**
     * @var string $property7 
     * @Column(name="property_7", type="string", length=255)
     */
    private $property7;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setProductId(int $value): self
    {
        $this->productId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setColorImg(string $value): self
    {
        $this->colorImg = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProperty4(string $value): self
    {
        $this->property4 = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProperty5(string $value): self
    {
        $this->property5 = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProperty7(string $value): self
    {
        $this->property7 = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getColorImg()
    {
        return $this->colorImg;
    }

    /**
     * @return string
     */
    public function getProperty4()
    {
        return $this->property4;
    }

    /**
     * @return string
     */
    public function getProperty5()
    {
        return $this->property5;
    }

    /**
     * @return string
     */
    public function getProperty7()
    {
        return $this->property7;
    }

}
