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
 * @Table(name="mallbuilder_defind_13")
 * @uses      MallbuilderDefind13
 */
class MallbuilderDefind13 extends Model
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
     * @var string $property8 
     * @Column(name="property_8", type="string", length=255)
     */
    private $property8;

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
    public function setProperty8(string $value): self
    {
        $this->property8 = $value;

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
    public function getProperty8()
    {
        return $this->property8;
    }

}
