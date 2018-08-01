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
 * 商品属性值表

 * @Entity()
 * @Table(name="mallbuilder_property_value")
 * @uses      MallbuilderPropertyValue
 */
class MallbuilderPropertyValue extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 属性值名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var int $propertyId 所属属性id
     * @Column(name="property_id", type="integer")
     * @Required()
     */
    private $propertyId;

    /**
     * @var int $displayorder 属性值排序
     * @Column(name="displayorder", type="tinyint", default=1)
     */
    private $displayorder;

    /**
     * @var int $taobaoPropertyId 淘宝属性ID
     * @Column(name="taobao_property_id", type="integer", default=0)
     */
    private $taobaoPropertyId;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 属性值名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 所属属性id
     * @param int $value
     * @return $this
     */
    public function setPropertyId(int $value): self
    {
        $this->propertyId = $value;

        return $this;
    }

    /**
     * 属性值排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * 淘宝属性ID
     * @param int $value
     * @return $this
     */
    public function setTaobaoPropertyId(int $value): self
    {
        $this->taobaoPropertyId = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 属性值名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 所属属性id
     * @return int
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * 属性值排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 淘宝属性ID
     * @return int
     */
    public function getTaobaoPropertyId()
    {
        return $this->taobaoPropertyId;
    }

}
