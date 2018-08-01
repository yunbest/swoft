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
 * 商品类型表

 * @Entity()
 * @Table(name="mallbuilder_type")
 * @uses      MallbuilderType
 */
class MallbuilderType extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 类型名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var int $taobaoTypeId 淘宝分类ID
     * @Column(name="taobao_type_id", type="integer", default=0)
     */
    private $taobaoTypeId;

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
     * 类型名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 淘宝分类ID
     * @param int $value
     * @return $this
     */
    public function setTaobaoTypeId(int $value): self
    {
        $this->taobaoTypeId = $value;

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
     * 类型名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 淘宝分类ID
     * @return int
     */
    public function getTaobaoTypeId()
    {
        return $this->taobaoTypeId;
    }

}
