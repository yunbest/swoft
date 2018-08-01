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
 * 商品类型与规格对应表

 * @Entity()
 * @Table(name="mallbuilder_type_spec")
 * @uses      MallbuilderTypeSpec
 */
class MallbuilderTypeSpec extends Model
{
    /**
     * @var int $typeId 类型id
     * @Column(name="type_id", type="integer")
     * @Required()
     */
    private $typeId;

    /**
     * @var int $specId 规格id
     * @Column(name="spec_id", type="integer")
     * @Required()
     */
    private $specId;

    /**
     * 类型id
     * @param int $value
     * @return $this
     */
    public function setTypeId(int $value): self
    {
        $this->typeId = $value;

        return $this;
    }

    /**
     * 规格id
     * @param int $value
     * @return $this
     */
    public function setSpecId(int $value): self
    {
        $this->specId = $value;

        return $this;
    }

    /**
     * 类型id
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * 规格id
     * @return int
     */
    public function getSpecId()
    {
        return $this->specId;
    }

}
