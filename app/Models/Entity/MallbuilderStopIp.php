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
 * IP锁定表

 * @Entity()
 * @Table(name="mallbuilder_stop_ip")
 * @uses      MallbuilderStopIp
 */
class MallbuilderStopIp extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $ip IP
     * @Column(name="ip", type="string", length=25)
     * @Required()
     */
    private $ip;

    /**
     * @var string $reason 原因
     * @Column(name="reason", type="string", length=50)
     */
    private $reason;

    /**
     * @var int $optime 打开时间
     * @Column(name="optime", type="integer")
     */
    private $optime;

    /**
     * @var int $stoptime 关闭时间
     * @Column(name="stoptime", type="integer")
     */
    private $stoptime;

    /**
     * @var int $autorelease 自动打开
     * @Column(name="autorelease", type="integer")
     */
    private $autorelease;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint", default=1)
     */
    private $statu;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=1)
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
     * IP
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

        return $this;
    }

    /**
     * 原因
     * @param string $value
     * @return $this
     */
    public function setReason(string $value): self
    {
        $this->reason = $value;

        return $this;
    }

    /**
     * 打开时间
     * @param int $value
     * @return $this
     */
    public function setOptime(int $value): self
    {
        $this->optime = $value;

        return $this;
    }

    /**
     * 关闭时间
     * @param int $value
     * @return $this
     */
    public function setStoptime(int $value): self
    {
        $this->stoptime = $value;

        return $this;
    }

    /**
     * 自动打开
     * @param int $value
     * @return $this
     */
    public function setAutorelease(int $value): self
    {
        $this->autorelease = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
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
     * IP
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * 原因
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * 打开时间
     * @return int
     */
    public function getOptime()
    {
        return $this->optime;
    }

    /**
     * 关闭时间
     * @return int
     */
    public function getStoptime()
    {
        return $this->stoptime;
    }

    /**
     * 自动打开
     * @return int
     */
    public function getAutorelease()
    {
        return $this->autorelease;
    }

    /**
     * 状态
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 类型
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}
