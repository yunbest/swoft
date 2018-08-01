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
 * @Table(name="mallbuilder_grade")
 * @uses      MallbuilderGrade
 */
class MallbuilderGrade extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userid 
     * @Column(name="userid", type="integer")
     * @Required()
     */
    private $userid;

    /**
     * @var string $tim 
     * @Column(name="tim", type="string", length=25)
     * @Required()
     */
    private $tim;

    /**
     * @var int $total 
     * @Column(name="total", type="integer")
     * @Required()
     */
    private $total;

    /**
     * @var float $lv 
     * @Column(name="lv", type="float")
     * @Required()
     */
    private $lv;

    /**
     * @var float $pay 
     * @Column(name="pay", type="float")
     * @Required()
     */
    private $pay;

    /**
     * @var float $stotal 
     * @Column(name="stotal", type="float")
     * @Required()
     */
    private $stotal;

    /**
     * @var int $status 0:审核状态，1：审核通过，2：未通过
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $clTime 处理时间
     * @Column(name="cl_time", type="integer", default=0)
     */
    private $clTime;

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
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTim(string $value): self
    {
        $this->tim = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setTotal(int $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setLv(float $value): self
    {
        $this->lv = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setPay(float $value): self
    {
        $this->pay = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setStotal(float $value): self
    {
        $this->stotal = $value;

        return $this;
    }

    /**
     * 0:审核状态，1：审核通过，2：未通过
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 处理时间
     * @param int $value
     * @return $this
     */
    public function setClTime(int $value): self
    {
        $this->clTime = $value;

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
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @return string
     */
    public function getTim()
    {
        return $this->tim;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getLv()
    {
        return $this->lv;
    }

    /**
     * @return float
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * @return float
     */
    public function getStotal()
    {
        return $this->stotal;
    }

    /**
     * 0:审核状态，1：审核通过，2：未通过
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 处理时间
     * @return int
     */
    public function getClTime()
    {
        return $this->clTime;
    }

}
