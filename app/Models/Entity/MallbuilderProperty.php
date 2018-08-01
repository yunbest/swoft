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
 * @Table(name="mallbuilder_property")
 * @uses      MallbuilderProperty
 */
class MallbuilderProperty extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 属性名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var int $typeId 所属类型id
     * @Column(name="type_id", type="integer")
     * @Required()
     */
    private $typeId;

    /**
     * @var string $item 属性值列
     * @Column(name="item", type="text", length=65535)
     * @Required()
     */
    private $item;

    /**
     * @var int $isSearch 是否被搜索。0为不搜索、1为搜索
     * @Column(name="is_search", type="tinyint", default=0)
     */
    private $isSearch;

    /**
     * @var string $format 显示类型
     * @Column(name="format", type="string", length=8)
     * @Required()
     */
    private $format;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="tinyint", default=0)
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
     * 属性名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 所属类型id
     * @param int $value
     * @return $this
     */
    public function setTypeId(int $value): self
    {
        $this->typeId = $value;

        return $this;
    }

    /**
     * 属性值列
     * @param string $value
     * @return $this
     */
    public function setItem(string $value): self
    {
        $this->item = $value;

        return $this;
    }

    /**
     * 是否被搜索。0为不搜索、1为搜索
     * @param int $value
     * @return $this
     */
    public function setIsSearch(int $value): self
    {
        $this->isSearch = $value;

        return $this;
    }

    /**
     * 显示类型
     * @param string $value
     * @return $this
     */
    public function setFormat(string $value): self
    {
        $this->format = $value;

        return $this;
    }

    /**
     * 排序
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
     * 属性名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 所属类型id
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * 属性值列
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * 是否被搜索。0为不搜索、1为搜索
     * @return int
     */
    public function getIsSearch()
    {
        return $this->isSearch;
    }

    /**
     * 显示类型
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * 排序
     * @return int
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
