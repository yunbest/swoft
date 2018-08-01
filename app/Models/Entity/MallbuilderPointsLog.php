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
 * 会员积分日志表

 * @Entity()
 * @Table(name="mallbuilder_points_log")
 * @uses      MallbuilderPointsLog
 */
class MallbuilderPointsLog extends Model
{
    /**
     * @var int $id 积分日志编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $memberId 会员编号
     * @Column(name="member_id", type="integer")
     * @Required()
     */
    private $memberId;

    /**
     * @var string $memberName 会员名称
     * @Column(name="member_name", type="string", length=100)
     * @Required()
     */
    private $memberName;

    /**
     * @var int $points 积分数负数表示扣除
     * @Column(name="points", type="integer", default=0)
     */
    private $points;

    /**
     * @var int $type 
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var int $createTime 添加时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var string $desc 操作描述
     * @Column(name="desc", type="string", length=100)
     * @Required()
     */
    private $desc;

    /**
     * 积分日志编号
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 会员编号
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 会员名称
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * 积分数负数表示扣除
     * @param int $value
     * @return $this
     */
    public function setPoints(int $value): self
    {
        $this->points = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 操作描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 积分日志编号
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 会员编号
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会员名称
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * 积分数负数表示扣除
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 添加时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 操作描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

}
