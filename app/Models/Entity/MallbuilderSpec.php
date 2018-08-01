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
 * 商品规格表

 * @Entity()
 * @Table(name="mallbuilder_spec")
 * @uses      MallbuilderSpec
 */
class MallbuilderSpec extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 规格名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var string $format 显示类型
     * @Column(name="format", type="string", length=5)
     * @Required()
     */
    private $format;

    /**
     * @var string $item 规格值列
     * @Column(name="item", type="text", length=65535)
     * @Required()
     */
    private $item;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="tinyint", default=0)
     */
    private $displayorder;

    /**
     * @var int $taobaoSpecId 淘宝规格id
     * @Column(name="taobao_spec_id", type="integer", default=0)
     */
    private $taobaoSpecId;

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
     * 规格名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

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
     * 规格值列
     * @param string $value
     * @return $this
     */
    public function setItem(string $value): self
    {
        $this->item = $value;

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
     * 淘宝规格id
     * @param int $value
     * @return $this
     */
    public function setTaobaoSpecId(int $value): self
    {
        $this->taobaoSpecId = $value;

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
     * 规格名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * 规格值列
     * @return string
     */
    public function getItem()
    {
        return $this->item;
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
     * 淘宝规格id
     * @return int
     */
    public function getTaobaoSpecId()
    {
        return $this->taobaoSpecId;
    }

}
