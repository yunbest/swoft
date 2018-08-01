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
 * 会员结算利率表

 * @Entity()
 * @Table(name="mallbuilder_grade_config")
 * @uses      MallbuilderGradeConfig
 */
class MallbuilderGradeConfig extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $memberType 会员类型，0普通会员，3经纪人
     * @Column(name="member_type", type="integer")
     */
    private $memberType;

    /**
     * @var float $value 变量
     * @Column(name="value", type="float")
     */
    private $value;

    /**
     * @var string $tName 类型名称
     * @Column(name="t_name", type="string", length=50)
     * @Required()
     */
    private $tName;

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
     * 会员类型，0普通会员，3经纪人
     * @param int $value
     * @return $this
     */
    public function setMemberType(int $value): self
    {
        $this->memberType = $value;

        return $this;
    }

    /**
     * 变量
     * @param float $value
     * @return $this
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * 类型名称
     * @param string $value
     * @return $this
     */
    public function setTName(string $value): self
    {
        $this->tName = $value;

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
     * 会员类型，0普通会员，3经纪人
     * @return int
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * 变量
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 类型名称
     * @return string
     */
    public function getTName()
    {
        return $this->tName;
    }

}
