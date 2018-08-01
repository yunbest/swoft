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
 * 商品规格值表

 * @Entity()
 * @Table(name="mallbuilder_spec_value")
 * @uses      MallbuilderSpecValue
 */
class MallbuilderSpecValue extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 规格值名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var int $specId 所属规格id
     * @Column(name="spec_id", type="integer")
     * @Required()
     */
    private $specId;

    /**
     * @var string $image 规格图片
     * @Column(name="image", type="string", length=100)
     */
    private $image;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="tinyint", default=1)
     */
    private $displayorder;

    /**
     * @var int $taobaoSpecId 淘宝规格ID
     * @Column(name="taobao_spec_id", type="integer", default=0)
     */
    private $taobaoSpecId;

    /**
     * @var string $type 类型
     * @Column(name="type", type="string", length=40)
     * @Required()
     */
    private $type;

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
     * 规格值名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 所属规格id
     * @param int $value
     * @return $this
     */
    public function setSpecId(int $value): self
    {
        $this->specId = $value;

        return $this;
    }

    /**
     * 规格图片
     * @param string $value
     * @return $this
     */
    public function setImage(string $value): self
    {
        $this->image = $value;

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
     * 淘宝规格ID
     * @param int $value
     * @return $this
     */
    public function setTaobaoSpecId(int $value): self
    {
        $this->taobaoSpecId = $value;

        return $this;
    }

    /**
     * 类型
     * @param string $value
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

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
     * 规格值名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 所属规格id
     * @return int
     */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * 规格图片
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * 排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 淘宝规格ID
     * @return int
     */
    public function getTaobaoSpecId()
    {
        return $this->taobaoSpecId;
    }

    /**
     * 类型
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
