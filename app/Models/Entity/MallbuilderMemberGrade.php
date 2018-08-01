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
 * 会员等级表

 * @Entity()
 * @Table(name="mallbuilder_member_grade")
 * @uses      MallbuilderMemberGrade
 */
class MallbuilderMemberGrade extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 组名
     * @Column(name="name", type="string", length=50)
     * @Required()
     */
    private $name;

    /**
     * @var string $pic 
     * @Column(name="pic", type="string", length=255)
     */
    private $pic;

    /**
     * @var string $pic1 
     * @Column(name="pic1", type="string", length=255)
     */
    private $pic1;

    /**
     * @var string $desc 描述
     * @Column(name="desc", type="text", length=65535)
     * @Required()
     */
    private $desc;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态 0,1
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

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
     * 组名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPic1(string $value): self
    {
        $this->pic1 = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 状态 0,1
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 组名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @return string
     */
    public function getPic1()
    {
        return $this->pic1;
    }

    /**
     * 描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 状态 0,1
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
